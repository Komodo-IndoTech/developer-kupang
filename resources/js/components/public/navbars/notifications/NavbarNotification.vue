<template>
	<v-navigation-drawer v-model="notification" 
		width="400" 
		right 
		mobile-breakpoint="600" 
		clipped style="z-index: 10" 
		class="notification-drawer pa-3 elevation-0"
		overlay-opacity=".75" 
		overlay-color="black"
		floating 
		bottom 
		fixed 
		temporary 
		:style="{'max-height': $vuetify.breakpoint.width <= 600 ? `calc(100vh - ${$vuetify.application.bottom}px)` : `calc(100vh + 0)`}">
		<template #prepend>
			<navbar-notification-header v-model="notification">
				<v-tabs class="rounded-lg fill-height" v-model="tab">
					<v-tab>Umum</v-tab>
					<v-tab>Log</v-tab>
					<v-tab>Aplikasi</v-tab>
				</v-tabs>
			</navbar-notification-header>
		</template>
		<v-card rounded="lg" class="d-flex flex-column shadow-lg" style="max-height: 100%">
			<v-card-text class="d-flex py-2">
				<div>
					<div class="flex-middle">
						Notifikasi
					</div>
				</div>
				<v-spacer></v-spacer>
				<v-btn title="Segarkan pemberitahuan" icon @click="refreshNotification">
					<v-icon>mdi-refresh</v-icon>
				</v-btn>
				<v-fab-transition>
					<v-btn title="Tandai telah dibaca semua" icon @click="checkAllNotification" v-if="tab == 0" :key="tab">
						<v-icon>mdi-bell-check</v-icon>
					</v-btn>
				</v-fab-transition>
			</v-card-text>
			<v-divider></v-divider>
			<v-card-text class="flex-glow-1 pa-0" style="overflow: auto; max-height: 100%">
				<v-expand-transition>
					<navbar-notification-list v-if="tab == 0"/>
					<navbar-notification-list-log v-else-if="tab == 1"/>
					<!-- TODO tambah notifikasi tab aplikasi -->
					<empty-content v-else/>
				</v-expand-transition>
			</v-card-text>
			<v-divider></v-divider>
			<v-card-text class="d-flex py-2">
				<!-- TODO link ke halaman pemberitahuan -->
				<v-btn text link>
					Semua Pemberitahuan
				</v-btn>
				<v-spacer></v-spacer>
				<!-- TODO link ke halaman pengaturan jika sudah login -->
				<v-btn title="Pengaturan Pemberitahuan" icon disabled>
					<v-icon>mdi-cog</v-icon>
				</v-btn>
			</v-card-text>
		</v-card>
	</v-navigation-drawer>
</template>
<script>
import EmptyContent from '../../dummy/EmptyContent.vue';
import NavbarNotificationList from './list/NavbarNotificationList.vue';
import NavbarNotificationListLog from './list/NavbarNotificationListLog.vue';
import NavbarNotificationHeader from './NavbarNotificationHeader.vue';
export default {
  	components: { NavbarNotificationList, NavbarNotificationListLog, EmptyContent, NavbarNotificationHeader },
	props: {
		value: Boolean,
	},
	computed: {
		notification: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			},
		},
	},
	data() {
		return {
			tab: 0,
		}
	},
	methods: {
		checkAllNotification() {
			// TODO: Check all notification
		},
		refreshNotification() {
			// TODO: Refresh notification
		},
	},
}
</script>
<style lang="scss">
	.notification-drawer{
		background: unset!important;

		.v-navigation-drawer__content{
			overflow: hidden!important;
		}
	}
	// make media screen for 600px and below
	@media only screen and (max-width: 600px) {
		.notification-drawer{
			bottom: auto!important;
			bottom: unset!important;
		}
	}
</style>