<template>
	<div class="px-lg-10">
		<v-toolbar flat>
			<v-tabs slider-size="5">
				<v-tab :to="{ name: 'blog' }" exact>Blog</v-tab>
				<v-tab :to="{ name: 'event' }">Event</v-tab>
				<v-tab>Diarsipkan</v-tab>
				<v-tabs-slider style="border-radius: .5rem .5rem 0 0; max-width: 2rem; margin: 0 auto" color="primary"></v-tabs-slider>
			</v-tabs>
		</v-toolbar>
		<v-divider></v-divider>
		<router-view></router-view>
	</div>
</template>
<script>
export default {
	created(){}
}
</script>