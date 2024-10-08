<?php

namespace Database\Seeders;

use App\Models\Book;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i <10; $i++) {
            Book::Create([
                'nama_pemain' => fake()->name(),
                'nomor_punggung' => fake()->numberBetween(0, 999),
                'posisi' => fake()->name(),
            ]);
        }
    }
}
