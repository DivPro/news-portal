<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasUuids;
    use HasFactory;

    public function childs() {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function news() {
        return $this->belongsToMany(
            News::class,
            'news_categories',
            'category_id',
            'news_id'
        );
    }
}
