<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'image',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
