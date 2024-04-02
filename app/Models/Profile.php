<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [

        'full_name',
        'mobile',
        'age',
        'gender',
        'job_title',
        'work_type',
        'birthday',
        'website',
        'Total_experience',
        'cats_id',
        'address',
        'city',
        'state',
        'country',
        'postcode',
        'language',
        'education',
        'info',
        'skills',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class,'user_id');
    }


    public function category(){
        return $this->belongsTo('App\Models\Category','cats_id');
    } 


    // public function appllied()
    // {
    //     return $this->hasOne(Applied::class);
    // }

    protected $casts = [
        'language' => 'array',
        'skills' => 'array',
        'work_type' => 'array',
        
    ];
}
