<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;
    protected $table = 'd3ti_post_categories';
    protected $primaryKey = 'post_categories_id';

    protected $fillable = [
        'post_categories_name', 'post_categories_description'
    ];
}
