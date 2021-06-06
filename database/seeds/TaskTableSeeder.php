<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = ['pf作成home画面', '読書', '写経'];
        foreach ($content as $contents) {
          DB::table('tasks')->insert([
            'content' => $contents,
            'created_at' => new Datetime(),
            'update_at' => new Datetime()
          ]);
        }
    }
}
