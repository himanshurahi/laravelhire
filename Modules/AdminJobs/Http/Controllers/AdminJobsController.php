<?php

namespace Modules\AdminJobs\Http\Controllers;

use Modules\AdminJobs\Datatables\AdminJobDatatable;
use Modules\AdminJobs\Entities\AdminJob;
use Modules\AdminJobs\Http\Forms\AdminJobForm;
use Modules\AdminJobs\Http\Requests\AdminJobsRequest;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;

class AdminJobsController extends ModuleCrudController
{

    protected $datatable = AdminJobDatatable::class;
    protected $formClass = AdminJobForm::class;
    protected $storeRequest = AdminJobsRequest::class;
    protected $updateRequest = AdminJobsRequest::class;
    protected $entityClass = AdminJob::class;

    protected $moduleName = 'adminjobs';

    protected $permissions = [
        'browse' => 'adminjobs.browse',
        'create' => 'adminjobs.create',
        'update' => 'adminjobs.update',
        'destroy' => 'adminjobs.destroy'
    ];

    protected $moduleSettingsLinks = [

        

    ];

    protected $settingsPermission = 'adminjobs.settings';

    protected $showFields = [

        'information' => [
                
                                        'job_title' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'job_description' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'skills' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'job_duration' => [
                        'type' => 'number',
                                            ],
                    
                
                                        'budget' => [
                        'type' => 'text',
                                            ],
                    
                            ],

            

    ];

    protected $languageFile = 'adminjobs::adminjobs';

    protected $routes = [
        'index' => 'adminjobs.adminjobs.index',
        'create' => 'adminjobs.adminjobs.create',
        'show' => 'adminjobs.adminjobs.show',
        'edit' => 'adminjobs.adminjobs.edit',
        'store' => 'adminjobs.adminjobs.store',
        'destroy' => 'adminjobs.adminjobs.destroy',
        'update' => 'adminjobs.adminjobs.update'
    ];

    public function __construct()
    {
        parent::__construct();

    }

}
