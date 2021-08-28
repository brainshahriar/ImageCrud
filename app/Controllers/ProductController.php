<?php

namespace App\Controllers;

class ProductController extends BaseController
{
	public function index()
	{
		return view('products/index');
	}

	public function create()
	{
		return view('products/create');
	}
}
