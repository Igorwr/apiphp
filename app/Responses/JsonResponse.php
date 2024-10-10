<?php

namespace App\Responses;

use Illuminate\Http\Response;

class JsonResponse {
    public static function sucess(?string $massage = null, mixed $data = null )
    {
        return response() -> json([
            'message' => $massage,
            'data'=> $data,
            'code' => Response::HTTP_OK //ou 200
        ], Response::HTTP_OK);
    }

    public static function error(string $massage, int $Httpcode)
    {
        {
            return response() -> json([
                'message' => $massage,
                'code' => $Httpcode
            ], $Httpcode);
        }
    }
}

?>

