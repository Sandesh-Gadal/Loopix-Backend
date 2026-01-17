<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HttpResponses
{
    /**
     * Standard Success Response
     */
    protected function success($data, string $message, int $code = 200): JsonResponse
    {
        return response()->json([
            'status'  => 'Success',
            'message' => $message,
            'data'    => $data,
        ], $code);
    }

    /**
     * Standard Error Response
     */
    protected function error($data, string $message, int $code): JsonResponse
    {
        return response()->json([
            'status'  => 'Error has occurred...',
            'message' => $message,
            'data'    => $data,
        ], $code);
    }
}
