<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memories extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','group_id'];

}
