@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')


@extends('errors::layout')
@section('title', '404')
@endsection
@section('message', 'página no encontrada :(')
@endsection


@endsection
@section('footer')
	@parent
@endsection