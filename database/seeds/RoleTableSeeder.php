<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_activist = new Role();
        $role_activist->name= 'Aktīvists';
        $role_activist->description= 'Nav biedrs, bet iesaistās SP darbībā';
        $role_activist->save();

        $role_user = new Role();
        $role_user->name= 'Biedrs';
        $role_user->description= 'Vienkārši pašpārvaldes biedrs';
        $role_user->save();

        $role_board = new Role();
        $role_board->name= 'Valde';
        $role_board->description= 'Valdes biedri - priekšsēdētājs, viņa vietnieks un komisiju vadītāji';
        $role_board->save();

        $role_admin = new Role();
        $role_admin->name= 'Admins';
        $role_admin->description= 'Administrators, kuram ir pieeja visam';
        $role_admin->save();
    }
}
