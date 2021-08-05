<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public const CATEGORY_LIST = [
        1 => [
            'id' => 1,
            'name' => 'Frontend',
            'description' => 'Curabitur nisi. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Nam commodo suscipit quam. Fusce neque. Donec posuere vulputate arcu.',
        ],
        2 => [
            'id' => 2,
            'name' => 'Backend',
            'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut non enim eleifend felis pretium feugiat. Nullam accumsan lorem in dui. Fusce convallis metus id felis luctus adipiscing. In ut quam vitae odio lacinia tincidunt.',
        ],
        3 => [
            'id' => 3,
            'name' => 'DevOps',
            'description' => 'Phasellus gravida semper nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis ante. Ut id nisl quis enim dignissim sagittis. Donec venenatis vulputate lorem.',
        ],
        4 => [
            'id' => 4,
            'name' => 'System Administration',
            'description' => 'Phasellus blandit leo ut odio. Suspendisse non nisl sit amet velit hendrerit rutrum.. Sed in libero ut nibh placerat accumsan. Ut varius tincidunt libero.',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
