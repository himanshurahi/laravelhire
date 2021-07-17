<?php

namespace Modules\Companies\Entities;

use Bnb\Laravel\Attachments\HasAttachment;
use Cog\Contracts\Ownership\Ownable;
use Cog\Laravel\Ownership\Traits\HasMorphOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Core\Helper\ActivityLogHelper;
use Modules\Platform\Core\Traits\Commentable;
use Spatie\Activitylog\Traits\LogsActivity;
use Carbon\Carbon;

class Company extends Model  implements Ownable 
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
    public $table = 'companies';

    public $fillable = [
                        'name',
                                            'employees',
                                'company_type_id',
                                'company_industry_id',
                                'company_rating_id',
                                    'street',
                                'city',
                                'state',
                                'country',
                                'zip_code',
                                    'notes',
            ];


    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    

    /**
            * @return  \Illuminate\Database\Eloquent\Relations\BelongsTo
            */
            public function companyType()
            {
            return $this->belongsTo(CompanyType::class);
            }

                    
            /**
            * @return  \Illuminate\Database\Eloquent\Relations\BelongsTo
            */
            public function companyIndustry()
            {
            return $this->belongsTo(CompanyIndustry::class);
            }

                    
            /**
            * @return  \Illuminate\Database\Eloquent\Relations\BelongsTo
            */
            public function companyRating()
            {
            return $this->belongsTo(CompanyRating::class);
            }

                                                                                            





}
