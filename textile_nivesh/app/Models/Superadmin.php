<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    use HasFactory;

     protected $fillable = [

       	'e_name', 'c_name',  'email', 'dob', 'phone', 'address', 'address2', 'city', 'post_office',
        'district', 'sub_district', 'pin_code', 'zone', 'region', 'block', 'outlet_loc','state', 
        'aadhaar', 'pan', 
    ];
}
