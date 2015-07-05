<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');

        DB::table('users')->insert([
            'name' => 'oliamerica',
            'email' => 'admin@oliamerica.com',
            'password' => bcrypt('123456'),
        ]);

        Model::reguard();
    }
}
