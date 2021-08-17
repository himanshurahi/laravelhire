<?php

namespace Modules\Developers\Entities;

use Bnb\Laravel\Attachments\HasAttachment;
use Cog\Contracts\Ownership\Ownable;
use Cog\Laravel\Ownership\Traits\HasMorphOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Modules\Platform\Core\Traits\Commentable;
use Spatie\Activitylog\Traits\LogsActivity;
use Carbon\Carbon;

class Developer extends Model  implements Ownable 
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
    public $table = 'developers';

    public $fillable = [
                        'first_name',
                                'last_name',
                                'phone_number',
                                'email',
                                'rate',
                                'about',
                                'profile_picture',
                                'portfolio_links',
                                'portfolio_images',
                                'skills',
            ];


    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    

    

}
