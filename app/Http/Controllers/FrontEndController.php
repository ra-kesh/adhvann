<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Post;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
      
        return view('website.home');
    }

    public function about(){
        return view('website.about');
    }
   
    public function category(){
        return view('website.category');
    }
   
    public function contact(){
            return view('website.contact');
            $this->validate($request, [
                'name' => 'required|max:200',
                'email' => 'required|email|max:200',
                'number' => 'required|max:15',
                'message' => 'required|min:100',
            ]);
    
            $contact = Contact::create($request->all());
    
            Session::flash('message-send', 'Thank you for contacting us ');
            return redirect()->back();
    }
    public function blog(){

            $recentPosts = Post::with('category' , 'user')->orderBy('created_at', 'DESC')->get();
            return view('website.blog',compact(['recentPosts']));
    }
    public function download(){
            return view('website.download');
    }


    public function post($slug){
        $post = Post::with('category', 'user')->where('slug', $slug)->first();

        if($post){
            return view('website.post', compact('post'));
        }else {
            return redirect('/blog');
        }
    }

    public function send_message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'number' => 'required|max:15',
            'message' => 'required|min:1',
        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Thank you for contacting us ');
        return redirect()->back();
    }
   
    
    
}
