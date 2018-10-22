<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-success text-white">
						Create A Post
					</div>

					<div class="card-body">
						<div class="form-group">
							<label for="title">Title:</label>
							<input type="text" name="title" placeholder="Post Title" class="form-control" v-model="title">
						</div>
						<div class="form-group">
							<label for="body">Body:</label>
							<textarea name="body" id="summernote" class="form-control" cols="30" rows="5" placeholder="Lorem ipsum..." v-model="body"></textarea>
						</div>
					</div>
					<div class="card-footer d-flex">
						<button class="btn btn-success" @click="submit" :disabled="disabled">Submit</button>
						<center class="flex-grow-1"><div v-if="loading" class="spinner"></div></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data: function() {
			return {
				title: '',
				body: '',
				loading: false,
			}
		},
		computed: {
			disabled: function() {
				return this.title.length == 0 || this.body.length == 0
			}
		},
		methods: {
			submit() {
				this.loading = true
				axios.post('/posts', {
					title: this.title,
					body: this.body
				})
				.then( (resp) => {
					this.loading = false
					flash('Your post was created!')
				})
			}
		}
	}
</script>
