<?php

namespace Modules\Platform\CodeGenerator\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Modules\Platform\CodeGenerator\Generators\Impl\ConfigFile;
use Modules\Platform\CodeGenerator\Generators\Impl\ControllerFile;
use Modules\Platform\CodeGenerator\Generators\Impl\DatatableFile;
use Modules\Platform\CodeGenerator\Generators\Impl\EntityFile;
use Modules\Platform\CodeGenerator\Generators\Impl\FormFile;
use Modules\Platform\CodeGenerator\Generators\Impl\LangFile;
use Modules\Platform\CodeGenerator\Generators\Impl\MigrationFile;
use Modules\Platform\CodeGenerator\Generators\Impl\RequestFile;
use Modules\Platform\CodeGenerator\Generators\Impl\RouteFile;

use Modules\Platform\CodeGenerator\Lib\FileHelper;
use Modules\Platform\CodeGenerator\Lib\Validator\EntityConfigValidator;
use Modules\Platform\CodeGenerator\Lib\Validator\ModuleConfigValidator;

class ModuleGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calsob:crudgen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates module base on config.php';

    private $config;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $module = \Module::find('codegenerator');

      $this->config = \File::getRequire('Modules/Platform/CodeGenerator/Config/generator.php');

      $this->info('Checking configration files...');

      try {

          $this->info('Validating module configuration.');

          $moduleValidator = new ModuleConfigValidator();
          $moduleValidator->validate($this->config);

          $this->info('Validating entity configuration.');

          $entityValidator = new EntityConfigValidator();
          $entityValidator->validate($this->config);


          FileHelper::recurseRmdir(FileHelper::newModuleFilePath($this->config));


          $this->info('Generating module files..');

          $moduleName = $this->config['setup']['module_name'];

          \Artisan::call('module:make', ['name' => [$moduleName]]);

          while (true) {
              $module = \Module::find($moduleName);
              if ($module != null) {
                  $configFile = new ConfigFile();

                  if ($configFile->generate($this->config)) {
                      $this->info('Config file generated.');
                  }

                  $routeFile = new RouteFile();
                  if ($routeFile->generate($this->config)) {
                      $this->info('Route file generated.');
                  }

                  $requestFile = new RequestFile();
                  if ($requestFile->generate($this->config)) {
                      $this->info('Request file generated.');
                  }

                  $langFile = new LangFile();
                  if ($langFile->generate($this->config)) {
                      $this->info('Lang file generated.');
                  }

                  $controllerFiles = new ControllerFile();
                  if ($controllerFiles->generate($this->config)) {
                      $this->info('Controllers files generated.');
                  }

                  $entityFile = new EntityFile();
                  if ($entityFile->generate($this->config)) {
                      $this->info('Entities files genareted.');
                  }

                  $formFile = new FormFile();
                  if ($formFile->generate($this->config)) {
                      $this->info('Form file generated');
                  }

                  $migrationFiles = new MigrationFile();
                  if ($migrationFiles->generate($this->config)) {
                      $this->info('Migration files generated');
                  }

                  $datatableFiles = new DatatableFile();
                  if ($datatableFiles->generate($this->config)) {
                      $this->info('Datatables files genareted');
                  }

                  $this->info('Done!');

                  $this->info('fixing code style');

                  return true;
              }
          }
      } catch (\Exception $e) {
          $this->error($e->getMessage());
          $this->error($e);
      }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
