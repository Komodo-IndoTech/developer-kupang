<template>
	<v-app-bar class="rounded-pill ma-3 shadow-lg" bottom fixed floating :color="'transparent-light'" 
		style="right: unset"
		:style="{ left: `${$vuetify.application.left}px`, bottom: `${$vuetify.application.bottom}px` }">
		<div class="pr-2">
			<div class="flex-middle">
				<v-avatar size="32" color="grey lighten-4">
					<v-img src="https://picsum.photos/30"></v-img>
				</v-avatar>
			</div>
		</div>
		<menu-pengembangan dark :label="'💔'" :icons_count="1">
			<v-btn icon>
				<v-icon>mdi-heart-outline</v-icon>
			</v-btn>
		</menu-pengembangan>
		<menu-pengembangan dark>
			<v-btn icon>
				<v-icon>mdi-comment-outline</v-icon>
			</v-btn>
		</menu-pengembangan>
		<v-btn icon>
			<v-icon>mdi-bookmark-outline</v-icon>
		</v-btn>
	</v-app-bar>
</template>
<script>
import MenuPengembangan from "../../dummy/MenuPengembangan.vue"

export default {
	components: { MenuPengembangan },
}
</script>