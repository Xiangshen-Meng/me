<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('post.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('post.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request)
	{
        Auth::user()->posts()->create($request->all());
        return redirect('post');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $post
     * @return Response
     */
	public function edit($post)
	{
        if ($post->user_id == Auth::id()) {
            return view('post.edit', compact('post'));
        } else {
            return redirect()->route('post.show', $post)->with('message', '您无权访问该页面');
        }
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $post
     * @return Response
     */
	public function update(Request $request, $post)
	{
        $post->update($request->all());
        return redirect()->route('post.show', $post);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
	public function destroy($post)
	{
        $post->delete();
        return redirect()->back();
	}

}
