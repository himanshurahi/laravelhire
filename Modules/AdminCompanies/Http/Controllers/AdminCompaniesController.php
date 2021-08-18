<?php

namespace Modules\AdminCompanies\Http\Controllers;

use Modules\AdminCompanies\Datatables\AdminCompanyDatatable;
use Modules\AdminCompanies\Entities\AdminCompany;
use Modules\AdminCompanies\Http\Forms\AdminCompanyForm;
use Modules\AdminCompanies\Http\Requests\AdminCompaniesRequest;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;

class AdminCompaniesController extends ModuleCrudController
{

    protected $datatable = AdminCompanyDatatable::class;
    protected $formClass = AdminCompanyForm::class;
    protected $storeRequest = AdminCompaniesRequest::class;
    protected $updateRequest = AdminCompaniesRequest::class;
    protected $entityClass = AdminCompany::class;

    protected $moduleName = 'admincompanies';

    protected $permissions = [
        'browse' => 'admincompanies.browse',
        'create' => 'admincompanies.create',
        'update' => 'admincompanies.update',
        'destroy' => 'admincompanies.destroy'
    ];

    protected $moduleSettingsLinks = [

        

    ];

    protected $settingsPermission = 'admincompanies.settings';

    protected $showFields = [

        'information' => [
                
                                        'company_name' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'company_email' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'company_details' => [
                        'type' => 'text',
                                            ],
                    
                            ],

            

    ];

    protected $languageFile = 'admincompanies::admincompanies';

    protected $routes = [
        'index' => 'admincompanies.admincompanies.index',
        'create' => 'admincompanies.admincompanies.create',
        'show' => 'admincompanies.admincompanies.show',
        'edit' => 'admincompanies.admincompanies.edit',
        'store' => 'admincompanies.admincompanies.store',
        'destroy' => 'admincompanies.admincompanies.destroy',
        'update' => 'admincompanies.admincompanies.update'
    ];

    public function __construct()
    {
        parent::__construct();

    }

}
