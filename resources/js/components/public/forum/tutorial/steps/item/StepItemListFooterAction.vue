<template>
	<div class="d-flex justify-space-between">
		<div class="px-3 pb-3">
			<v-hover v-slot="{ hover }">
				<div class="d-flex">
					<v-btn icon style="top: 0px">
						<v-icon small>mdi-history</v-icon>
					</v-btn>
					<div v-if="hover">
						<div class="flex-middle">
							<small>
								terakhir diubah 1menit yang lalu
							</small>
						</div>
					</div>
				</div>
			</v-hover>
		</div>
		<v-spacer></v-spacer>
		<div class="px-3 pb-3">
			<v-btn icon style="top: 0px">
				<v-icon small>mdi-reply</v-icon>
			</v-btn>
		</div>
	</div>
</template>
<script>
export default {
	
}
</script>