<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model
{
    use HasFactory;
    protected $table = 'career_form';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','position','resume','mobile_number','message'];
}
