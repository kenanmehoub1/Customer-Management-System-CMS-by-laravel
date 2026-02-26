<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_description',
        'price',
        'product_image',
        'admin_id',
    ];

public function admin(){

     return $this->belongsTo(admin::class);

}

}
