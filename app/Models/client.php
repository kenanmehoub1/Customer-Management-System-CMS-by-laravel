<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_input','client_name','country_code','phone_number','password','email','gender','work_type','country', 'state','start_date','end_date','added_by'   ];

protected $hidden = [
        'password',
        'remember_token',
    ];

 protected $casts = [
        
        'password' => 'hashed',
    ];











    }


