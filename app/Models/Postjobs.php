<?php

namespace App\Models;

use App\Models\Applied;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postjobs extends Model
{
    use HasFactory;

    protected $fillable = [

        'job_title',
        'company_name',
        'status',
        'job_des',
        'job_type',
        'job_level',
        'experience', 
        'qualification',
        'gender',
        'min_salary',
        'max_salary',
        'job_exp_date',
        'job_fee_type',
        'requiremment',
        'responsibilities',
        'skills',
        'website',
        'address',
        'city',
        'country',
        'state',
        'postcode',
        'location',
        'user_id',
        'cats_id',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo('App\Models\Category','cats_id');
    } 

    // public function apply()
    // {
    //     return $this->hasMany(Applied::class);
       
    // }

    //  public function items()
    // {
    //     return $this->hasMany(Applied::class);
    // }

    public function applieds()
    {
        return $this->hasOne(Applied::class);
    }

    protected $casts = [
        'requiremment' => 'array',
        'responsibilities' => 'array',
        'skills' => 'array',
        
    ];
}
