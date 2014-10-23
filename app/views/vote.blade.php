@extends('common.layout')
@section('addCss')
<link href="{{{asset('/assets/css/sample.css')}}}" rel="stylesheet">
@stop
@include('common.header')
@section('content')
<body>
    <h1>Hello</h1>
    <div>コンテンツ</div>
@stop
@section('addJs')
<script type="text/javascript" src="{{{asset('/assets/js/sample.js')}}}"></script>
@stop
@include('common.footer')

