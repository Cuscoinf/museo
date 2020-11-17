<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class MenuUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::find(1);
        $user->menus()->sync(
                            [
                                11=>['crear'=>true,'editar'=>true,'eliminar'=>true,'ver'=>true],
                                12=>['crear'=>true,'editar'=>true,'eliminar'=>true,'ver'=>true],
                                13=>['crear'=>true,'editar'=>true,'eliminar'=>true,'ver'=>true]

                            ]
                            );
    }
}
