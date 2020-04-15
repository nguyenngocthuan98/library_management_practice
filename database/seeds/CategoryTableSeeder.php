<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            0 => [
                0 => 'Science - Technology',
                1 => [
                    1 => 'Medicine',
                    2 => 'Atheist science',
                    3 => 'Scientific knowledge'
                ]
            ],
            1 => [
                0 => 'cultural - society',
                1 => [
                    1 => 'politics - law',
                    2 => 'education',
                    3 => 'culture and arts',
                    4 => 'social science',
                ]
            ],
            2 => [
                0 => 'History',
                1 => [
                    1 => 'VietNam history',
                    2 => 'World History',
                ]
            ],
            3 => [
                0 => 'Celebrity',
                1 => [
                    1 => 'Vietnamese celebrity',
                    2 => 'Celebrity world',
                ]
            ],
            4 => [
                0 => 'Literary',
                1 => [
                    1 => 'Short story',
                    2 => 'Poem',
                    3 => 'Horror',
                    4 => 'Detective',
                ]
            ],
        ];

        //create category level 1
        for ($i = 0; $i < sizeof($categories); $i++) {
            if (is_array($categories[$i][1])) {
                Category::create([
                    'name_category' => $categories[$i][0],
                ]);
            } else {
                Category::create([
                    'name_category' => $categories[$i],
                ]);
            }
        }

        //create category level 2
        for ($i = 0; $i < sizeof($categories); $i++) {
            $cate_child = $categories[$i][1];
            if (isset($cate_child) && is_array($cate_child)) {
                foreach ($cate_child as $key => $value) {
                    Category::create([
                        'name_category' => $value,
                        'id_parent' => $i + 1,
                    ]);
                }
            }
        }
    }
}
