<?php

namespace Modules\Companies\Http\Controllers\Settings;

use Modules\Companies\Datatables\Settings\CompanyTypeDatatable;
use Modules\Companies\Entities\CompanyType;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;
use Modules\Platform\Core\Http\Forms\NameDictionaryForm;
use Modules\Platform\Core\Http\Requests\NameDictionaryRequest;

class CompanyTypeController extends ModuleCrudController
{

    protected $datatable = CompanyTypeDatatable::class;
    protected $formClass = NameDictionaryForm::class;
    protected $storeRequest = NameDictionaryRequest::class;
    protected $updateRequest = NameDictionaryRequest::class;
    protected $entityClass = CompanyType::class;

    protected $moduleName = 'companies';

    protected $settingsBackRoute = 'companies.companies.index';

    protected $showFields = [
        'details' => [
            'name' => ['type' => 'text'],
        ]
    ];

    protected $languageFile = 'companies::companies.companytype';

    protected $routes = [
        'index' => 'companies.companytype.index',
        'create' => 'companies.companytype.create',
        'show' => 'companies.companytype.show',
        'edit' => 'companies.companytype.edit',
        'store' => 'companies.companytype.store',
        'destroy' => 'companies.companytype.destroy',
        'update' => 'companies.companytype.update'
    ];

    public function __construct()
    {
        parent::__construct();
    }

}
