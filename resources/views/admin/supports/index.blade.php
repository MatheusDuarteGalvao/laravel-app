@extends('admin.layouts.app')

@section('title', 'Supports')

@section('header')
@include('admin.supports.partials.header')
@endsection

@section('content')
@include('admin.supports.partials.content')
@endsection

<x-pagination
    :paginator="$supports"
    :appends="$filters"
/>
