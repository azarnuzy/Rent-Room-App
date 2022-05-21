<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Building;
use App\Models\Room;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Rent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        { {
            }
        }
        // \Ap{{ p\Mo }}dels\User::factory()->create([
        //    {{  'na }}me' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'super admin',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'dosen',
        ]);

        Role::create([
            'name' => 'ketua kelompok',
        ]);

        Role::create([
            'name' => 'mahasiswa',
        ]);

        Role::create([
            'name' => 'guest',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => mt_rand(1, 5),
        ]);

        User::create([
            'name' => 'sekar',
            'email' => 'sekar@gmail.com',
            'password' => bcrypt('sekar'),
            'role_id' => mt_rand(1, 5),
        ]);

        User::create([
            'name' => 'azar',
            'email' => 'azar@gmail.com',
            'password' => bcrypt('azar'),
            'role_id' => mt_rand(1, 5),
        ]);

        User::create([
            'name' => 'zek',
            'email' => 'zek@gmail.com',
            'password' => bcrypt('zek'),
            'role_id' => mt_rand(1, 5),
        ]);

        User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('ahmad'),
            'role_id' => mt_rand(1, 5),
        ]);

        User::create([
            'name' => 'rahma',
            'email' => 'rahma@gmail.com',
            'password' => bcrypt('rahma'),
            'role_id' => mt_rand(1, 5),
        ]);

        Admin::create([
            'name' => 'sekarmadu',
            'email' => 'sekarmadu@gmail.com',
            'password' => bcrypt('sekarmadu'),
        ]);

        Admin::create([
            'name' => 'azarnuzy',
            'email' => 'azarnuzy@gmail.com',
            'password' => bcrypt('azarnuzy'),
        ]);

        Faculty::create([
            'code' => 'FPMIPA',
            'name' => 'Fakultas Pendidikan Matematika dan IPA',
        ]);

        Building::create([
            'code' => 'FPMIPA-A',
            'name' => 'FPMIPA A',
            'location' => 'https://goo.gl/maps/s2vi7qUzymFgEXqH6',
            'faculty_id' => 1,
        ]);

        Building::create([
            'code' => 'FPMIPA-B',
            'name' => 'FPMIPA B',
            'location' => 'https://goo.gl/maps/fUsDWZE1CZEF1C1YA',
            'faculty_id' => 1,
        ]);

        Building::create([
            'code' => 'FPMIPA-C',
            'name' => 'FPMIPA C',
            'location' => 'https://goo.gl/maps/osU487Y3MGa8rhgk7',
            'faculty_id' => 1,
        ]);

        Room::create([
            'code' => 'A304',
            'name' => 'Lab Komputer',
            'img' => 'roomdefault.jpg',
            'floor' => '3',
            'status' => true,
            'capacity' => 30,
            'type' => 'Laboratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3),
        ]);

        Room::create([
            'code' => 'A305',
            'name' => 'Ruang Kelas',
            'img' => 'roomdefault.jpg',
            'floor' => '3',
            'status' => true,
            'capacity' => 25,
            'type' => 'Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'transaction_time' => now(),
            'time_start' => '2022-05-11 08:00:00',
            'time_end' => null,
            'purpose' => 'praktikum',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'transaction_time' => now(),
            'time_start' => '2022-05-19 10:00:00',
            'time_end' => null,
            'purpose' => 'kerja kelompok',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'transaction_time' => now(),
            'time_start' => '2022-05-20 09:00:00',
            'time_end' => '2022-05-20 12:00:00',
            'purpose' => 'kerja kelompok',
            'status' => 'selesai',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'transaction_time' => now(),
            'time_start' => '2022-05-11 08:00:00',
            'time_end' => '2022-05-11 15:00:00',
            'purpose' => 'rapat',
            'status' => 'selesai',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'transaction_time' => now(),
            'time_start' => '2022-05-15 13:30:00',
            'time_end' => null,
            'purpose' => 'rapat',
            'status' => 'dipinjam',
        ]);
    }
}
