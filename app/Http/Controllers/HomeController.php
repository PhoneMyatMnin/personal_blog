<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\user;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $posts = Post::where('post_status','=','active')->get();
            $usertype = Auth()->user()->usertype;

            if ($usertype == "user") {
                return view("home.homepage", compact("posts"));
            } else if ($usertype == "admin") {
                return view("admin.adminhome");
            } else {
                return redirect()->back();
            }
        }
    }

    // public function post()
    // {
    //     return view("post");
    // }

    public function homepage()
    {
        $posts = Post::where('post_status','=','active')->get();
        return view('home.homepage', compact('posts'));
    }
        // 
    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post(Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $username = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;
        $post->name = $username;
        $post->usertype = $usertype;
        $post->post_status = 'pending';

        $image = $request->file('image');

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }
        $post->save();
        Alert::success('Congrats', 'You have Added the data successfully');
        return redirect()->back();
    }
    public function my_post()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = POST::where('user_id', '=', $userid)->get();
        return view('home.my_post', compact('data'));
    }

    public function my_post_del($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Post Delete Successfully');
    }

    public function post_update_page($id)
    {
        $data = Post::find($id);
        return view('home.post_page', compact('data'));
    }

    public function update_post_data(Request $request, $id)
    {
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('postimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Post Updated Successfully');
    }
}
