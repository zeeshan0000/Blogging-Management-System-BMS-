<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Hash;
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
       $author1=App\User::create([
           'name'=>'john doe',
           'email'=>'johndoe@example.com',
           'password'=>Hash::make('password'),
       ]);
       $author2=App\User::create([
        'name'=>'jane doe',
        'email'=>'janedoe@example.com',
        'password'=>Hash::make('password'),
    ]);
      
    $post1=$author1->posts()->create([
           'title'=>'We relocated our office to a new designed garage',
        
           'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
           'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
           'category_id'=>$category1->id,
           'image'=>'posts/1.jpg',
           'user_id'=>$author1->id,

        ]);
        $post2=$author2->posts()->create([
            'title'=>'Top 5 brilliant content marketing strategies',
           
            'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id'=>$category2->id,
            'image'=>'posts/2.jpg',
 
         ]);
         $post3=$author2->posts()->create([
            'title'=>'Best practices for minimalist design with example',
           
            'description'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'content'=>'packages and web page editors now use Lorem Ipsum as their default model text, and a search for  will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id'=>$category2->id,
            'image'=>'posts/3.jpg',
 
         ]);
         $post4=$author1->posts()->create([
            'title'=>'New published books to read by a product designer',
            
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
