<?php 

	namespace Module\Controllers;


	class TestController{


    /**
     * @SWG\Get(path="/test",
     *   tags={"test"},
     *   summary="test get",
     *   description="echo test",
     *   operationId="getTest",
     *   produces={"application/json"},
     *   parameters={},
     *   @SWG\Response(
     *     response=200,
     *     description="successful operation",
     *     @SWG\Schema(
	 *         @SWG\Property(
	 *             property="code",
	 *             type="int",
	 *             default=1
	 *         ),
	 *         @SWG\Property(
	 *             property="message",
	 *             type="string",
	 *             default="test"
	 *         ),
     *       type="object",
     *       additionalProperties={
     *         "type":"integer",
     *         "format":"int32"
 	 *
     *       }
     *     )
     *   )
     * )
     */
		public function get($req, $res, $arg)
		{
			return $res->withJSON(["code" => "1", "message" => "test"]);
		}


	    /**
	     * @SWG\POST(path="/test",
	     *   tags={"test"},
	     *   summary="Create Test",
	     *   description="This will just echo 'test'",
	     *   operationId="test",
	     *   produces={"application/json"},
	     *   @SWG\Parameter(
	     *     in="body",
	     *     name="body",
	     *     description="response test",
	     *     required=false,
	     *     @SWG\Schema(
		 *         @SWG\Property(
		 *             property="name",
		 *             type="string",
		 *             default="test"
		 *         ))
	     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="successful operation",
     *     @SWG\Schema(
	 *         @SWG\Property(
	 *             property="code",
	 *             type="int",
	 *             default=1
	 *         ),
	 *         @SWG\Property(
	 *             property="message",
	 *             type="string",
	 *             default="test"
	 *         ),
     *       type="object",
     *       additionalProperties={
     *         "type":"integer",
     *         "format":"int32"
 	 *
     *       }
     *     )
     *   )
	     * )
	     */

		public function post($req, $res, $arg)
		{
			$param = $req->getParsedBody();

			if(isset($param['name'])){
				return $res->withJSON(["code" => "1", "message" => "hello, ".$param['name']."!"]);
			}


			return $res->withJSON(["code" => "0", "message" => "Invalid Input"]);
		}
	}