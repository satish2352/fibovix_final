<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalSolutions extends Model
{
    use HasFactory;
    protected $table = 'additional_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['title','description', 'image'];
}
