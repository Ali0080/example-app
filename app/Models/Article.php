<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'lead', 'story', 'category', 'img'];

    /**
     * Get the articles for the news articles.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}