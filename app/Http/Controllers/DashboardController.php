<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/dashboard",
     *     description="Returns dashboard overview.",
     *     summary="Get list of projects",
     *     operationId="api.dashboard.index",
     *     produces={"application/json"},
     *     tags={"Dashboard"},
     *     @SWG\Parameter(
    *         name="Authorization",
    *         in="header",
    *         description="JWT Token",
    *         required=true,
    *         type="string",
    *     ), 
     *     @SWG\Parameter(
    *         name="firstname",
    *         in="path",
    *         type="string",
    *         description="Your first name",
    *     ),
    *     @SWG\Parameter(
    *         name="lastname",
    *         in="query",
    *         type="string",
    *         description="Your last name",
    *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Dashboard overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index(Request $request)
    {
        return response()->json([
            'result'    => [
                'statistics' => [
                    'users' => [
                        'name'  => 'Name',
                        'email' => 'user@example.com'
                    ]
                ],
            ],
            'message'   => '',
            'type'      => 'success',
            'status'    => 0
        ]);

    }

    /**
    * @SWG\Post(
        *     path="/api/dashboardPost",
        *     description="Returns dashboard overview.",
        *     operationId="api.dashboard.index",
        *     produces={"application/json"},
        *     tags={"Dashboard"},
        *     @SWG\Parameter(
        *         name="content-type",
        *         in="header",
        *         description="application/json",
        *         required=true,
        *         type="string",
        *     ),    
        *     @SWG\Parameter(
        *         name="Authorization",
        *         in="header",
        *         description="JWT Token",
        *         required=true,
        *         type="string",
        *     ),    
        *     @SWG\Parameter(
        *         name="body",
        *         in="body",
        *         description="JSON Payload",
        *         required=true,
        *         format="application/json",
        *         @SWG\Schema(
        *             type="object",
        *             @SWG\Property(property="first_name", type="string", example="Monster"),
        *             @SWG\Property(property="last_name", type="string", example="Portable"),
        *             @SWG\Property(property="age", type="integer", example=232323),
        *             @SWG\Property(property="phone", type="string", example="34343243243"),
        *         )
        *     ),
        *     @SWG\Response(
        *         response=200,
        *         description="Dashboard overview.",
        *         @SWG\Schema(
        *             type="object",
        *             @SWG\Property(property="first_name", type="string", example="Monster"),
        *             @SWG\Property(property="last_name", type="string", example="Portable"),
        *             @SWG\Property(property="age", type="integer", example=232323),
        *             @SWG\Property(property="phone", type="string", example="34343243243"),
        *         )
        *     ),
        *     @SWG\Response(
        *         response=401,
        *         description="Unauthorized action.",
        *         @SWG\Schema(
        *             type="object",
        *             @SWG\Property(property="message", type="string", example="Unauthorized"),
        *         )
        *     )
        * )
    */

    public function PostTestResponse(Request $request)
    {
        return response()->json([
            'result'    => [
                'first_name'  => $request["first_name"],
                'last_name' => $request["last_name"],
                'age' => $request["age"],
                'phone' => $request["phone"],
            ],
        ]);

    }

    
}
