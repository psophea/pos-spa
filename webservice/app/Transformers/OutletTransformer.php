<?php

namespace App\Transformers;

use App\Outlet;
use League\Fractal\TransformerAbstract;

class OutletTransformer extends TransformerAbstract
{
    /**
     * Transform an Outlet.
     *
     * @param  Outlet $outlet
     *
     * @return array
     */
    public function transform(Outlet $outlet)
    {
        return [
            'id' => $outlet->id,
            'name' => $outlet->name,
            'status' => $outlet->status,
            'created_at' => $outlet->created_at->toIso8601String(),
            'updated_at' => $outlet->updated_at->toIso8601String(),
        ];
    }
}
