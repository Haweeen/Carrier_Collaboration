<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    // Clear existing users
    User::truncate();

    // Create sample users
    User::create([
      'name' => 'Harwin',
      'email' => 'chillypractice@gmail.com',
      'password' => Hash::make('chilly'),
    ]);

    // Create more users if needed
    // User::create([...]);
    // User::create([...]);
  }
}
