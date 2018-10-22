<template>
	<div class="card-body">
		<div class="card">
			<div class="card-header bg-dark text-white">
				# {{ this.post.id }} - <a class="post-link" :href="path(this.post)">{{ this.post.title }}</a>
			</div>

			<div class="card-body">
				<li>Auther: {{ this.post.user.name }}</li>
			</div>

			<div class="card-footer">
				<span class="float-left">Last Updated Since: {{ this.post.updated_at }}</span>
				<button type="button" class="btn btn-success float-right" @click="approve(post)">Approve</button>
			</div>
		</div>
		<br>
	</div>	
</template>

<script>
	export default {
		props: ['post'],
		methods: {
			path(post) {
				return `/posts/${post.created_at}/${post.slug}`
			},
			approve(post) {
				axios.post('/admin/posts/' + post.id + '/approve')
				.then(resp => {
					this.$emit('approved');
				});

					$(this.$el).fadeOut(300, () => {
						flash('The post has been approved.');
					});
			}
		}
	}
</script>


<style>
	.post-link {
		color: white;
	}

	.post-link:hover {
		color: white;
	}
</style>