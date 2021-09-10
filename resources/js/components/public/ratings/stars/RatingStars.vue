<template>
	<div>
		<v-icon small :color="rating <= star ? 'grey' : 'yellow darken-2'" v-for="(star, i) in stars" :key="i">mdi-star</v-icon>
	</div>
</template>
<script>
export default {
	props: {
		value: Number,
		max: {
			type: Number,
			default: 5
		}
	},
	computed: {
		rating: {
			get() {
				return Math.round(this.value);
			}
		},
		stars: {
			get() {
				return new Array(this.max).fill(0).map((_, index) => index + 1);
			},
		},
	},
}
</script>