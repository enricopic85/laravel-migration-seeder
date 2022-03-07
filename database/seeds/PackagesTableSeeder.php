<?php

use App\Package;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0 ; $i < 10 ; $i++ ) { 
            $package=new Package();
            $package->title=$faker->text(30);
            $package->description=$faker->paragraph();
            $package->location=$faker->text(20);
            $package->price=$faker->randomFloat(2,1,1000);
            $package->duration=$faker->randomDigit();
            $package->available=$faker->boolean();
            $package->save();
        }
    }
}
