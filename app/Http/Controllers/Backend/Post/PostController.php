<?php

/**
 * @Author: zent
 * @Date:   2018-05-09 16:30:46
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 12:06:14
 */

namespace App\Http\Controllers\Backend\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\Post\PostRepository;
class PostController extends Controller
{
    /**
     * @var postRepository
     */
    protected $postRepository;

    /**
     * UserController constructor.
     *
     * @param postRepository $postRepository
     */
    
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = $this->postRepository;
        
        $limit = ($request->limit && in_array($request->limit, config('options.perpage'))) ? $request->limit : config('options.limitpage');
        if ($request->search) {

        }
        $posts = $posts->paginate($limit);
        return view('backend.post.index', compact('posts', 'limit', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->postRepository->create($request->only('title', 'content'));

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.posts.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('backend.post.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
