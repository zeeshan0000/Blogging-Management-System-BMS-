<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1=Category::create([
            'name'=>'php',

        ]);
        $category2=Category::create([
            'name'=>'jquery',

        ]);
      
        $post1=Post::create([
           'title'=>'We relocated our office to a new designed garage',
           'about'=>'About',
           'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
           'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
           'category_id'=>$category1->id,
           'image'=>'posts/1.jpg',

        ]);
        $post2=Post::create([
            'title'=>'Top 5 brilliant content marketing strategies',
            'about'=>'About',
            'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id'=>$category2->id,
            'image'=>'posts/2.jpg',
 
         ]);
         $post3=Post::create([
            'title'=>'Best practices for minimalist design with example',
            'about'=>'About',
            'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id'=>$category2->id,
            'image'=>'posts/3.jpg',
 
         ]);
         $post3=Post::create([
            'title'=>'New published books to read by a product designer',
            'about'=>'About',
            'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id'=>$category1->id,
            'image'=>'posts/4.jpg',
 
         ]);
         $tag1=Tag::create([
            'name'=>'Job',

        ]);
        $tag2=Tag::create([
            'name'=>'Customers',

        ]);
        $tag3=Tag::create([
            'name'=>'Record',

        ]);

        $post1->tags()->attach([$tag1->id,$tag2->id]);
        $post2->tags()->attach([$tag2->id,$tag3->id]);
        $post3->tags()->attach([$tag3->id,$tag1->id]);
    }
}
