<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Staff extends Model
{
    public $table = 'staffs';
    protected $fillable = ['name', 'address', 'phone'];
    public $timestamp=false;


}
