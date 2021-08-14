<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use App\Models\User;
use Database\Factories\NewsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        Category::factory(5)->create();
        User::factory(50)->create()->each(function (User $user){
            $user->news()->saveMany(News::factory(random_int(1, 3))->make());
            $user->news()->saveMany(Source::factory(random_int(0, 2))->make());
        });
        News::all()->each(function (News $news) {
            $news->categories()->sync(Category::all()->random(random_int(1, 4)));
        });
    }
}
