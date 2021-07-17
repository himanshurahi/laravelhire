<?php

namespace Modules\Companies\Http\Controllers\Settings;

use Modules\Companies\Datatables\Settings\CompanyRatingDatatable;
use Modules\Companies\Entities\CompanyRating;
use Modules\Platform\Core\Http\Controllers\ModuleCrudController;
use Modules\Platform\Core\Http\Forms\NameDictionaryForm;
use Modules\Platform\Core\Http\Requests\NameDictionaryRequest;

class CompanyRatingController extends ModuleCrudController
{

    protected $datatable = CompanyRatingDatatable::class;
    protected $formClass = NameDictionaryForm::class;
    protected $storeRequest = NameDictionaryRequest::class;
    protected $updateRequest = NameDictionaryRequest::class;
    protected $entityClass = CompanyRating::class;

    protected $moduleName = 'companies';

    protected $settingsBackRoute = 'companies.companies.index';

    protected $showFields = [
        'details' => [
            'name' => ['type' => 'text'],
        ]
    ];

    protected $languageFile = 'companies::companies.companyrating';

    protected $routes = [
        'index' => 'companies.companyrating.index',
        'create' => 'companies.companyrating.create',
        'show' => 'companies.companyrating.show',
        'edit' => 'companies.companyrating.edit',
        'store' => 'companies.companyrating.store',
        'destroy' => 'companies.companyrating.destroy',
        'update' => 'companies.companyrating.update'
    ];

    public function __construct()
    {
        parent::__construct();
    }

}
