<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'birthday',
        'occupations',
        'img',
        'nickname',
        'portrayed',
    ];

    /**
     * связь с цитатами
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    /**
     * Связь с Эпизодами Многие-ко-многим
     */
    public function episodes()
    {
        return $this->belongsToMany(Episode::class);
    }
}
