<?php

use App\Models\Kitchen\Utensil;
use Illuminate\Database\Seeder;

class UtensilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Utensil::truncate();
        for ($i=1; $i <= 60; $i++) { 
            $categoryId =  rand(1, 20);
            $utensil = [
                'name'                => "Utensil-$i",
                'stock'               => rand(10, 9999),
                'category_id' => $categoryId
            ];
            Utensil::create($utensil);
        }
    }
}
