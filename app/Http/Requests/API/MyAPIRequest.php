<?php

namespace App\Http\Requests\API;

use InfyOm\Generator\Request\APIRequest;
use InfyOm\Generator\Utils\ResponseUtil;
use Illuminate\Contracts\Validation\Validator;
use Response;

class MyAPIRequest extends APIRequest
{
    /**
     * Get the proper failed validation response for the request.
     *
     * @param array $errors
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        return Response::json(static::makeError($errors), 400);
    }

    /**
     * @param string $errors
     * @param array  $data
     *
     * @return array
     */
    public static function makeError($errors, array $data = [])
    {
        $res = [
            'success' => false,
            'errors' => $errors,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }  
}
