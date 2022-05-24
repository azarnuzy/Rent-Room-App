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
            'nomor_induk' => '2001194590',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'sekar',
            'email' => 'sekar@gmail.com',
            'password' => bcrypt('sekar'),
            'nomor_induk' => '2007703',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'azar',
            'email' => 'azar@gmail.com',
            'password' => bcrypt('azar'),
            'nomor_induk' => '2004191',
            'role_id' => 5,
        ]);

        User::create([
            'name' => 'zek',
            'email' => 'zek@gmail.com',
            'password' => bcrypt('zek'),
            'nomor_induk' => '2007993',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('ahmad'),
            'nomor_induk' => '2007235',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'rahma',
            'email' => 'rahma@gmail.com',
            'password' => bcrypt('rahma'),
            'nomor_induk' => '2005668',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'yaya',
            'email' => 'yaya@gmail.com',
            'password' => bcrypt('yaya'),
            'nomor_induk' => '1007272',
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'rosal',
            'email' => 'rosal@gmail.com',
            'password' => bcrypt('rosal'),
            'nomor_induk' => '1005263',
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'cahya',
            'email' => 'cahya@gmail.com',
            'password' => bcrypt('cahya'),
            'nomor_induk' => '2001231',
            'role_id' => 5,
        ]);

        User::create([
            'name' => 'iqbal',
            'email' => 'iqbal@gmail.com',
            'password' => bcrypt('iqbal'),
            'nomor_induk' => '1905221',
            'role_id' => 4,
        ]);

        User::create([
            'name' => 'windah',
            'email' => 'windah@gmail.com',
            'password' => bcrypt('windah'),
            'nomor_induk' => '1909234',
            'role_id' => 5,
        ]);

        User::create([
            'name' => 'bintang',
            'email' => 'bintang@gmail.com',
            'password' => bcrypt('bintang'),
            'nomor_induk' => '2102278',
            'role_id' => 4,
        ]);

        User::create([
            'name' => 'maneh',
            'email' => 'maneh@gmail.com',
            'password' => bcrypt('maneh'),
            'nomor_induk' => '2105634',
            'role_id' => 5,
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
            'code' => 'A201',
            'name' => 'Lab Komputer',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Laboratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3),
        ]);

        Room::create([
            'code' => 'A302',
            'name' => 'Ruang Kelas C2 2020',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C202',
            'name' => 'Lab Umum',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 25,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C203',
            'name' => 'Lab AI',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 15,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C204',
            'name' => 'Lab Computer Network',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 10,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C205',
            'name' => 'Lab Multimedia',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 15,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C206',
            'name' => 'Lab Microteaching',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 30,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C207',
            'name' => 'Lab RPL',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 10,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C208',
            'name' => 'Lab Sistem Informasi',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 20,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C209',
            'name' => 'Lab Big Data',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 2,
            'status' => false,
            'capacity' => 15,
            'type' => 'Labroratorium',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C301',
            'name' => 'Ruang Kelas C2 2020',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C307',
            'name' => 'Ruang Kelas C1 2020',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C303',
            'name' => 'Ruang Kelas C1 2021',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C304',
            'name' => 'Ruang Kelas C2 2021',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C305',
            'name' => 'Ruang Kelas A 2020',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Room::create([
            'code' => 'C306',
            'name' => 'Ruang Kelas B 2020',
            'img' => 'room-image/roomdefault.jpg',
            'floor' => 3,
            'status' => false,
            'capacity' => 40,
            'type' => 'Ruang Kelas',
            'description' => 'Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world',
            'building_id' => mt_rand(1, 3)
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-11 08:00:00',
            'time_end_use' => '2022-05-11 12:00:00',
            'purpose' => 'praktikum',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2022-05-20 09:00:00',
            'time_end_use' => '2022-05-20 12:00:00',
            'purpose' => 'kerja kelompok',
            'status' => 'selesai',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2022-05-11 08:00:00',
            'time_end_use' => '2022-05-11 15:00:00',
            'purpose' => 'rapat',
            'status' => 'selesai',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-19 10:00:00',
            'time_end_use' => '2022-05-19 12:00:00',
            'purpose' => 'kerja kelompok',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'rapat',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'latihan presentasi',
            'status' => 'pending',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => null,
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'latihan lomba',
            'status' => 'dipinjam',
        ]);

        Rent::create([
            'room_id' => mt_rand(1, 15),
            'user_id' => mt_rand(1, 5),
            'transaction_start' => now(),
            'transaction_end' => now(),
            'time_start_use' => '2022-05-15 13:30:00',
            'time_end_use' => '2022-05-15 17:00:00',
            'purpose' => 'latihan lomba',
            'status' => 'selesai',
        ]);
    }
}
