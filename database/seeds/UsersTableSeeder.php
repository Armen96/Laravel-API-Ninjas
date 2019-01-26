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
                'name' => 'Sannin Tsunade',
                'clan_id' => 1,
                'email' => 'tsunade@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Naruto Uzumaki',
                'clan_id' => 1,
                'email' => 'naruto@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asuma Sarutobi',
                'clan_id' => 3,
                'email' => 'asuma@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Itachi Uchiha',
                'clan_id' => 2,
                'email' => 'itachi@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sasuke Uchiha',
                'clan_id' => 2,
                'email' => 'sasuke@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kisame Hoshigaki',
                'clan_id' => 4,
                'email' => 'kisame@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kaguya Ōtsutsuki',
                'clan_id' => 5,
                'email' => 'kaguya@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
