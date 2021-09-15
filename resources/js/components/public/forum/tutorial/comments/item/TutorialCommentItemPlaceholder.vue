<template>
	<div class="d-flex mb-2 w-100">
		<div class="pr-3 pt-2">
			<v-skeleton-loader type="image" width="30" height="30" class="rounded-xl"></v-skeleton-loader>
		</div>
		<div class="grow-1 w-100" style="min-width: 0px">
			<v-card rounded="xl" color="grey lighten-5" flat>
				<v-card-text>
					<v-skeleton-loader type="text" width="100"></v-skeleton-loader>
					<v-skeleton-loader type="paragraph"></v-skeleton-loader>
				</v-card-text>
			</v-card>
			<div class="pt-2 d-flex px-2">
				<div class="mr-2">
					<v-skeleton-loader type="text" width="12"></v-skeleton-loader>
				</div>
				<div class="mr-2">
					<v-skeleton-loader type="text" width="12"></v-skeleton-loader>
				</div>
				<div class="mr-2">
					<v-skeleton-loader type="text" width="12"></v-skeleton-loader>
				</div>
				<div class="mr-2">
					<v-skeleton-loader type="text" width="12"></v-skeleton-loader>
				</div>
				<v-spacer></v-spacer>
				<div class="mr-2">
					<v-skeleton-loader type="text" width="12"></v-skeleton-loader>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	props: {
	},
	computed: {
	}
}
</script>