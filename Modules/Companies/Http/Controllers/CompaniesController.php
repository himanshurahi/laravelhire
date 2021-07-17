<?php

namespace Modules\Companies\Http\Controllers;

use Modules\Companies\Datatables\CompanyDatatable;
use Modules\Companies\Entities\Company;
use Modules\Companies\Http\Forms\CompanyForm;
use Modules\Companies\Http\Requests\CompaniesRequest;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;

class CompaniesController extends ModuleCrudController
{

    protected $datatable = CompanyDatatable::class;
    protected $formClass = CompanyForm::class;
    protected $storeRequest = CompaniesRequest::class;
    protected $updateRequest = CompaniesRequest::class;
    protected $entityClass = Company::class;

    protected $moduleName = 'companies';

    protected $permissions = [
        'browse' => 'companies.browse',
        'create' => 'companies.create',
        'update' => 'companies.update',
        'destroy' => 'companies.destroy'
    ];

    protected $moduleSettingsLinks = [

        ['route' => 'companies.companytype.index', 'label' => 'settings.companytype'],
                ['route' => 'companies.companyindustry.index', 'label' => 'settings.companyindustry'],
                ['route' => 'companies.companyrating.index', 'label' => 'settings.companyrating'],
    

    ];

    protected $settingsPermission = 'companies.settings';

    protected $showFields = [

        'information' => [
                
                                        'name' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'owned_by' => [
                        'type' => 'assigned_to',
                                            ],
                    
                
                                        'employees' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'company_type_id' => [
                        'type' => 'manyToOne',
                                                 'relation' => 'companyType',
                         'column' => 'name'
                                             ],
                    
                
                                        'company_industry_id' => [
                        'type' => 'manyToOne',
                                                 'relation' => 'companyIndustry',
                         'column' => 'name'
                                             ],
                    
                
                                        'company_rating_id' => [
                        'type' => 'manyToOne',
                                                 'relation' => 'companyRating',
                         'column' => 'name'
                                             ],
                    
                            ],

        
            'address_information' => [
                
                                        'street' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'city' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'state' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'country' => [
                        'type' => 'text',
                                            ],
                    
                
                                        'zip_code' => [
                        'type' => 'text',
                                            ],
                    
                            ],

        
            'notes' => [
                
                                        'notes' => [
                        'type' => 'text',
                                            ],
                    
                            ],

                        

    ];

    protected $languageFile = 'companies::companies';

    protected $routes = [
        'index' => 'companies.companies.index',
        'create' => 'companies.companies.create',
        'show' => 'companies.companies.show',
        'edit' => 'companies.companies.edit',
        'store' => 'companies.companies.store',
        'destroy' => 'companies.companies.destroy',
        'update' => 'companies.companies.update'
    ];

    public function __construct()
    {
        parent::__construct();

    }

}
