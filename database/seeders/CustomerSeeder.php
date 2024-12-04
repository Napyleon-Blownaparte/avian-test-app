<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Main St, Anytown USA',
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '555-555-5555',
                'address' => '456 Elm St, Anytown USA',
            ],
            [
                'id' => 3,
                'name' => 'Bob Smith',
                'email' => 'bobsmith@example.com',
                'phone' => '987-654-3210',
                'address' => '789 Oak Ave, Anytown USA',
            ],
            [
                'id' => 4,
                'name' => 'Paul Reyes',
                'email' => 'paulreyes@example.com',
                'phone' => '678-123-4567',
                'address' => '731 North St, Anytown USA',
            ],
            [
                'id' => 5,
                'name' => 'Billy Alexander',
                'email' => 'billyalexander@example.com',
                'phone' => '777-888-9999',
                'address' => '332 West St, Anytown USA',
            ],
            [
                'id' => 6,
                'name' => 'Marrie Anne',
                'email' => 'marrieanne@example.com',
                'phone' => '895-348-3472',
                'address' => '332 West St, Anytown USA',
            ],
        ]);
    }
}
