<?php 
namespace App\Http\Controllers\Api;

class ResponseBuilder {
    public static function response($status, $message, $data = null) {
        return response()->json(['status' => $status, 'message' => $message, 'data' => $data]);
    }
}

?>