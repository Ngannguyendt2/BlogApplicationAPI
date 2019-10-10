<?php

namespace App\Http\Controllers;

use App\Http\Services\BlogService;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    protected $blogController;

    public function __construct(BlogService $blogService)
    {
        $this->blogController = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogController->getAll();
        return response()->json($blogs, 200);
    }
}
