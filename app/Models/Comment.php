<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $fillable = [
        'content_scheduling_id',
        'parent_id',
        'comment',
        'name',
        'email',
        'username',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }

    public function scheduling(): BelongsTo
    {
        return $this->belongsTo(ContentScheduling::class);
    }
}
