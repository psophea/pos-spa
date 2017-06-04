<?php

namespace App\Transformers;

use App\CustomerGroup;
use League\Fractal\TransformerAbstract;

class CustomerGroupTransformer extends TransformerAbstract
{
    /**
     * Transform a CustomerGroup.
     *
     * @param  CsutomerGorup $CustomerGroup.
     *
     * @return array
     */
    public function transform(CustomerGroup $CustomerGroup)
    {
        return [
            'id' => $CustomerGroup->id,
            'group_name' => $CustomerGroup->group_name,
            'status' => $CustomerGroup->status,
            'created_at' => $CustomerGroup->created_at->toIso8601String(),
            'updated_at' => $CustomerGroup->updated_at->toIso8601String(),
        ];
    }
}
