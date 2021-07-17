<?php

namespace Modules\Companies\Http\Controllers\Settings;

use Modules\Companies\Datatables\Settings\CompanyIndustryDatatable;
use Modules\Companies\Entities\CompanyIndustry;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;
use Modules\Platform\Core\Http\Forms\NameDictionaryForm;
use Modules\Platform\Core\Http\Requests\NameDictionaryRequest;

class CompanyIndustryController extends ModuleCrudController
{

    protected $datatable = CompanyIndustryDatatable::class;
    protected $formClass = NameDictionaryForm::class;
    protected $storeRequest = NameDictionaryRequest::class;
    protected $updateRequest = NameDictionaryRequest::class;
    protected $entityClass = CompanyIndustry::class;

    protected $moduleName = 'companies';

    protected $settingsBackRoute = 'companies.companies.index';

    protected $showFields = [
        'details' => [
            'name' => ['type' => 'text'],
        ]
    ];

    protected $languageFile = 'companies::companies.companyindustry';

    protected $routes = [
        'index' => 'companies.companyindustry.index',
        'create' => 'companies.companyindustry.create',
        'show' => 'companies.companyindustry.show',
        'edit' => 'companies.companyindustry.edit',
        'store' => 'companies.companyindustry.store',
        'destroy' => 'companies.companyindustry.destroy',
        'update' => 'companies.companyindustry.update'
    ];

    public function __construct()
    {
        parent::__construct();
    }

}
