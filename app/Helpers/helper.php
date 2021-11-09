<?php

use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;
use Stichoza\GoogleTranslate\GoogleTranslate;


if (!function_exists('currencyToUS')) {
    function currencyToUS($value)
    {
        $value = str_replace('.', '', $value);
        $value = str_replace(',', '.', $value);
        return is_numeric($value) ? $value : 0.00;
    }
}

if (!function_exists('format_currency')) {
    function format_currency($value)
    {
        if (session()->get('language') === 'es') {
            return number_format($value, 2, ',', '.');
        } else if (session()->get('language') === 'en') {
            return number_format($value, 2, ',', '.');
        } else {
            return "R$" . number_format($value, 2, ",", ".");
        }
    }
}


if (!function_exists('currency_month')) {
    function currencyMonth($data)
    {
        return Carbon::createFromFormat('Y-m-d', $data)->format('m');
    }
}

if (!function_exists('currency_year')) {
    function currencyYear($data)
    {
        return Carbon::createFromFormat('Y-m-d', $data)->format('Y');
    }
}

if (!function_exists('currency_year_gratitudes')) {
    function currencyYearGratitudes($data)
    {
        return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('Y');
    }
}

if (!function_exists('formatDateToView')) {
    function formatDateToView($data)
    {
        //return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('d/m/Y');
        return date( 'd/m/Y' , strtotime($data));
    }
}

if (!function_exists('formatHourToView')) {
    function formatHourToView($data)
    {
        return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('H:m:s');
    }
}

if (!function_exists('translator')) {
    function translator($value, $lang)
    {

        try {
            // $tr = new GoogleTranslate('fr'); // Traduz para 'en' do idioma detectado automaticamente por padrão
            // $tr->setSource('pt'); // Traduzir do inglês
            // $tr->setSource(); // Detecta o idioma automaticamente
            // $tr->setTarget('en'); // Traduzir para georgiano
            // return $tr->translate('Word');
            // return GoogleTranslate::trans($value, $lang);
            return $value;
        } catch (\Exception $th) {
            return $value;
        }
    }
}



if (!function_exists('formatHourMinuteToView')) {
    function formatHourMinuteToView($data)
    {
        return Carbon::createFromFormat('H:m:s', $data)->format('H:m');
    }
}

if (!function_exists('formatDatetimeToView')) {
    function formatDatetimeToView($data)
    {

        return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('d/m/Y H:i:s');
    }
}

if (!function_exists('formatDatetimeToHourView')) {
    function formatDatetimeToHourView($data)
    {

        if (session()->get('language') === 'es') {
            return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('H:i');
        } else if (session()->get('language') === 'en') {
            return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('H:i');
        } else {
            return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('H:i');
        }
    }
}

if (!function_exists('formatDateTicketToView')) {
    function formatDateTicketToView($data)
    {
        if (session()->get('language') === 'es') {
            return date_format($data, "d/m/Y");
            // return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('d/m/Y');
        } else if (session()->get('language') === 'en') {
            return date_format($data, "Y-m-d");
            // return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('Y-m-d');
        } else {
            return date_format($data, "d/m/Y");
            // return Carbon::createFromFormat('Y-m-d H:m:s', $data)->format('d/m/Y');
        }
    }
}

function calc_age($data_nasc)
{
    $date = new DateTime($data_nasc);
    $interval = $date->diff(new DateTime(date("Y-m-d")));
    return $interval->format('%Y Anos, %m Meses e %d Dias');
}

function identificator()
{
    return date('smh');
}

function dateExtensive($date)
{

    if (session()->get('language') === 'es') {
        setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
        date_default_timezone_set('Europe/Madrid');
        return ucwords(strftime('%A, %d del %B del %Y', strtotime('today')));
    } else if (session()->get('language') === 'en') {
        setlocale(LC_TIME, 'en_US', 'en_US.UTF-8', 'en_US.UTF-8', 'Inglish');
        date_default_timezone_set('America/Los_Angeles');
        return ucwords(strftime('%A, %B %d, %Y', strtotime('today')));
    } else {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'Portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        return ucwords(utf8_encode(strftime('%A, %d  de %B de %Y', strtotime('today'))));
    }
}

if (!function_exists('formatPhoneToView')) {
    function formatPhoneToView($data)
    {
        if(strlen($data) == 10){
            $new = substr_replace($data, '(', 0, 0);
            $new = substr_replace($new, '9', 3, 0);
            $new = substr_replace($new, ')', 3, 0);
        }else{
            $new = substr_replace($data, '(', 0, 0);
            $new = substr_replace($new, ')', 3, 0);
        }
        return $new;
    }
}
