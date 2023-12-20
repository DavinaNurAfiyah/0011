<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nct extends Model
{
    use HasFactory;
    protected $table = "nct";
    protected $fillable = ['Nama', 'Posisi', 'TTL', 'Unit'] ;
    
}
