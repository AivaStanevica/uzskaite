<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        Comment::create([
            'task_id' => '2',
            'user_id'=>'1',
            'body' => 'WOW',
        ]);
        Comment::create([
            'task_id' => '4',
            'user_id'=>'2',
            'body' => 'Kek',
        ]);
    }
}
