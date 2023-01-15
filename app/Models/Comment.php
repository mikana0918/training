<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id', 'commented_user_name','body','email_address','updated_at', 'created_at'
    ];

/**
 * @return belongsTo
 */
    public function articles():belongsTo
    {
        return $this->belongsTo(Article::class,'article_id');
    }

}
