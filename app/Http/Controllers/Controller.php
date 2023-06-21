<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
 * @OA\Info(title="My First API", version="0.1")
 * @OA\PathItem(
 * path="/products/{product_id}"
 * )
*/
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
