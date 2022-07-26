<?php
$list = [
            [
                'img' => 'buy-comics-digital-comics.png',
                'text' => 'digital comics'
            ],
            [
                'img' => 'buy-comics-merchandise.png',
                'text' => 'dc merchandise'
            ],
            [
                'img' => 'buy-comics-subscriptions.png',
                'text' => 'subscription'
            ],
            [
                'img' => 'buy-comics-shop-locator.png',
                'text' => 'comic shop locator'
            ],
    ]
?>

@extends('layouts.main_layout')


@section('page_title', 'Home')

@section('page_content')
    @include('partials.slider')
    @include('partials.banner_blue')
@endsection
    