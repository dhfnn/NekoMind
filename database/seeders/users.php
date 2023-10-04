<?php

namespace Database\Seeders;

use App\Models\users as ModelsUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersdata = [
            [
                'email' => 'naufaldhafin80@gmail.com',
                'password' => bcrypt('nekoroleadmin80'),
                'role' => 'admin',
                'username' => 'naufal'
            ],
            [
                'email' => 'naufaldhafin8825@gmail.com',
                'password' => bcrypt('nekorolepengguna8825'),
                'role' => 'pengguna',
                'username' => 'dhafin'
            ]
        ];
        foreach($usersdata as $key => $val){
            ModelsUsers::create($val);
        }
    }
}
