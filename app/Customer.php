<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public $table = 'customers';
    public $fillable = ['name','phone','email','title','content'];
}
