<template>
	<v-card color="" rounded="xl">
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
</template>
<script>
export default {
}
</script>