<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogUpdate extends Model
{
    use HasFactory;

     protected $fillable = [

 'user_id', 'updated_by', 'table_name', 'column_name', 'column_value'    ];
}
