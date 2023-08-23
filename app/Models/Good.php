<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $table='goods';
    protected $fillable=['name','category','price','created_at','updated_at'];
}
          