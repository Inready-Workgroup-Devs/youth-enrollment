<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InrData extends Model
{
    use HasFactory;
    protected $table = 'inr_data';
    protected $fillable = [
        'auth_id',
        'nama',
        'photo_profile',
        'class'
    ];
}