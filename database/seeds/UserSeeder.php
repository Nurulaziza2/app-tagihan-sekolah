<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
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
            'name'=>'Ketua',
            'email'=>'admin@mail.com',
            'password'=>bcrypt('1'),
            'akses'=>'admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name'=>'Operator',
            'email'=>'operator@mail.com',
            'password'=>bcrypt('1'),
            'akses'=>'operator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ];
    User::insert($data);
    }
}
