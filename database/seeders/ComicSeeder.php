<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $comic = new Comic;
            $comic->title = $faker->name();
            $comic->description = $faker->paragraphs(2, true);
            $comic->thumb = $faker->imageUrl(640,480, 'comic', true);
            $comic->price = $faker->randomFloat(2, 5, 30);
            $comic->series = $faker->words(3, true);
            $comic->sale_date = $faker->date();
            $comic->type = $faker->randomElement([
                'comic book',
                'graphic novel'
            ]);
            $comic->save();
        }
    }
}
