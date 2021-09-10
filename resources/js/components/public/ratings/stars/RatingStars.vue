<template>
	<div>
		<v-icon v-bind="$attrs" :color="color(star)" v-for="(star, i) in stars" :key="i" @click="setRate(star)" @mouseover="setHoverRate(star)" @mouseout="setHoverRate(null)">mdi-star</v-icon>
	</div>
</template>
<script>
export default {
	props: {
		value: Number,
		max: {
			type: Number,
			default: 5
		},
	},
	data() {
		return {
			hover_rate: 0,
		}
	},
	computed: {
		rate: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			}
		},
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
	methods: {
		color(star) {
			let color = 'grey';
			if (this.hover_rate >= star) {
				color = 'blue lighten-2';
			} else if (this.rate >= star) {
				color = 'yellow darken-2';
			} else color ='grey';
			return color;
		},
		setRate(star) {
			this.rate = star;
		},
		setHoverRate(star) {
			this.hover_rate = star;
		},
	},
}
</script>