<?php

/**
 * @SWG\Swagger(
 *     basePath="/api/v2",
 *     host="localhost",
 *     schemes={"http"},
 *     produces={"application/json"},
 *     consumes={"application/json"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Swagger Test",
 *         description="A sample API that uses a SwaggerController as an example to demonstrate features in the swagger-2.0 specification",
 *         termsOfService="http://swagger.io/terms/",
 *         @SWG\Contact(name="Swagger API Team"),
 *         @SWG\License(name="MIT")
 *     ),
 *     @SWG\Definition(
 *         definition="ErrorModel",
 *         type="object",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 * 
 * 
 */
class SwaggerController extends \BaseController
{

	/**
	 * @SWG\Get(
	 *     path="/api/v2/doc",
	 *     summary="Finds Pets by status",
	 *     description="Multiple status values can be provided with comma separated strings",
	 *     operationId="findPetsByStatus",
	 *     produces={"application/xml", "application/json"},
	 *     tags={"pet"},
	 *     @SWG\Parameter(
	 *         name="status",
	 *         in="query",
	 *         description="Status values that need to be considered for filter",
	 *         required=true,
	 *         type="array",
	 *         @SWG\Items(
	 *             type="string",
	 *             enum={"available", "pending", "sold"},
	 *             default="available"
	 *         ),
	 *         collectionFormat="multi"
	 *     ),
	 *     @SWG\Response(
	 *         response=200,
	 *         description="successful operation",
	 *         @SWG\Schema(
	 *             type="array",
	 *             @SWG\Items(ref="#/definitions/Pet")
	 *         ),
	 *     ),
	 *     @SWG\Response(
	 *         response="400",
	 *         description="Invalid status value",
	 *     ),
	 *     security={
	 *       {"petstore_auth": {"write:pets", "read:pets"}}
	 *     }
	 * )
	 * 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('swagger.index', [
			'swaggerFilePath' => public_path() . '/swagger-uiswagger.json'
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
