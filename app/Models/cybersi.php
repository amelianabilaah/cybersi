<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cybersi extends Model
{
    use HasFactory;
    public $table = 'datapl';
    protected $fillable = ['kode', 'deskripsiPL', 'deskripsiProdi', 'deskripsiAptikom'];
}
