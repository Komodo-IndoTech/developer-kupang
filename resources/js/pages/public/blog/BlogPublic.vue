<template>
	<div class="px-lg-10">
		<v-toolbar flat>
			<v-tabs>
				<v-tab :to="{ name: 'blog' }">Blog</v-tab>
				<v-tab :to="{ name: 'event' }">Event</v-tab>
				<v-tab>Diarsipkan</v-tab>
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