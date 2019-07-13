<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable=['adminname','adminemail','adminmobile','adminpassword'];
    protected $table='admin';
}