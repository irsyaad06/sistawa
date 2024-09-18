<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);

        User::factory()->create([
            'name' => 'Kelompok 1 - Stark',
            'email' => 'stark@gmail.com',
            'password' => 'stark'
        ]);

        // User::factory()->create([
        //     'name' => 'Kelompok 2 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);
        // User::factory()->create([
        //     'name' => 'Kelompok 3  - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);

        // User::factory()->create([
        //     'name' => 'Kelompok 4 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);   
        
        // User::factory()->create([
        //     'name' => 'Kelompok 5 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);  
        
        // User::factory()->create([
        //     'name' => 'Kelompok 6 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);  
        
        // User::factory()->create([
        //     'name' => 'Kelompok 7 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);  
        
        // User::factory()->create([
        //     'name' => 'Kelompok 8 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);  
        
        // User::factory()->create([
        //     'name' => 'Kelompok 9 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]); 
        
        // User::factory()->create([
        //     'name' => 'Kelompok 10 - ',
        //     'email' => '@gmail.com',
        //     'password' => ''
        // ]);
        
    }
    
}
