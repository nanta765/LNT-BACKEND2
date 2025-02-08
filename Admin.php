<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin'; // Pastikan tabelnya benar
    protected $fillable = ['ID', 'first_name', 'last_name', 'email', 'password', 'bio'];
    public $timestamps = false;

}
