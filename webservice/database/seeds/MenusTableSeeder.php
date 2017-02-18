<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'label' => 'Dashboard',
            'icon' => 'fa fa-th-large',
            'is_nav_label' => true,
        ]);

        $product = Menu::create([
            'label' => 'Products',
            'icon' => 'fa fa-diamond',
            'is_nav_label' => true,
            'order'=>2,
        ]);

        Menu::create([
            'label' => 'Products',
            'is_nav_label' => false,
            'href'=>'products',
            'parent_id' => $product->id,
            'order'=>3,
        ]);

        Menu::create([
            'label' => 'Stock Control',
            'is_nav_label' => false,
            'href'=>'products',
            'parent_id' => $product->id,
            'order'=>4,
        ]);
    }
}
