<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes,HasFactory;
    protected $table='categories';
    protected $fillable=[
        'category_name',
        'slug',
        'description',
        'status',
        'popular',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
