<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = User::all();

        // foreach($users as $user) {
        //     Employee::create([
        //         'user_id' => $user->id,
        //         'clocked_in' => false
        //     ]);
        // }
        Employee::factory(30)->create();
    }
}
