<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkatan extends Model
{
    use HasFactory;

    protected $fillable =['tingkatan'];
    protected $table = 'kelas';
    public $timestamp = false;
    protected $guarded = [];
}
