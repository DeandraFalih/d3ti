<?php

namespace App\Http\Controllers\Admin\api\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategories;
use App\Http\Resources\FormatPostResource;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * 
     * Backend
     * 
     **/
    
    public function add_post_process(Request $request)
    {
        $receive = Post::create([
            'post_title' => $request->title,
            'post_featured_image' => $request->featured,
            'post_content' => $request->content,
            'post_category' => $request->category,
            'post_excerpt' => $request->excerpt,
            'post_date' => $request->date,
            'post_author' => "Chirush",
            'post_link' => $request->link,
            'post_meta' => $request->meta,
            'post_tags' => $request->tags,
            'post_status' => $request->status,
        ]);
    }

    public function add_categories_process(Request $request)
    {
        $receive = PostCategories::create([
            'post_categories_name' => $request->name,
            'post_categories_description' => $request->description,
        ]);
    }

    public function edit_post($post_id)
    {
        $data_post = Post::where('post_id', '=', $post_id)->get();

        return new FormatPostResource(true, 'Detail Post', $data_post);
    }    

    /**
     * 
     * Backend
     * 
     **/

    public function homepage()
    {
         $data_post=DB::table('d3ti_post')
         ->limit(3)
         ->orderBy('post_id', 'desc')
         ->where('post_status', '=', "Published")
         ->get();

        return [
            'data_post' => $data_post,
        ];
    }

    public function article($post_link)
    {
        $data_post = Post::where('post_link', '=', $post_link)->get();

        return new FormatPostResource(true, 'Detail Post', $data_post);
    }
}
