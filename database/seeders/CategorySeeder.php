<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('article_categories')->insert([
            [
                'name'=>'Tin thị trường',
                'category'=>'tin-thi-truong',
                'description'=>'Tin thị trường'
            ],[
                'name'=>'Tin Công Ty',
                'category'=>'tin-cong-ty',
                'description'=>'Tin Công Ty'
            ],
        ]);
    }
}
