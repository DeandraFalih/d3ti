<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCategories;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ClientPostController extends Controller
{
    /**
     * 
     * Backend
     * 
     **/

    public function all_post()
    {
        $data_post=DB::table('d3ti_post')
        ->get();

        return view('admin/post/allpost', compact('data_post'));
    }

    public function add_post()
    {
        $data_post_categories=DB::table('d3ti_post_categories')
        ->get();

        return view('admin/post/addpost', compact('data_post_categories'));
    }

    public function add_post_process(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'featured' => 'required',
            'content' => 'required',
            'category' => 'required',
            'excerpt' => 'required',
            'date' => 'required',
            'link' => 'required',
            'meta' => 'required',
            'tags' => 'required',
            'submit' => 'required',
        ]);

        //Replace the status value from "Publish" to "Published"
        $status = $request->submit;
        if ($status == "Publish"){
            $status = "Published";
        }

        //Replace the space of the link to "-" and make it lowercase
        $link = $request->link;
        $link = str_replace(' ', '-', $link);
        $link = strtolower($link);

        //Replace "../" from content to absolute URL
        $content = $request->content;
        $content = str_replace('../', 'http://localhost/d3ti/public/', $content);

        //Rename the Featured Image and move it to a specific folder
        $featured = $request->file('featured');
        $textfeatured = $featured->getClientOriginalName();
        $newtextfeatured = Str::uuid();
        $extension = $featured->getClientOriginalExtension();
        $folder = 'post/featured_image';
        $featured->move($folder, $newtextfeatured.".".$extension);
        $filename = $newtextfeatured.".".$extension;

        $client = new Client();
        $response = $client->request('POST', 'http://localhost/d3ti/public/api/d3ti-admin/add_post/process',
        [
            'json' => [
                'title' => $request->title,
                'featured' => $filename,
                'content' => $content,
                'category' => $request->category,
                'excerpt' => $request->excerpt,
                'date' => $request->date,
                'link' => $link,
                'meta' => $request->meta,
                'tags' => $request->tags,
                'status' => $status,
            ]
        ]
        );

        return redirect('/d3ti-admin/all_post');
    }

    public function edit_post($post_id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/d3ti/public/api/d3ti-admin/edit_post/'.$post_id);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        $data = json_decode($body, true);

        return view('/admin/post/editpost', ['post'=>$data]);
    }

    public function delete_post($post_id)
    {
        $data_post = Post::findOrFail($post_id);
        $data_post->delete();

        return redirect('/d3ti-admin/all_post');
    }

    public function post_categories()
    {
        $data_post_categories=DB::table('d3ti_post_categories')
        ->get();

        return view('admin/post/categories', compact('data_post_categories'));
    }

    public function add_post_categories_process(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $client = new Client();
        $response = $client->request('POST', 'http://localhost/d3ti/public/api/d3ti-admin/categories/process',
        [
            'json' => [
                'name' => $request->name,
                'description' => $request->description,
            ]
        ]
        );

        return redirect('/d3ti-admin/categories');
    }

    
    /**
     * 
     * Frontend
     * 
     **/

     public function article($post_link)
     {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/d3ti/public/api/news/'.$post_link);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        $data = json_decode($body, true);

        return view('/user/news/newslayout', ['data_post'=>$data]);
     }

    public function homepage()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/d3ti/public/api/');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        $data = json_decode($body);

        return view('user/dashboard/dashboard', [
            'data_post' => $data->data_post,
        ]);
    }

}
