<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //membuat nama model yg berbeda dengan nama table
    // protected $table = 'work'

    //bagian yg harus diisi
    // protected $fillable = ['tasks', 'user'];

    //bagian yg kita cegah untk diisi (kebalikan dri fillable)
     protected $guarded = ['id'];
}
