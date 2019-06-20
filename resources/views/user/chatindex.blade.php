extends('layout.footer')

@section('contenttt')
@extends('layout.header_reguser')
@section('contentt')

<div class="container">
    <div class="row justify-content-center">
        <chat-component></chat-component>
        <user-component></user-component>
    </div>
</div>
@endsection

@endsection
