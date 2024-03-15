<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

     protected $fillable = [

        'applicant_id', 'director_name', 'director_mobile', 'director_email', 'director_din', 'director_din_doc', 'director_pan', 'director_pan_doc', 'director_status'

    ];
}
