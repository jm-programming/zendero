<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        for ($i=1; $i < 6; $i++) {
            DB::table('posts')->insert([
                'title' => ' post ' . $i,
                'excerpt' =>'contenido del post ' . $i,
                'body' =>'<p>cuerpo del post '. $i.'</p> ',
                'category_id' => $i,
                'published_at' => Carbon::now()->subday($i),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('categories')->insert([
                'name' =>'Categoria ' . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
