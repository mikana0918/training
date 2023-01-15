<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content',
    ];

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
//        Articleというクラスに対し、Categoryクラスが関係している。その関係をpivot tableであるarticle_categoryを介す。
//        参照元はArticleクラスということでarticle_idで、参照先はcategory_idとなる。
        return $this->belongsToMany(Category::class, 'article_category', 'article_id', 'category_id', )->withTimestamps();
    }
    /**
     * @return hasMany
     */
    public function comments():hasMany
    {
        return $this->hasMany(Comment::class);
    }
}

