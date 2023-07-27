<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desserts extends Model
{
    use HasFactory;
	protected $fillable = ['potr', 'name','score'];	
}
