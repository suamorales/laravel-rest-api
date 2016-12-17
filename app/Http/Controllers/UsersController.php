<?php namespace App\Http\Controllers;
 
use App\Company;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class UsersController extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\User $project
	 * @return Response
	 */
	public function index(Company $company)
	{
		return view('users.index', compact('company'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
// 	public function create(Company $company)
// 	{
// 		return view('users.create', compact('company'));
// 	}
 
// 	/**
// 	 * Store a newly created resource in storage.
// 	 *
// 	 * @param  \App\Project $project
// 	 * @return Response
// 	 */
// 	public function store(Company $company)
// 	{
// 		//
// 	}
 
// 	/**
// 	 * Display the specified resource.
// 	 *
// 	 * @param  \App\Project $project
// 	 * @param  \App\Task    $task
// 	 * @return Response
// 	 */
// 	public function show(Company $company, User $user)
// 	{
// 		return view('users.show', compact('company', 'user'));
// 	}
 
// 	/**
// 	 * Show the form for editing the specified resource.
// 	 *
// 	 * @param  \App\Project $project
// 	 * @param  \App\Task    $task
// 	 * @return Response
// 	 */
// 	public function edit(Company $company, User $user)
// 	{
// 		return view('users.edit', compact('company', 'user'));
// 	}
 
// 	/**
// 	 * Update the specified resource in storage.
// 	 *
// 	 * @param  \App\Project $project
// 	 * @param  \App\Task    $task
// 	 * @return Response
// 	 */
// 	public function update(Company $company, User $user)
// 	{
// 		//
// 	}
 
// 	/**
// 	 * Remove the specified resource from storage.
// 	 *
// 	 * @param  \App\Project $project
// 	 * @param  \App\Task    $task
// 	 * @return Response
// 	 */
// 	public function destroy(Company $company, User $user)
// 	{
// 		//
// 	}
 
}