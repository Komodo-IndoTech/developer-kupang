<template>
	<v-card rounded="pill" color="blue" class="shadow-lg" link dark>
		<v-card-text class="d-flex px-lg-10 white--text">
			<div>
				<div class="flex-middle">
					Posting Blog
				</div>
			</div>
			<v-scroll-y-transition mode="out-in">
				<div :key="icon_counter">
					<v-icon right v-if="icon_counter == 0">mdi-format-paint</v-icon>
					<v-icon right v-else-if="icon_counter == 1">mdi-note-plus</v-icon>
					<v-icon right v-else-if="icon_counter == 2">mdi-bird</v-icon>
					<v-icon right v-else-if="icon_counter == 3">mdi-notebook-plus</v-icon>
					<v-icon right v-else>mdi-send</v-icon>
				</div>
			</v-scroll-y-transition>
		</v-card-text>
	</v-card>
</template>
<script>
export default {
	name: 'FloatingActionMakeBlog',
	data () {
		return {
			icons_count: 5,
			icon_counter: 0,
		}
	},
	methods: {
		nextIcon(){
			setTimeout(() => {
				this.icon_counter++;
				if(this.icon_counter >= this.icons_count){
					this.icon_counter = 0;
				}
				this.nextIcon();
			}, 5000);
		},
	},
	created(){
		this.nextIcon();
	},
}
</script>