<?php
use Hekmatinasser\Verta\Facades\Verta;

function imageUrl($image)
{
    return env('ADMIN_PANEL_URL') . env('IMAGES_PATH') . $image;
}

function convertNumbersToPersian($number) {
    $englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    return str_replace($englishNumbers, $persianNumbers, $number);
}

function convertToReadableNumber($number)
    {
        if ($number >= 1000000) {
            return round($number / 1000000, 2) . ' میلیون';
        } elseif ($number >= 1000) {
            return round($number / 1000, 2) . ' هزار';
        }
        return $number;
    }


    function getJalaliDate($date)
    {
        return verta($date)->format('Y/m/d');
    }
