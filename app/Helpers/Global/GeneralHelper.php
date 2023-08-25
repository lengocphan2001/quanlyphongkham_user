<?php

use Carbon\Carbon;

if (!function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'DashCore');
    }
}

if (!function_exists('appDescription')) {
    /**
     * Helper to grab the application description.
     *
     * @return mixed
     */
    function appDescription()
    {
        return config('app.desc', 'Premium Template and Starter Kit for Laravel powered Apps');
    }
}

if (!function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     *
     * @return Carbon
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (!function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        return 'frontend.index';
    }
}

if (!function_exists('strLeft')) {
    function strLeft($str, $length)
    {
        return substr($str, 0, $length);
    }
}

if (!function_exists('strRight')) {
    function strRight($str, $length)
    {
        return substr($str, -$length);
    }
}

if (!function_exists('generateRandomString')) {
    function generateRandomString($length = 10)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('trimString')) {
    function trimString($string, $repl, $limit)
    {
        if (strlen($string) > $limit) {
            return substr($string, 12, $limit) . $repl;
        } else {
            return $string;
        }
    }
}

if (!function_exists('toSlug')) {
    function toSlug($str)
    {
        if (!$str) return '';
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D' => 'Đ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );

        foreach ($unicode as $nonUnicode => $uni) {
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }

        $uniqueString = generateRandomString(6);

        $str .= ('-' . $uniqueString);
        return strtolower(preg_replace(
            array('/[^a-zA-Z0-9\s-]/', '/[\s-]+|[-\s]+|[--]+/', '/^[-\s_]|[-_\s]$/'),
            array('', '-', ''),
            strtolower($str)));
    }
}

if (!function_exists('formatNumber')) {
    function formatNumber($num)
    {
        return number_format($num);
    }
}
