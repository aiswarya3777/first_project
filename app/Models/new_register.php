<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_register extends Model
{
    use HasFactory;
    protected $guarded =  ['id'];
   public $timestamps = false;
    // public $fillable = ['fnam','lname','email','password'];
}
