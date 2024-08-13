<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilUP2B extends Model
{
    use HasFactory;
    protected $table = 'profil_up2b';
    protected $guarded =[];

    protected $fillable = [
        'description',
        'image',
    ];
}
