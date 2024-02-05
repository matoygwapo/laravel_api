<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Posts;
use App\Http\Requests\v1\StorePostsRequest;
use App\Http\Requests\v1\UpdatePostsRequest;

use App\Http\Controllers\Controller;



class PostsController extends Controller
{
    public function index()
    {
        return Posts::all();
        // response()->json(Posts::all());
    }
    public function store(StorePostsRequest $request)
    {
        Posts::create($request->all());
    }
    public function show($id)
    {
        return Posts::find($id);
    }
    public function update(UpdatePostsRequest $request, Posts $posts,$id)
    {
        Posts::where('id', $id)
            ->update($request->all());

        return json_encode(['id'=>$id]);
    }
    public function destroy(Posts $posts,$id)
    {
    }
}
