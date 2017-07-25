@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<div class="col-md-4 list-group">
					@foreach($lessons as $lesson)
						<a href="/lesson/{{ $lesson->id }}" class="list-group-item">{{ $lesson->name }}</a>
					@endforeach
					</div>
					<div class="col-md-8">
						<h2>{{ $lessons[0]->name }}</h2>
						<div style="text-align: center;">
							<iframe src="https://player.vimeo.com/video/153508275?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						<p>{{ $lessons[0]->description }}</p>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
