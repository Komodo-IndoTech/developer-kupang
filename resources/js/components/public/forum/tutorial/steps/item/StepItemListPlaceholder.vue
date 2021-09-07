<template>
	<div>
		<v-card rounded="xl" class="mb-2 mb-lg-10 shadow">
			<div class="d-flex justify-space-between w-100">
				<v-card-text>
					<v-skeleton-loader type="heading" width="300"/>
				</v-card-text>
				<v-card-text class="d-flex justify-end">
					<v-skeleton-loader type="text" width="12"/>
				</v-card-text>
			</div>
			<v-card-text>
				<v-skeleton-loader type="paragraph"/>
			</v-card-text>
			<div class="d-flex justify-space-between w-100">
				<v-card-text>
					<v-skeleton-loader type="text" width="12"/>
				</v-card-text>
				<v-card-text class="d-flex justify-end">
					<v-skeleton-loader type="text" width="12"/>
				</v-card-text>
			</div>
		</v-card>
	</div>
</template>
<script>
export default {
}
</script>