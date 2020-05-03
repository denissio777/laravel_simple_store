<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'The First',
                'email' => 'first@example.tt',
                'password' => '1111',
            ],
            [
                'name' => 'The Second',
                'email' => 'second@example.tt',
                'password' => '2222',
            ],
            [
                'name' => 'The Third',
                'email' => 'third@mail.ru',
                'password' => '3333',
            ],
            [
                'name' => 'The Fourth',
                'email' => 'fourth@rambler.ru',
                'password' => '4444',
            ],
            [
                'name' => 'The Fifth',
                'email' => 'fifth@example.tt',
                'password' => '5555',
            ],
            [
                'name' => 'The Sixth',
                'email' => 'sixth@example.tt',
                'password' => '6666',
            ],
            [
                'name' => 'The Seventh',
                'email' => 'seventh@example.tt',
                'password' => '7777',
            ],
        ];
        DB::table('users')->insert($data);
    }
}
