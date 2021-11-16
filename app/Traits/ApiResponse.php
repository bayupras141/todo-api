<?php

//create ApiResponse trait
namespace App\Traits;

trait ApiResponse
{
    // create a method to return a success response
    public function apiSuccess($data, $code = 200, $message = null)
    {
        return response()->json([
            'data' => $data, 
            'message' => $message,
        ], $code);
    }

    // create a method to return a error response
    public function apiError($errors, $code, $message = null)
    {
        return response()->json([
            'errors' => $errors,
            'message' => $message,
        ], $code);
    }
}