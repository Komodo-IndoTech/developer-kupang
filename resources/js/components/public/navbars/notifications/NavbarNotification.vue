<template>
	<v-navigation-drawer v-model="notification" width="400" right mobile-breakpoint="600" clipped style="z-index: 10" class="notification-drawer pa-3 elevation-0" overlay-opacity=".25" floating bottom fixed temporary :style="{'max-height': $vuetify.breakpoint.width <= 600 ? '90%' : `calc(100vh + 0)`}">
		<template #prepend>
			<v-card rounded="lg" class="mb-3 shadow-lg">
				<v-card-text>
					<div class="d-flex">
						<div>
							{{ Date.now() | date('id-ID', false, true) }}
						</div>
						<v-spacer></v-spacer>
						<div class="pl-3">
							<v-icon>mdi-weather-sunny</v-icon>
						</div>
					</div>
				</v-card-text>
				<v-divider></v-divider>
				<div>
					<div class="d-flex">
						<div class="text--disabled pa-3">
							<v-icon small disabled>mdi-bell</v-icon>
						</div>
						<div>
							<div class="flex-middle jutify-end">
								<v-tabs class="rounded-lg fill-height" v-model="tab">
									<v-tab>Umum</v-tab>
									<v-tab>Log</v-tab>
									<v-tab>Aplikasi</v-tab>
								</v-tabs>
							</div>
						</div>
					</div>
				</div>
			</v-card>
		</template>
		<v-card rounded="lg" class="d-flex flex-column shadow-lg" style="max-height: 100%" outlined>
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
export default {
  	components: { NavbarNotificationList, NavbarNotificationListLog, EmptyContent },
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
</style>