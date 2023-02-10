<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasUuids;
    use HasFactory;

    public function categories() {
        return $this->belongsToMany(
            Category::class,
            'news_categories',
            'news_id',
            'category_id'
        );
    }
}
