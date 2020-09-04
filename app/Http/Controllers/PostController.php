<?php

namespace App\Http\Controllers;

// We will use our Validated Request
use App\Http\Requests\PostRequest;
// use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        // Helper to see all about request that we have recieved
        dd($request->all());
        // Validation should be in a separated file
        //  php artisan make:request PostRequest we can find it in app/Http/Request/
    }
}
