<template>
	<div>
		<div class="d-flex">
			<div class="px-3">
				<div class="flex-middle">
					<v-icon>mdi-pin-outline</v-icon>
				</div>
			</div>
			<v-subheader class="font-weight-bold text-uppercase">
				Blog Pilihan
			</v-subheader>
		</div>
		<div class="d-grid-pilihan-blog px-lg-4">
			<v-card color="" rounded="xl" flat v-for="i in 1" :key="i">
				<div class="d-flex w-100">
					<div>
						<v-card-text class="pr-0 pt-3">
							<span class="text-h4 font-weight-black grey--text text--lighten-3">
								0{{ i }}
							</span>
						</v-card-text>
					</div>
					<div>
						<v-card-text class="pb-0">
							<div class="d-flex">
								<v-avatar color="grey lighten-2" size="24">
									<img src="https://picsum.photos/24" alt="Vue Logo">
								</v-avatar>
								<div class="pl-3 d-flex flex-column">
									Lorem, ipsum dolor.
								</div>
							</div>
						</v-card-text>
						<v-card-text class="py-2">
							<span class="font-weight-bold">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio deserunt assumenda cum atque ea officiis molestiae temporibus at tempore velit?
							</span>
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
							<div class="px-3">
								<div class="content-middle">
									<v-icon x-small>mdi-star</v-icon>
								</div>
							</div>
						</v-card-text>
					</div>
				</div>
			</v-card>
			<v-card color="" rounded="xl" flat v-for="i in 1" :key="i">
				<div class="d-flex w-100">
					<div>
						<v-card-text class="pr-0 pt-3">
							<span class="text-h4 font-weight-black grey--text text--lighten-3">
								00
							</span>
						</v-card-text>
					</div>
					<div class="grow">
						<div class="px-4 py-4" style="max-width: 250px">
							<v-skeleton-loader type="text"></v-skeleton-loader>
						</div>
						<div class="px-4 pb-4">
							<v-skeleton-loader type="text@2"></v-skeleton-loader>
						</div>
						<div class="px-4" style="max-width: 100px">
							<v-skeleton-loader type="text"></v-skeleton-loader>
						</div>
					</div>
				</div>
			</v-card>
			<!-- <v-card color="" rounded="xl" class="mb-10" flat v-for="i in 5" :key="i+5">
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
			</v-card> -->
		</div>
	</div>
</template>
<script>
export default {
	
}
</script>
<style lang="scss" scoped>
	.d-grid-pilihan-blog{
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
		grid-gap: 1rem;
		margin-bottom: 1rem;
	}
</style>