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
        //
        $role_user = Role::where('name', 'Users')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Angel Goitia';
        $user->email = 'angelgoitia12@hotmail.com';
        $user->password = bcrypt('angel7141333');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Angel Goitia';
        $user->email = 'angelgoitia1995@gmail.com';
        $user->password = bcrypt('angel7141333');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
