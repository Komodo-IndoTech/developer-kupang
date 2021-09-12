<template>
	<v-card rounded="lg" class="mb-3 shadow-lg">
		<v-card-text>
			<div class="d-flex">
				<div>
					{{ Date.now() | date('id-ID', false, true) }}
				</div>
				<v-spacer></v-spacer>
				<div class="pl-3">
					<v-icon>mdi-weather-sunny</v-icon>
				</div>
			</div>
		</v-card-text>
		<v-divider></v-divider>
		<div>
			<div class="d-flex">
				<div class="text--disabled pa-3">
					<v-icon small disabled>mdi-bell</v-icon>
				</div>
				<div>
					<div class="flex-middle jutify-end">
						<slot/>
					</div>
				</div>
			</div>
		</div>
	</v-card>
</template>
<script>
export default {
	props: {
		value: Boolean,
	},
	computed: {
	},
	data() {
		return {
		}
	},
}
</script>