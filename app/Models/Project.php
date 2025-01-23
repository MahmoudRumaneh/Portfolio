<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'frontend',
        'backend',
        'database',
        'api',
        'features',
        'problem',
        'start_date',
        'end_date',
        'links',
        'type',
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'links' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'type' => 'string',
    ];
}
