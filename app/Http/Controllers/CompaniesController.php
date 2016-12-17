<?php namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class CompaniesController extends Controller
{
  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$companies = Company::all();
		return view('companies.index', compact('companies'));
	}
	
	public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $company = new Company;
        $company->name = $request->name;
        $company->save();
        return redirect('/');
    }
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
// 	public function create()
// 	{
// 		return view('projects.create');
// 	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
// 	public function show(Project $project)
// 	{
// 		return view('projects.show', compact('project'));
// 	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
// 	public function edit(Project $project)
// 	{
// 		return view('projects.edit', compact('project'));
// 	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
// 	public function update(Project $project)
// 	{
// 		//
// 	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
// 	public function destroy(Project $project)
// 	{
// 		//
// 	}

}
