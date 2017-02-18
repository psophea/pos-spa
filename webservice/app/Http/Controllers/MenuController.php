<?php

namespace App\Http\Controllers;

use App\Menu;

class MenuController extends ApiController
{
    public function sidebar()
    {
        return response()
            ->json(['data' => Menu::with('children')
                ->where([
                    ['parent_id', null],
                    ['status', true]
                ])
                ->orderBy('order')
                ->get()]);
    }
}
