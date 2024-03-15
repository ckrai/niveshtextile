<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

     protected $fillable = [

        'user_id', 'applicant_id', 'user_remark', 'applicant_field', 'remark_status'
    ];
}
