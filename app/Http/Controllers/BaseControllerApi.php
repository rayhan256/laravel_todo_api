<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseControllerApi extends Controller {
    //

    public function sendResponse($res, $message) {
        $response = [
            'success' => 200,
            'data' => $res,
            'message' => $message
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404) {
    	$response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
