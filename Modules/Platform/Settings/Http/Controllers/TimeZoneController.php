<?php

namespace Modules\Platform\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
//use Krucas\Settings\Facades\Settings;
use anlutro\LaravelSettings\Facade as Settings;
use Modules\Platform\Core\Http\Controllers\AppBaseController;
use Modules\Platform\Core\Http\Controllers\SettingsCrudController;
use Modules\Platform\Settings\Datatables\TimeZoneDatatable;
use Modules\Platform\Settings\Http\Forms\TimeZoneForm;
use Modules\Platform\Settings\Http\Requests\TimeZoneSettingsRequest;
use Modules\Platform\Settings\Repositories\TimeZoneRepository;

class TimeZoneController extends SettingsCrudController
{
    protected $datatable = TimeZoneDatatable::class;

    protected $formClass = TimeZoneForm::class;

    protected $storeRequest = TimeZoneSettingsRequest::class;

    protected $updateRequest = TimeZoneSettingsRequest::class;

    protected $repository = TimeZoneRepository::class;

    protected $languageFile = 'settings::timezone';


    public function __construct()
    {
        parent::__construct();
    }

    protected $showFields = [
        'details' => [
            'name' => ['type' => 'text'],
            'php_timezone' => ['type' => 'text'],
            'is_active' => ['type' => 'boolean'],
        ]
    ];

    protected $routes = [
        'index' => 'settings.timezone.index',
        'create' => 'settings.timezone.create',
        'show' => 'settings.timezone.show',
        'edit' => 'settings.timezone.edit',
        'store' => 'settings.timezone.store',
        'destroy' => 'settings.timezone.destroy',
        'update' => 'settings.timezone.update'
    ];
}
