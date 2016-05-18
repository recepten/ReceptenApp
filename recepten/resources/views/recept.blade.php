@extends('templates.default')


@section('content')

	@foreach($recepten as $recept)
		<h5>{{ $recept->titel }}</h5>
		<p>{{$recept->beschrijving}}</p>
		<p>{{$recept->ingredienten}}</p>

		<p>{{$recept->upvotes}}</p>
	@endforeach
@endsection