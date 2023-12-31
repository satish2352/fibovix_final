<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceMasters extends Model
{
    use HasFactory;
    protected $table = 'services_masters';
    protected $primaryKey = 'id';

    public static function getall()
    {
        // Your logic to fetch all solutions goes here
        return self::all(); // Example: using Eloquent's all() method to get all records
    }
}
