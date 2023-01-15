<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id', 'poster','body','address'
    ];

/**
 * @return belongsTo
 */
    public function articles():belongsTo
    {
        return $this->belongsTo(Article::class,'article_id');
    }

}
