<template>
	<v-card rounded="lg">
		<div class="d-flex pa-2">
			<v-btn icon title="Salin">
				<v-icon>mdi-content-copy</v-icon>
			</v-btn>
			<!-- moderator -->
			<v-btn icon title="Hapus">
				<v-icon>mdi-delete</v-icon>
			</v-btn>
		</div>
		<v-divider></v-divider>
		<v-list-item link>
			<v-list-item-icon>
				<v-icon>mdi-bug</v-icon>
			</v-list-item-icon>
			<v-list-item-content>
				<v-list-item-title>
					Laporkan
				</v-list-item-title>
			</v-list-item-content>
		</v-list-item>
	</v-card>
</template>
<script>
export default {
	
}
</script>