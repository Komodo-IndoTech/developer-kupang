<template>
	<v-app-bar app 
		class="back-color" 
		:class="[$vuetify.breakpoint.width <= 600 ? 'shadow-lg' : 'shadow']"
		:style="{
			zIndex: notification && $vuetify.breakpoint.width <= 600 ? 10 : null
		}"
		fixed 
		:color="$vuetify.theme.dark ? null : 'transparent-light'" 
		clipped-right 
		:hide-on-scroll="$vuetify.breakpoint.width > 600" 
		:bottom="$vuetify.breakpoint.width <= 600">
		<div class="w-100 d-flex align-center" style="width: 100%">
			<v-container class="py-0 fill-height text-center mx-auto">
				<v-app-bar-nav-icon class="mr-2 x-small" v-if="$vuetify.breakpoint.smAndDown" @click=""></v-app-bar-nav-icon>
				<v-avatar class="mr-3 d-none d-lg-block">
					<v-img src="/img/dk_logo.png"></v-img>
				</v-avatar>
				<v-toolbar-title class="text-xs-center d-none d-lg-block">
					<span>Developer Kupang</span>
				</v-toolbar-title>
				<v-spacer></v-spacer>
				<v-responsive max-width="500" v-if="$vuetify.breakpoint.mdAndUp">
					<v-autocomplete
						width="$vuetify.breakpoint.smAndDown ? 64px : 300px"
						dense
						solo-inverted
						persistent-hint
						rounded
						flat
						hide-details
						label="Temukan disini..."
						append-icon="mdi-magnify"/>
				</v-responsive>
				<v-spacer></v-spacer>
				<v-btn
					icon
					small
					@click=""
					v-if="$vuetify.breakpoint.smAndDown">
					<v-icon>mdi-magnify</v-icon>
				</v-btn>
				<v-badge color="teal" :content="1" dot bottom offset-x="15" offset-y="15" :value="1 > 0">
					<v-btn
						icon
						class="ml-3 no-animation-on-hover -r"
						link
						@click="$emit('set-notification', !notification)">
						<v-icon :class="{ 'ringin-bell': true }">mdi-bell</v-icon>
					</v-btn>
				</v-badge>
				<template>
					<menu-tooltip v-if="$vuetify.breakpoint.width <= 600" label="Masuk" :icons_count="1">
						<v-btn icon @click="openLoginDialog()">
							<v-icon>mdi-login-variant</v-icon>
						</v-btn>
					</menu-tooltip>
					<v-btn text class="ml-3 px-4" @click="openLoginDialog()" v-else>
						Masuk
					</v-btn>
				</template>
			</v-container>
		</div>
	</v-app-bar>
</template>
<script>
import { mapActions, mapMutations } from 'vuex'
import MenuTooltip from '../dummy/MenuTooltip.vue'
export default {
  components: { MenuTooltip },
	props: {
		notification: {
			type: Boolean,
			default: false
		}
	},
	methods: {
		...mapActions({
			openLoginDialog: 'auth/login/dialog/open'
		}),
	}
}
</script>