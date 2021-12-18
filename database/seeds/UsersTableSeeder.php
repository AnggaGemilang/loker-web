<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama'  => "Administrator",
            'email' => 'admin@admin.id',
            'password'  => Hash::make('admin'),
            'role_id' => 1,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
