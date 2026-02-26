<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    use HasFactory;
    protected $fillable = ['token','admin_id','expired_at'];

    public $timestamps = true;

    public function admin(){

        return $this->belongsTo(admin::class);

   }

}
