<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('nvknhacc')->insert([
                'nvkMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'nvkTenNCC'=>$faker->sentence(5),
                'nvkDiachi'=>$faker->address(),
                'nvkDienthoai'=>$faker->phoneNumber(10),
                'email'=>$faker->email(),
                'status'=>$faker->boolean()
            ]);
        }
    }
}
