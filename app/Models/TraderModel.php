<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraderModel extends Model
{
    use HasFactory;
    protected $table = 'trader';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','contact','resume','comment'];
}
