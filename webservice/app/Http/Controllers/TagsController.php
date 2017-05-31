<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

class TagsController extends ApiController
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

        $tags = Tag::orderBy($sort, $order)->paginate($limit);

        return $this->response->collection($tags);
    }

    /**
     * Display a full list of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fullList()
    {
        return $this->response->collection(Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TagRequest $request)
    {
        $product = Product::find($request->productId);
        if (!$product){
            return $this->response->withNotFound('Product not found');
        }
        $tag = Tag::create($request->all());
        $tag->products()->attach($request->productId);
        return $this->response->withCreated($tag);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return $this->response->withNotFound('Tag not found');
        }

        return $this->response->item($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TagRequest $request, $id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return $this->response->withNotFound('Tag not found');
        }

        $tag->fill($request->all())->save();
        return $this->response->item($tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return $this->response->withNotFound('Tag not found');
        }

        $tag->delete();

        return $this->response->withNoContent();
    }

    public function attachProduct(Request $request)
    {
        if (!isset($request->productId)){
            return $this->response->withBadRequest('The productId field is required.');
        } else if (!isset($request->tagId)){
            return $this->response->withBadRequest('The tagId field is required.');
        }

        $product = Product::find($request->productId);
        if (!$product){
            return $this->response->withNotFound('Product not found');
        }

        // already attached to product
        if ($product->tags()->find($request->tagId)){
            return $this->response->withError('Already attached to product.');
        }

        $tag = Tag::find($request->tagId);
        if (!$tag){
            return $this->response->withNotFound('Tag not found');
        }

        $tag->products()->attach($request->productId);
        return $this->response->withError('Attached to product.');
//        return $this->response->item($tag);
    }
}
