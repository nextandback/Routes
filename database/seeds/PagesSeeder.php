<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => 'deneme 1',
            'active'=> 2,
            'content'=> 'deneme2',
            'header'=>'deneme 4'

        ]);
    }
}
