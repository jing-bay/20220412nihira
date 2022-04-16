<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'author_id' => 1,
            'title' => '桃太郎',
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => 3,
            'title' => '白雪姫',
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => 3,
            'title' => 'シンデレラ',
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => 3,
            'title' => 'マッチのやつ',
        ];
        DB::table('books')->insert($param);
        $param = [
            'author_id' => 3,
            'title' => '豚',
        ];
        DB::table('books')->insert($param);
    }
}

