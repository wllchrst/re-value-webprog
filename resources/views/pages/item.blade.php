@extends('layouts.main-page-layout')

@section('title', 'Home')

@section('page-title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
    @include('components.items.item-view')
@endsection