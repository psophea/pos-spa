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
        return $this->response->collection(Outlet::all());
    } 
    
    public function store(OutletRequest $request){            
        $outlets = Outlet::create($request->all());
        return $this->response->withCreated($outlets);        
    }
    
    public function show($id){
        $outlet = Outlet::find($id);
        if(!$outlet){
            return $this->response->withNotFound('Outlet not found.');
        }else{
            return $this->response->item($outlet);
        }
    }
    
    public function update(OutletRequest $request, $id){
        $outlet = Outlet::find($id);
        if(!$outlet){
            return $this->response->withNotFound('Outlet not found.');
        }else{
            $outlet->fill($request->all())->save();
            return $this->response->item($outlet);
        }  
    }
         
    public function destroy($id){
        $outlet = Outlet::find($id);
        if(!$outlet){
            return $this->response->withNotFound('Outlet not found.');
        }else{
            $outlet->delete();
            return $this->response->withNoContent();
        }        
    }
    
    
    
    
}
