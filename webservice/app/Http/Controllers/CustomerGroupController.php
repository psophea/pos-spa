<?php

namespace App\Http\Controllers;

use Response;
use App\CustomerGroup;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerGroupRequest;

class CustomerGroupController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $sort = $this->parameters->sort();
        $order = $this->parameters->order();
        $limit = $this->parameters->limit();
        $CustomerGroup = CustomerGroup::orderBy($sort, $order)->paginate($limit);
        return $this->response->collection($CustomerGroup);
    }

    public function fullList(){        
        return $this->response->collection(CustomerGroup::all());
    }
    
    public function store(CustomerGroupRequest $request){            
        $CustomerGroup = CustomerGroup::create($request->all());
        return $this->response->withCreated($CustomerGroup);        
    }
    
    public function show($id){
        $CustomerGroup = CustomerGroup::find($id);
        if(!$CustomerGroup){
            return $this->response->withNotFound('Customer group not found.');
        }else{
            return $this->response->item($CustomerGroup);
        }
    }
    
    public function update(CustomerGroupRequest $request, $id){
        $CustomerGroup = CustomerGroup::find($id);
        if(!$CustomerGroup){
            return $this->response->withNotFound('Customer group not found');
        }else{
            $CustomerGroup->fill($request->all())->save();
            return $this->response->item($CustomerGroup);
        }  
    }
         
    public function destroy($id){
        $CustomerGroup = CustomerGroup::find($id);
        if(!$CustomerGroup){
            return $this->response->withNotFound('Customer group not found');
        }else{
            $CustomerGroup->delete();
            return $this->response->withNoContent();
        }        
    }
    
}
