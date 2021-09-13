<template>
	<div class="d-flex flex-column colspan-2 px-lg-4">
		<v-card color="" rounded="xl" class="mb-10" flat v-for="i in 1" :key="i" :to="{ name: 'blog.show', params: { username: 'agriedd', blog_slug: 'lorem-ipsum' } }">
			<div class="d-flex w-100">
				<div>
					<v-card-text class="pb-0">
						<div class="d-flex">
							<v-avatar color="grey lighten-2" size="24">
								<img src="https://picsum.photos/24" alt="Vue Logo">
							</v-avatar>
							<div class="pl-3 d-flex flex-column font-weight-medium">
								Lorem, ipsum dolor.
							</div>
						</div>
					</v-card-text>
					<v-card-title class="pb-0">
						<span class="text-h5 font-weight-black">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
					</v-card-title>
					<v-card-text class="pt-0 pb-1">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Est officia harum officiis ut facilis quasi, fugit dolore necessitatibus tempore dolores.
					</v-card-text>
					<v-card-text class="pt-0 d-flex">
						<div>
							<div class="content-middle">
								{{ Date.now() | date }} 
							</div>
						</div>
						<div>
							<div class="content-middle">
								<v-icon>mdi-circle-small</v-icon>
							</div>
						</div>
						<div>
							<div class="content-middle">
								1 min read
							</div>
						</div>
						<div>
							<div class="content-middle">
								<v-icon>mdi-circle-small</v-icon>
							</div>
						</div>
						<div>
							<div class="content-middle">
								<v-chip small>
									Kategori
								</v-chip>
							</div>
						</div>
						<div class="px-3">
							<div class="content-middle">
								<v-icon x-small>mdi-star</v-icon>
							</div>
						</div>
						<v-spacer></v-spacer>
						<v-btn link icon>
							<v-icon>mdi-bookmark-plus-outline</v-icon>
						</v-btn>
					</v-card-text>
				</div>
				<div class="grow-1">
					<v-card-text class="pl-0">
						<div style="width: 150px;">
							<v-img lazy-src="https://picsum.photos/10" src="https://picsum.photos/150" class="rounded-lg"></v-img>
						</div>
					</v-card-text>
				</div>
			</div>
		</v-card>
		<v-card color="" rounded="xl" class="mb-10" flat v-for="i in 5" :key="i+5">
			<div class="d-flex w-100">
				<div class="grow">
					<div style="width: 100%">
						<div class="px-4" style="max-width: 250px">
							<v-skeleton-loader type="text"></v-skeleton-loader>
						</div>
						<v-skeleton-loader type="card-heading"></v-skeleton-loader>
						<div class="px-4">
							<v-skeleton-loader type="text"></v-skeleton-loader>
						</div>
						<div class="px-4">
							<v-skeleton-loader type="sentences"></v-skeleton-loader>
						</div>
					</div>
				</div>
				<div>
					<v-card-text class="pl-0">
						<div style="width: 150px; height: 150px">
							<v-skeleton-loader type="image" max-height="150px"></v-skeleton-loader>
						</div>
					</v-card-text>
				</div>
			</div>
		</v-card>
	</div>
</template>
<script>
export default {
	
}
</script>