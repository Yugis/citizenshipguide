@extends('layouts.app')

@section('content')
	
	{{-- <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-success text-white">
						Create A Post
					</div>

					<div class="card-body">
						<form action="" method="POST" enctype="multipart/form-data">
							@csrf
							
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="text" name="title" placeholder="Post Title" class="form-control">
							</div>
							<div class="form-group">
								<label for="body">Body:</label>
								<textarea name="body" id="summernote" class="form-control" cols="30" rows="5" placeholder="Lorem ipsum..."></textarea>
							</div>
							<button class="btn btn-success">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<create-post></create-post>
@endsection
