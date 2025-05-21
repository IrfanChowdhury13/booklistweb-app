<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Book extends Model
{
   
   protected $fillable = [
       'name',
       'author',
       'rating',
   ];

   use HasFactory;
}
