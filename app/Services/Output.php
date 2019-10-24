<?php

namespace App\Services;

class Output
{
    /**
     * @param string $msg
     * @param string $data
     * @param string $code
     * @param string $status
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($msg = '成功获取信息！', $data = '', $code = '1000', $status = 'success')
    {
        return $data ? response()->json(['status' => $status, 'code' => $code, 'msg' => $msg, 'data' => $data]) : response()->json(['status' => $status, 'code' => $code, 'msg' => $msg]);
    }

    public static function error($msg = '获取信息失败！', $data = '', $code = '1001', $status = 'error')
    {
        return $data ? response()->json(['status' => $status, 'code' => $code, 'msg' => $msg, 'data' => $data]) : response()->json(['status' => $status, 'code' => $code, 'msg' => $msg]);
    }
}