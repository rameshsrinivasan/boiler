<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        // $admin_role = DB::table('roles')->select('id')->where('name', 'admin')->first()->id;
        // $mod_role  = DB::table('roles')->select('id')->where('name', 'moderator')->first()->id;
        // $user_role = DB::table('roles')->select('id')->where('name', 'user')->first()->id;
        $users = [
            [
                'first_name' => 'Admin',
                'last_name' => '',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ],
            [
                'first_name' => 'Moderator',
                'last_name' => '',
                'email' => 'moderator@admin.com',
                'password' => Hash::make('password')
            ],
            [
                'first_name' => 'User',
                'last_name' => '',
                'email' => 'user@user.com',
                'password' => Hash::make('password')
            ]
        ];
        foreach ($users as $key => $value) {
            $this->command->info(" ");
            $this->command->info('Creating the \''.$value['first_name'].'\' account with Email \''.$value['email'].'\' and PassWord \'password\'  ');
            User::create($value);
            $this->command->info('-----------------------------------------');
        }
    }
}