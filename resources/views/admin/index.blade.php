@extends('layouts.app')

@section('content')

<pending-posts :posts="{{ $pendingPosts }}"></pending-posts>

{{-- <div class="container">
	<div class="row d-flex flex-column">
		<div class="card">
			<div class="card-header bg-info text-white text-center">
				Pending Posts
			</div>
			<div class="card-body">
			@if($pendingPosts->isNotEmpty())
				@foreach($pendingPosts as $post)
				<div class="card">
					<div class="card-header bg-dark text-white">
						# {{ $post->id }} - <a href="{{ $this->path() }}">{{ $post->slug }}</a>
					</div>

					<div class="card-body">
						<li>Auther: {{ $post->user->name }}</li>
					</div>

					<div class="card-footer">
						<span class="float-left">Last Updated Since: {{ $post->updated_at->diffForHUmans() }}</span>
						<button type="button" class="btn btn-success float-right" value="Approve">
					</div>
				</div>
				<br>
				@endforeach
				@else
				There are no pending agents.
				@endif
			</div>
		</div>
	</div>

</div> --}}
@endsection