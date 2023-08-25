<?php

if (!function_exists('successResponse')) {
    /**
     * Helper to build the success response
     *
     * @return mixed
     */
    function successResponse($data, $message = null)
    {
        return response()->json(array('status' => 'success', 'data' => $data, 'message' => $message));
    }
}


if (!function_exists('failureResponse')) {
    /**
     * Helper to build the success response
     *
     * @return mixed
     */
    function failureResponse($errorCode, $message = '')
    {
        return response()->json(array('status' => 'error', 'data' => null, 'message' => $message), $errorCode);
    }
}
