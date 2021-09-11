<template>
	<div class="pt-0 d-flex px-2">
		<div class="mr-2">
			<div class="flex-middle">
				<small>
					2d ago
				</small>
			</div>
		</div>
		<div class="mr-2">
			<v-btn icon>
				<v-icon small>mdi-arrow-up-bold-outline</v-icon>
			</v-btn>
		</div>
		<div class="mr-2">
			<v-btn icon>
				<v-icon small>mdi-arrow-down-bold-outline</v-icon>
			</v-btn>
		</div>
		<div class="mr-2">
			<v-btn icon>
				<v-icon small>mdi-reply-outline</v-icon>
			</v-btn>
		</div>
		<v-spacer></v-spacer>
		<slot/>
	</div>
</template>
<script>
export default {
	
}
</script>