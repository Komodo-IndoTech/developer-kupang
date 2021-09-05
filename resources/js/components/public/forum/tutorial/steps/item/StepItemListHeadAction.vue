<template>
	<div class="pa-3">
		<v-menu 
			content-class="shadow" 
			offset-y 
			nudge-bottom="12" 
			min-width="250" 
			:close-on-content-click="false">
			<template #activator="{ attrs, on }">
				<v-btn icon style="top: 0px" v-bind="attrs" v-on="on">
					<v-icon small>mdi-dots-vertical</v-icon>
				</v-btn>
			</template>
			<v-card rounded="lg" color="transparent-light">
				<v-list-item link>
					<v-list-item-icon>
						<v-icon>mdi-pencil</v-icon>
					</v-list-item-icon>
					<v-list-item-content>
						<v-list-item-title>
							Ubah
						</v-list-item-title>
					</v-list-item-content>
				</v-list-item>
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
		</v-menu>
	</div>
</template>
<script>
export default {
	
}
</script>