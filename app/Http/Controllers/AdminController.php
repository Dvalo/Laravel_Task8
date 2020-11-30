<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tags;
use App\Category;

class AdminController extends Controller
{
    public function index() {
    	return view('news.create');
    }

    public function createCategory() {
    	return view('category.create');
    }

    public function storeCategory(Request $request) {

    	$validatedData = $request->validate([
	        'title' => 'required|max:255'
    	]);

    	$input = $request->all();
    	$category = Category::create([
            "title" => $input['title'],
        ]);

        return back();
    }

    public function store(Request $request) {
    	$validatedData = $request->validate([
	        'title' => 'required|max:255',
	        'description' => 'required',
	        'short_desc' => 'required|max:255',
	        'add_date' => 'required'
    	]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        $news = News::create([
            "title" => $input['title'],
            "description" => $input["description"],
            "short_desc" => $input["short_description"],
            "short_desc" => $input["short_description"],
            "add_date" => $input["add_date"],
            "user_id" => $input["user_id"],
            "category_id" => $request->input('categories')
        ]);

        $tags = $request->input('tags');
        foreach ($tags as $tag) {
            Tags::create([
                "news_id"=>$news->id,
                "name"=>$tag,
            ]);
        }
   
        return back();
    }
}
