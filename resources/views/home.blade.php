@extends('layouts.app')

@section('content')
	<main class="content">
		<div class="container py-5">
			<div class="row">
				<div class="col-sm-0 main">
					<h3 id="startwithbasmalahandendwithhamdalah">{{ $greetings }}</h3>

					<p>{{ $title }}</p>

					<p><img src="https://images.unsplash.com/photo-1515248137880-45e105b710e0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEzMjQ5fQ&s=8f78f0d809976c9e2b946f93062e79c6"
							class="mb-4 rounded" /></p>
				</div>

				<div class="col-sm-4 sidebar">
					<h4></h4>


				</div>
			</div>
		</div>

	</main>
@endsection
