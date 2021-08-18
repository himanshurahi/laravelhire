<?php

namespace Modules\AdminCompanies\Entities;

use Bnb\Laravel\Attachments\HasAttachment;
use Cog\Contracts\Ownership\Ownable;
use Cog\Laravel\Ownership\Traits\HasMorphOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Modules\Platform\Core\Traits\Commentable;
use Spatie\Activitylog\Traits\LogsActivity;
use Carbon\Carbon;

class AdminCompany extends Model  implements Ownable 
{

    use SoftDeletes  , HasMorphOwner     , HasAttachment  ;

    


    

    


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public $table = 'admin_companies';

    public $fillable = [
                        'company_name',
                                'company_email',
                                'company_details',
            ];


    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    

    

}
