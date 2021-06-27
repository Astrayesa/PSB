<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nilai',
        'asal_sekolah',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }
}
