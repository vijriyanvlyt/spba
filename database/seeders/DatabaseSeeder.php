<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Divisi;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Divisi::create([
            'name' => 'Administrasi',
            'slug' => 'divisi-administrasi'
        ]);
        Divisi::create([
            'name' => 'Satu',
            'slug' => 'divisi-satu'
        ]);
        Divisi::create([
            'name' => 'Dua',
            'slug' => 'divisi-dua'
        ]);
        Divisi::create([
            'name' => 'Tiga',
            'slug' => 'divisi-tiga'
        ]);
        
        User::create([
            'name' => 'Vijriyani Velayati',
            'username' => 'vijriyanvlyt',
            'divisi_id' => '1',
            'email' => 'vijriyanvlyt@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Rhizika Velajani Santoso',
            'username' => 'rhizikaa',
            'divisi_id' => '3',
            'email' => 'rhizikaa@gmail.com',
            'password' => bcrypt('54321')
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
