<?php

namespace Modules\Platform\User\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Modules\Platform\User\Repositories\RoleRepository;

class ScanPermissionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calsob:scan_permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scan Permissions from module config files.';

    /**
     * @var RoleRepository
     */
    private $roleRepo;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(RoleRepository $roleRepository)
    {
        parent::__construct();
        $this->roleRepo = $roleRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Scanning for modules permissions...');

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        $result = $this->roleRepo->synchModulePermissions(true);

        $this->info('Permissions Created: '.count($result['created']));
        $this->info('Permissions Deleted: '.count($result['deleted']));
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
