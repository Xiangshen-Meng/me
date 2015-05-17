<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller {

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
		return view('team.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('team.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        Team::create($request->all());
        return redirect('team');
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
     * @param $team
     * @return Response
     */
	public function edit($team)
	{
        return view('team.edit', compact('team'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $team
     * @return Response
     */
	public function update(Request $request, $team)
	{
        $team->update($request->all());
        return redirect()->route('team.show', $team);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param $team
     * @return Response
     */
	public function destroy($team)
	{
        $team->delete();
        return redirect()->back();
	}

}
