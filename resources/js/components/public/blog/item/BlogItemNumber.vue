<template>
	<v-card color="" rounded="xl" flat>
		<div class="d-flex w-100">
			<div>
				<v-card-text class="pr-0 pt-3">
					<span class="text-h4 font-weight-black grey--text text--lighten-3">
						0{{ index }}
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
</template>
<script>
export default {
	props: {
		value: Object,
		index: Number,
	},
	computed: {
		item: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			},
		},
	}
}
</script>