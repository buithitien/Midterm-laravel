@extends('layouts.mainLayouts')
@section("title", "Create Food")
@section("content")
    @section("actionForm", route("foods.store"))
    @include("pages.form")
@endsection
