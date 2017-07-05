<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = ['name', 'status'];

    protected $casts = [
        'status' => 'integer'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
}
