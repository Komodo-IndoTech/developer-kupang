<template>
	<v-bottom-navigation app v-if="$vuetify.breakpoint.width <= 600" hide-on-scroll color="primary">
		<v-btn flat>
			<v-icon>mdi-menu</v-icon>
		</v-btn>
		<v-spacer></v-spacer>
		<v-btn flat href="/">
			<span>
				Beranda
			</span>
			<v-icon>mdi-home</v-icon>
		</v-btn>
		<v-btn flat href="/">
			<span>
				Blog
			</span>
			<v-icon>mdi-newspaper</v-icon>
		</v-btn>
	</v-bottom-navigation>
</template>
<script>
export default {

}
</script>