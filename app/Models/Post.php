<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul 1',
                'author' => 'Author 1',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam earum ex harum numquam, iure laboriosam unde repellendus doloremque f
            acere reiciendis incidunt cumque distinctio iusto qui excepturi minima autem ut ipsum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aut odio laboriosam ratione ea vel totam at fugiat magnam nesciunt, quisquam sint repellendus atque praesentium, dolores quaerat adipisci natus autem?'
            ],
            [
                'id' => 2,
                'title' => 'Judul 2',
                'author' => 'Author 2',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, totam facilis. Eum, saepe nulla. Aliquam minima explicabo culpa quidem sed aperiam atque esse suscipit id, cupiditate inventore velit magnam cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aut odio laboriosam ratione ea vel totam at fugiat magnam nesciunt, quisquam sint repellendus atque praesentium, dolores quaerat adipisci natus autem?'
            ]

        ];
    }

    public static function find($id)
    {
        // callback
        //     return Arr::first(static::all(), function($post) use ($id){
        //     return $post['id'] == $id;
        // });

        // arrow funcion
        // return Arr::first(static::all(), fn($post) => $post['id'] == $id);
        
        $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);

         if(!$post){
            abort(404);
         }

         return $post;
    }
}
