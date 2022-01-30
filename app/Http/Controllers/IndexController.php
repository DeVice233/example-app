<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    public function index(){
        $posts = Post::paginate(4);
    return view('post.test', ['posts' =>$posts]);
    }

    public function singlePost(Request $request,  $id)
    {
        $post = Post::find($id);

        return view('singlePost',['post'=>$post]);
    }

    public function home()
    {
        return view('welcome');
    }
    public function contactForm()
    {
        return view('contactForm');
    }

    public function mailSend(ContactFormRequest $request)
    {
        Mail::to("yakovenko182003@gmail.com")->send("дарагой дневник, я абасралась");
    }

}

