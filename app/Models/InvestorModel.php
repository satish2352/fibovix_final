<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorModel extends Model
{
    use HasFactory;
    protected $table = 'investor';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','contact','comment'];
}
