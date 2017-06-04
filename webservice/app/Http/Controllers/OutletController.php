<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;
use App\Http\Requests\OutletRequest;

class OutletController extends ApiController
{
    //
    public function fullList()
    {
        //$arr = array(array('aa'=>'helo'));
        //return $this->response->collection($arr);
        return $this->response->collection(Outlet::all());
        //return "hello world";
    } 
}
