<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = 'Guitar';
        $user->email = '1@qq.com';
        $user->password = bcrypt('111111');
        $user->save();
    }
}
