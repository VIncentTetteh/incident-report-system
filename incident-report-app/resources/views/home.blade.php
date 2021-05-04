@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50" style="text-align: center; margin-top:20%;">You are welcome {{ auth()->user()->name }}</h1>
    </div>

@endsection
