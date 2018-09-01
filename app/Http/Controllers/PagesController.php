<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index() {
		$title = 'Welcome to the ' . config('app.name');
		return view('pages.index')->with('title', $title);
	}

	public function about() {
		$title = "About";
		return view('pages.about')->with('title', $title);
	}

	public function services() {
		$data = [
			'title'=>'Services',
			'services' => [
				'WebDesign','Programming','SEO'
			]
		];
		return view('pages.services')->with($data);
	}
}
