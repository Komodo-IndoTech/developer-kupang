<template>
	<div class="pl-3">
		<div class="d-flex">
			<slot/>
			<v-btn icon>
				<v-icon>mdi-twitter</v-icon>
			</v-btn>
			<v-btn icon>
				<v-icon>mdi-facebook</v-icon>
			</v-btn>
			<v-btn icon>
				<v-icon>mdi-linkedin</v-icon>
			</v-btn>
			<v-btn icon>
				<v-icon>mdi-link</v-icon>
			</v-btn>
			<v-btn icon>
				<v-icon>mdi-bookmark-plus-outline</v-icon>
			</v-btn>
		</div>
	</div>
</template>
<script>
export default {

}
</script>