<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','Biedrs')->first();
        $role_board = Role::where('name','Valde')->first();
        $role_admin = Role::where('name','Admins')->first();

        $user = new User();
        $user->name= 'Biedrs';
        $user->code='ab16666';
        $user->email='biedrs@uzskaite.dev';
        $user->password=bcrypt('agonija');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name= 'Admins';
        $admin->code= 'as16151';
        $admin->email= 'admins@uzskaite.dev';
        $admin->password=bcrypt('agonija');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $board = new User();
        $board->name = 'Valde';
        $board->code = 'bb12345';
        $board->email = 'valde@uzskaite.dev';
        $board->password = bcrypt('agonija');
        $board->save();
        $board->roles()->attach($role_board);
    }
}
