<?php

/**
 * @SWG\Swagger(
 *     basePath="/my-app",
 *     host="localhost",
 *     schemes={"http"},
 *     produces={"application/json"},
 *     consumes={"application/json"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Akeed Boilerplate",
 *         description="Boilerplate for Slim and Swagger",
 *         @SWG\Contact(name="John Noel Bruno")
 *     ),
 *     @SWG\Definition(
 *         definition="errorModel",
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
 */