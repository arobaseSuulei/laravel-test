<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    public function run(): void
    {

        // ── Users ─────────────────────────────────────────────
        DB::table('users')->insert([
            ['name' => 'Alice Martin',   'email' => 'alice@test.com',  'password' => bcrypt('password')],
            ['name' => 'Bob Dupont',     'email' => 'bob@test.com',    'password' => bcrypt('password')],
            ['name' => 'Clara Fontaine', 'email' => 'clara@test.com',  'password' => bcrypt('password')],
            ['name' => 'David Leroy',    'email' => 'david@test.com',  'password' => bcrypt('password')],
            ['name' => 'Emma Bernard',   'email' => 'emma@test.com',   'password' => bcrypt('password')],
        ]);

        // ── Properties ───────────────────────────────────────
        DB::table('properties')->insert([
            ['name' => 'Villa Azur',           'description' => 'Belle villa avec piscine vue mer à Nice.','image' => 'https://a0.muscache.com/im/pictures/hosting/Hosting-1225447282819176692/original/14c56092-de10-4e21-867b-a5a1f73d3559.jpeg?im_w=960',       'price_per_night' => 250.00],
            ['name' => 'Chalet des Alpes',     'description' => 'Chalet cosy au pied des pistes à Megève.', 'image' => 'https://a0.muscache.com/im/pictures/hosting/Hosting-1476744741313742376/original/2ff0fd94-1e82-4482-a7a7-0e610323ade6.jpeg?im_w=960',       'price_per_night' => 180.00],
            ['name' => 'Appartement Parisien', 'description' => 'Studio moderne au cœur du Marais, Paris.', 'image' => 'https://a0.muscache.com/im/pictures/hosting/Hosting-1476744741313742376/original/2ff0fd94-1e82-4482-a7a7-0e610323ade6.jpeg?im_w=960' ,     'price_per_night' => 120.00],
            ['name' => 'Mas Provençal',        'description' => 'Mas authentique avec jardin en Luberon.', 'image' => 'Belle villa avec piscine vue mer à Nice.' ,      'price_per_night' => 95.00],
            ['name' => 'Cabane dans les Arbres','description' => 'Séjour insolite en forêt près de Bordeaux.', 'image' => 'Belle villa avec piscine vue mer à Nice.' ,  'price_per_night' => 75.00],
        ]);

        // ── Booking ──────────────────────────────────────────
        DB::table('booking')->insert([
            ['user_id' => 1, 'property_id' => 1, 'start_date' => '2025-07-01', 'end_date' => '2025-07-07'],
            ['user_id' => 2, 'property_id' => 3, 'start_date' => '2025-08-15', 'end_date' => '2025-08-20'],
            ['user_id' => 3, 'property_id' => 2, 'start_date' => '2025-12-20', 'end_date' => '2025-12-27'],
            ['user_id' => 4, 'property_id' => 4, 'start_date' => '2025-09-05', 'end_date' => '2025-09-10'],
            ['user_id' => 5, 'property_id' => 5, 'start_date' => '2025-06-01', 'end_date' => '2025-06-03'],
        ]);
    }
}
