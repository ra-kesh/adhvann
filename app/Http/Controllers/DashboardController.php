<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'DESC')->take(10)->get();
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $messageCount = Contact::all()->count();
        $userCount = User::all()->count();


        return view('admin.dashboard.index', compact(['posts', 'postCount', 'categoryCount', 'messageCount', 'userCount']));
    }
}