<?php

namespace Modules\Developers\Http\Controllers;

use Modules\Developers\Datatables\DeveloperDatatable;
use Modules\Developers\Entities\Developer;
use Modules\Developers\Http\Forms\DeveloperForm;
use Modules\Developers\Http\Requests\DevelopersRequest;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;

class DevelopersController extends ModuleCrudController
{

    protected $datatable = DeveloperDatatable::class;
    protected $formClass = DeveloperForm::class;
    protected $storeRequest = DevelopersRequest::class;
    protected $updateRequest = DevelopersRequest::class;
    protected $entityClass = Developer::class;

    protected $moduleName = 'developers';

    protected $permissions = [
        'browse' => 'developers.browse',
        'create' => 'developers.create',
        'update' => 'developers.update',
        'destroy' => 'developers.destroy'
    ];

    protected $moduleSettingsLinks = [

        

    ];

    protected $settingsPermission = 'developers.settings';

    protected $showFields = [

        'information' => [
                
                                        'first_name' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'last_name' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'phone_number' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'email' => [
                        'type' => 'email',
                                            ],
                    
                
                                        'rate' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'about' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'profile_picture' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'portfolio_links' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'portfolio_images' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'skills' => [
                        'type' => 'text',
                                            ],
                    
                            ],

            

    ];

    protected $languageFile = 'developers::developers';

    protected $routes = [
        'index' => 'developers.developers.index',
        'create' => 'developers.developers.create',
        'show' => 'developers.developers.show',
        'edit' => 'developers.developers.edit',
        'store' => 'developers.developers.store',
        'destroy' => 'developers.developers.destroy',
        'update' => 'developers.developers.update'
    ];

    public function __construct()
    {
        parent::__construct();

    }

}
