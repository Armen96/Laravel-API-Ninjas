<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Armen',
                'email' => 'armen@gmail.com',
                'email_verified_at' => now(),
                'image' => 'http://www.smpinstindojogja.sch.id/wp-content/uploads/2017/11/index.png',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test',
                'email' => 'test@test.com',
                'email_verified_at' => now(),
                'image' => 'http://www.smpinstindojogja.sch.id/wp-content/uploads/2017/11/index.png',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
