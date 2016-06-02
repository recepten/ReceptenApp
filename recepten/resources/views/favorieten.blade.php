@extends('templates.default')


@section('content')
<div class="container">
			@if (session('status'))
    				<div class="alert alert-success">
        				{{ session('status') }}
    				</div>
				@endif

	@foreach($recepten as $recept)

	<a href="{{ route('recept.index', $recept->receptId ) }}">
		<div class="recept col-md-12">
		<div class="left">
			<div class="foto">(foto)</div>
		</div>
			<div class="right">
				<h5 class="title">{{ $recept->titel }}</h5>
				<p class="upvotes">Upvotes: {{$upvotes= \DB::table('upvotes')->where('receptId', $recept->receptId)->count()}}</p>

				<a href="{{ route('favorietverwijderenlijst.index' , $recept->receptId) }}"><button id="favorietverwijderen" name="favorietverwijderen" class="btn btn-primary">
				favoriet verwjideren</button></a>

			</div>
		</div>
	</a>
	@endforeach

</div>
@endsection
