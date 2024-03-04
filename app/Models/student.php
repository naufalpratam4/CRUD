<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'Students';
    protected $guarded = ['id'];
    protected $fillable = ['Name', 'Address', 'noHp'];
}
