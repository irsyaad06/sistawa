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

        User::factory()->create([
            'name' => 'Kelompok 2 - Lannister',
            'email' => 'lannister@gmail.com',
            'password' => 'lanister'
        ]);
        User::factory()->create([
            'name' => 'Kelompok 3  - Targaryen',
            'email' => 'targaryen@gmail.com',
            'password' => 'targaryen'
        ]);

        User::factory()->create([
            'name' => 'Kelompok 4 - Baratheon',
            'email' => 'baratheon@gmail.com',
            'password' => 'baratheon'
        ]);   
        
        User::factory()->create([
            'name' => 'Kelompok 5 - Tyrell',
            'email' => 'tyrell@gmail.com',
            'password' => 'tyrell'
        ]);  
        
        User::factory()->create([
            'name' => 'Kelompok 6 - Martell',
            'email' => 'martell@gmail.com',
            'password' => 'martell'
        ]);  
        
        User::factory()->create([
            'name' => 'Kelompok 7 - Bracken',
            'email' => 'bracken@gmail.com',
            'password' => ''
        ]);  
        
        User::factory()->create([
            'name' => 'Kelompok 8 - Velaryon',
            'email' => 'velaryon@gmail.com',
            'password' => ''
        ]);  
        
        User::factory()->create([
            'name' => 'Kelompok 9 - Frey',
            'email' => 'frey@gmail.com',
            'password' => 'frey'
        ]); 
        
        User::factory()->create([
            'name' => 'Kelompok 10 - Dothiarki',
            'email' => 'dothiarki@gmail.com',
            'password' => 'dothiarki'
        ]);
        
    }
    
}
