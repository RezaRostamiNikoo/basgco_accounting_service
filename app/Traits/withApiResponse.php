<?php

namespace App\Traits;

trait withApiResponse
{
    private function response($success = false, $data = null, $status = 400)
    {
        return response()->json([
            "success" => $success,
            "data" => $data,
        ])->setStatusCode($status);
    }


    public function success($data = null)
    {
        return $this->response(true, $data, 200);
    }

    public function failed($data = null)
    {
        return $this->response(false, $data, 400);
    }
}
