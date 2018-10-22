<template>
	<div class="container">
		<div class="row d-flex flex-column">
			<div class="card">
				<div class="card-header bg-info text-white text-center">
					Pending Posts
				</div>
				<div v-if="! loading">
					<div v-if="posts.length > 0">
						<pendingPost @approved="postApproved" v-for="post in posts" :post="post" :key="post.id"></pendingPost>
					</div>
					<div class="card-body" v-else v-cloak>
						There are no pending posts.
					</div>
				</div>
				<center class="card-body" v-if="loading">
					<div class="spinner"></div>
				</center>
			</div>
		</div>
	</div>
</template>

<script>
	import pendingPost from './PendingPost.vue'
	export default {
		components: { pendingPost },

		data: function() {
			return {
				posts: [],
				loading: true,
			}
		},
		created() {
			this.getPosts();
		},
		methods: {
			getPosts() {
				axios.get('/api/pending/posts')
				.then((resp) => {
					this.posts = resp.data
					this.loading = false
				})
			},
			postApproved() {
				this.getPosts();
			}
		}
	}
</script>

<style>
	[v-cloak] { display: none; }
</style>