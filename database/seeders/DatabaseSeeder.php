<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BeritaAcara;
use Illuminate\Database\Seeder;
use App\Models\Divisi;
use App\Models\Perusahaan;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Divisi::create([
            'name' => 'Administrasi'
        ]);
        Divisi::create([
            'name' => 'Konsultan Pajak'
        ]);
        Divisi::create([
            'name' => 'EFA'
        ]);
        Divisi::create([
            'name' => 'Acc Servis'
        ]);
        
        User::create([
            'name' => 'Dwi Santika',
            'no_telp' => '081234567890',
            'divisi_id' => '1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Srijaya',
            'no_telp' => '085643278690',
            'divisi_id' => '2',
            'email' => 'konsultan1@gmail.com',
            'password' => bcrypt('54321')
        ]);
        
        User::create([
            'name' => 'Galih Andika',
            'no_telp' => '082190827356',
            'divisi_id' => '3',
            'email' => 'konsultan2@gmail.com',
            'password' => bcrypt('67890')
        ]);

        User::create([
            'name' => 'Dwi Guna',
            'no_telp' => '08637489245',
            'divisi_id' => '4',
            'email' => 'konsultan3@gmail.com',
            'password' => bcrypt('09876')
        ]);

        Perusahaan::create([
            'name'=>'CV. Indah Jaya',
            'alamat'=>'Jln. Bunga Indah no.8, Malang, Jawa Timur, Indonesia',
            'no_telp'=>'081234567890'
        ]);

        Perusahaan::create([
            'name'=>'PT. Pelita Indah',
            'alamat'=>'Jln. Braga no.12, Bandung, Jawa Barat, Indonesia',
            'no_telp'=>'044144567'
        ]);

        BeritaAcara::create([
            'tanggal_kesepakatan'=> '2023-05-09',
            'nomor_surat' => 'BA/2023/05/22',
            'divisi_id' => '2',
            'perusahaan_id' => '1',
            'hasil' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut mi ullamcorper, semper dui quis, consequat orci. Morbi libero ex, condimentum et metus id, facilisis luctus urna. Integer vestibulum ac ligula vel imperdiet. Nulla ornare massa nec odio feugiat molestie. Etiam commodo augue a molestie cursus. Aliquam in libero a diam suscipit porta. Donec vehicula, nulla in mattis eleifend, libero felis tempor odio, nec accumsan justo ligula a neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras fringilla risus laoreet magna tincidunt aliquet. Nunc hendrerit tempus pretium. Curabitur auctor vitae tortor ut dapibus. In nec eros eu ex lobortis tincidunt at nec lectus.'
        ]);

        BeritaAcara::create([
            'tanggal_kesepakatan'=> '2023-05-15',
            'nomor_surat' => 'BA/2023/05/47',
            'divisi_id' => '4',
            'perusahaan_id' => '2',
            'hasil' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut mi ullamcorper, semper dui quis, consequat orci. Morbi libero ex, condimentum et metus id, facilisis luctus urna. Integer vestibulum ac ligula vel imperdiet. Nulla ornare massa nec odio feugiat molestie. Etiam commodo augue a molestie cursus. Aliquam in libero a diam suscipit porta. Donec vehicula, nulla in mattis eleifend, libero felis tempor odio, nec accumsan justo ligula a neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras fringilla risus laoreet magna tincidunt aliquet. Nunc hendrerit tempus pretium. Curabitur auctor vitae tortor ut dapibus. In nec eros eu ex lobortis tincidunt at nec lectus.'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
