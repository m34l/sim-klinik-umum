<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                    JadwalSeeder::class,
                    ObatSeeder::class,
                    PenyakitSeeder::class,
                    UsersSeeder::class,
                    TindakanSeeder::class,
                    AntrianSeeder::class,
                    ResepSeeder::class,
                    RekamSeeder::class,
                    InvoiceSeeder::class,
        ]);
    }
}
