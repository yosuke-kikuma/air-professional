<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210527210445/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210527210392/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210527210402/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210525210272/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210526210342/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210522210125/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210521210001/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210520209982/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210519209950/'
        ]);
        
         DB::table('articles')->insert([
            'content' => 'https://www.traicy.com/posts/20210518209829/'
        ]);
    }
}
