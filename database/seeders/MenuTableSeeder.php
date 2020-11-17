<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu=new Menu();
        $menu->item='area';
        $menu->url='#';
        $menu->save();

        $menu=new Menu();
        $menu->item='investigador';
        $menu->url='#';
        $menu->save();

        $menu=new Menu();
        $menu->item='formacion-academica';
        $menu->url='#';
        $menu->save();

        $menu=new Menu();
        $menu->item='Solicitudes';
        $menu->url='#';
        $menu->save();

        $menu=new Menu();
        $menu->item='Organizaciones';
        $menu->url='#';
        $menu->save();



    }
}
