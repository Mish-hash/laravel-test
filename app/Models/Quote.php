<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'quote',
        'character_id',
        'episode_id',
    ];

    //protected $primaryKey = 'id';

    /**
     * Связь цитаты с эпизодом Многие-к-одному
     */
    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }

    /**
     * связь с персонажем
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
