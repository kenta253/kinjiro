<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 各テーブルへのデータの流し込みを呼び出す
        $this->call('TaskTableSeeder::class');
    }
}
