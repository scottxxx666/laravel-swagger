<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
}

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="L5 OpenApi",
 *      description="L5 Swagger OpenApi description",
 *      @OA\Contact(
 *          email="darius@matulionis.lt"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * 
 * @OA\Get(
 *      path="/projects/{id}",
 *      operationId="getProjectById",
 *      tags={"Projects"},
 *      summary="Get project information",
 *      description="Returns project data",
 *      @OA\Parameter(
 *          name="id",
 *          description="Project id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(
 *              @OA\Property(
 *                  property="metadata",
 *                  type="object",
 *                  description="The product name",
 *                  @OA\Property(
 *                      property="total",
 *                      type="integer",
 *                      example=999,
 *                  ),
 *                  @OA\Property(
 *                      property="id",
 *                      ref="#/components/schemas/product_id",
 *                  ),
 *              ),
 *              @OA\Property(
 *                  property="data",
 *                  type="array",
 *                  @OA\Items(ref="#/components/schemas/user"),
 *              ),
 *          ),
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 *      security={
 *         {
 *             "oauth2_security_example": {"write:projects", "read:projects"}
 *         }
 *      },
 * )
 */

 /**
 * @OA\Schema(
 *   schema="product_id",
 *   type="integer",
 *   format="integer",
 *   description="The unique identifier of a product in our catalog"
 * )
 */
