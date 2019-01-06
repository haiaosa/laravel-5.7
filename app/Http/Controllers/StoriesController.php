<?php

namespace App\Http\Controllers;

use App\Stories;
use Illuminate\Http\Request;

class StoriesController extends Controller
{

	public function index (Stories $stories)
	{
		$data = $stories->all();

		return view('main/index', compact('data'));

	}

   public function create ()
   {

   	return view('/main/create');

   } 

   public function store ()
   {

   		Stories::create([
   			'title' => request('title'),
   			'content' => request('textarea')
   		]);

   		return redirect('home');

   }

   public function show ($id)
   {
   	$story = Stories::findOrFail($id);

   	return view('main/show', compact('story'));

   }

}
