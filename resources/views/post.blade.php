@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    	<div class="container py-5">
			<div class="row">
                <div class="col-sm-0 main">
					<div id="unique-entry-id-0" class="blog-entry">
						<h1 class="blog-entry-title">{{ $post->title}}</h1>
						<div class="blog-entry-date">{{ $post->created_at }} <span class="blog-entry-category">Author : {{ $post->user->name }}</div>
						<div class="blog-entry-body">{{ $post->body }}
						</div> <br>
                        <span class="blog-read-more"><a href="/blog"> Back to blog</a></span>
					</div>
             </div>
			</div>
		</div>
		
@endsection