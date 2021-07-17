<?php

namespace Modules\AdminJobs\Entities;

use Bnb\Laravel\Attachments\HasAttachment;
use Cog\Contracts\Ownership\Ownable;
use Cog\Laravel\Ownership\Traits\HasMorphOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Modules\Platform\Core\Traits\Commentable;
use Spatie\Activitylog\Traits\LogsActivity;
use Carbon\Carbon;

class AdminJob extends Model  implements Ownable 
{

    use SoftDeletes  , HasMorphOwner     ;

    


    

    


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public $table = 'jobs';

    public $fillable = [
                        'job_title',
                                'job_description',
                                'skills',
                                'job_duration',
                                'budget',
                                'attachment',
            ];


    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    

    

}
