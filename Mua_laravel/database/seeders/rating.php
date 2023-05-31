<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class rating extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

          // Thêm dữ liệu ngẫu nhiên vào bảng "renter"
          for ($i = 1; $i <= 100; $i++) {
            DB::table('rating')->insert([
                'rating_id' => $i,
                'tenant_id' => $faker->name,
                'renting_email' => $faker->email,
                'renting_phone' => $faker->phoneNumber,
                'renting_address' => $faker->address,
                'renting_password' => bcrypt($faker->password)
            ]);
        }
    }
}