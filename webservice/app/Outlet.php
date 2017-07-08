<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    // Attribute of outlet
    protected $fillable = ['name', 'status'];
}
