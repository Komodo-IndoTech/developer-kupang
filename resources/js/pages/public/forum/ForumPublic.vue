<template>
	<div>
		<v-toolbar flat>
			<v-tabs align-with-title>
				<v-tab :to="{ name: 'forum' }">Pertanyaan</v-tab>
				<v-tab :to="{ name: 'tag' }">Tag</v-tab>
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