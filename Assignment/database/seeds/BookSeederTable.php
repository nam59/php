<?php

use Illuminate\Database\Seeder;

class BookSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'title' => 'Giáo trình C ',
                'ISBN' => 'Giáo trình C',
                'available' => 1,

            ],
            [
                'title' => 'Giáo trình Java',
                'ISBN' => 'Giáo trình Java',
                'available' => 1,
            ],
            [
                'title' => 'Giáo trình C# ',
                'ISBN' => 'Giáo trình C#',
                'available' => 1,
            ],
            [
                'title' => 'Giáo trình PHP',
                'ISBN' => 'Giáo trình PHP',
                'available' => 1,
            ],
            [
                'title' => 'Giáo trình HTML',
                'ISBN' => 'Giáo trình HTML',
                'available' => 1,
            ],
        ]);
    }
}



