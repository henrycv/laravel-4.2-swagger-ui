<?php

use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Search API", version="1.0.0")
 */
class SwaggerController extends \BaseController
{

	/**
	 * @OA\Post(
	 *     path="/search",
	 *     summary="Returns most accurate search result object",
	 *     description="Search for an object, if found return it!",
	 *     @OA\RequestBody(
	 *         description="Client side search object",
	 *         required=true,
	 *         @OA\MediaType(
	 *             mediaType="application/json",                 
	 *         @OA\Schema(ref="#/components/schemas/SearchObject")
	 *         )
	 *     ),
	 *     @OA\Response(
	 *         response=200,
	 *         description="Success",
	 *     @OA\Schema(ref="#/components/schemas/SearchResultObject)   
	 *     ), 
	 *     @OA\Response(
	 *         response=404,
	 *         description="Could Not Find Resource"
	 *     )   
	 * )
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('swagger.index', [
			'swaggerFilePath' => app_path() . 'swagger.json'
		]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


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
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
