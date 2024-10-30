<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('user/asset/css/manage.css')}}">
    <link rel="stylesheet" href="{{asset('user/asset/css/posting_list.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('user/asset/image/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('user/asset/fonts/fontawesome-free-6.6.0-web/css/all.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{asset('user/asset/css/style.css')}}"> --}}
    @if(Auth::user())
        <title>#{{Auth::user()->id + 123456}} - Phòng Trọ 123 - Phongtro123.com</title>
    @else 
        <title>Phongtro123.com</title>
    @endif
    <script type="text/javascript">
        base_url = "https://phongtro123.com";
        base_api_url = "https://phongtro123.com/api";
        get_district_ajax = {ajaxurl: '#'};
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60724554-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-60724554-1');
    </script>
    <title>Phongtro123</title> 
</head>