<?php

use App\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i < 50; $i++) {
        	$product = new Product;
        	$product->title = $faker->sentence(6, true);
	        $product->marca = $faker->randomElement(array ('Samsung','iPhone','HTC', 'LG', 'Huawei'));
	        $product->gama = $faker->randomElement(array ('Alta','Media','Baja'));
	        $product->conectividad = $faker->randomElement(array ('4G','3G'));
	        $product->description = $faker->paragraph(8, true);
	        $product->pricing = $faker->numberBetween(350, 5000);
            $product->extension = 'jpg';
	        $product->user_id = 1;
	        $product->save();

	        $img = file_get_contents($faker->imageUrl(600, 800, 'technics'));
	        $fileName = $product->id . ".jpg";
	        file_put_contents("storage/app/images/$fileName", $img);
        }
    }
}
