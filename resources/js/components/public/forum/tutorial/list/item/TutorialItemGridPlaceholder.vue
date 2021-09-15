<template>
	<v-card class="shadow" outlined rounded="lg" style="position: relative">
		<v-skeleton-loader height="150" width="100%" type="image"/>
		<v-card-text class="pb-1">
			<v-skeleton-loader width="100%" type="text"/>
		</v-card-text>
		<v-card-text class="py-1">
			<v-skeleton-loader width="100%" type="text@2"/>
		</v-card-text>
		<v-card-text class="py-0">
			<v-skeleton-loader width="100%" max-width="50" type="text"/>
		</v-card-text>
		<v-card-text class="pt-0 d-flex justify-space-between">
			<div>
				<div class="flex-middle">
					<v-skeleton-loader width="100" type="text"/>
				</div>
			</div>
			<div>
				<v-skeleton-loader width="24" height="24" type="image"/>
			</div>
		</v-card-text>
	</v-card>
</template>
<script>
export default {
}
</script>