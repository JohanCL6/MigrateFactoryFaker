<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('comments')->insert([
            'title'=> 'Comment One',  
            'comment'=> 'Comment Text One'
        ]); */

        Comment::factory()->count(500)->create();
    }
}
