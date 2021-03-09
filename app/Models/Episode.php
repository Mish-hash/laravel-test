<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'air_date',
    ];

    /**
     * Связь Эпизода с цитатами Один-ко-многим
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    /**
     * Связь эпизода с персонажем Многие-ко-многим
     */
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
