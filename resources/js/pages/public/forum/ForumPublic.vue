<template>
	<div class="px-lg-10">
		<v-toolbar flat>
			<v-toolbar-title>
				Forum
			</v-toolbar-title>
			<template #extension>
				<v-tabs>
					<v-tab :to="{ name: 'forum' }" exact>Topik</v-tab>
					<v-tab :to="{ name: 'tutorial' }">Tutorial</v-tab>
					<v-tab :to="{ name: 'tag' }">Tag</v-tab>
				</v-tabs>
			</template>
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