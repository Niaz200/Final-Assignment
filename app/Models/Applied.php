<?php

namespace App\Models;

use App\Models\Postjobs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applied extends Model
{
    use HasFactory;

    protected $fillable = [

        'job_title',
        'job_type',
        'location',
        'compa_name',
        'status',
        'emplo_id',
        'jobspost_id',
        'user_id',

    ];

    // public function postjobs(): BelongsTo
    // {
    //     return $this->BelongsTo(Postjobs::class);
    // }

    public function postjobs(): BelongsTo
    {
        return $this->BelongsTo(Postjobs::class, 'jobspost_id');

    }

    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id');

    }


  

    // public function profiles(): BelongsTo
    // {
    //     return $this->BelongsTo(Profile::class, 'user_id');

    // }

    // public function users()
    // {
    //     return $this->hasOne(User::class, 'user_id');
    // }
}
