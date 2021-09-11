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
							<v-icon>mdi-bell</v-icon>
						</div>
						<div>
							<div class="flex-middle jutify-end">
								<v-tabs class="rounded-lg fill-height">
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
				<v-btn text title="Tandai telah dibaca semua" icon>
					<v-icon>mdi-bell-check</v-icon>
				</v-btn>
			</v-card-text>
			<v-divider></v-divider>
			<v-card-text class="flex-glow-1 pa-0" style="overflow: auto; max-height: 100%">
				<v-list class="py-0">
					<template v-for="(item, index) in notifications">
						<div :key="item.id" class="">
							<v-list-item link :to="item.link && item.link.type == 'route' ? item.link : null" :href="typeof item.link == 'string' ? item.link : null">
								<!-- make dot -->
								<v-list-item-icon v-if="item.icon && item.icon.name">
									<v-icon :class="item.icon.className" v-text="item.icon.name"/>
								</v-list-item-icon>
								<v-list-item-content>
									<v-list-item-title>
										{{ item.title }}
									</v-list-item-title>
									<v-list-item-subtitle>
										{{ item.body }}
									</v-list-item-subtitle>
								</v-list-item-content>
								<v-list-item-action-text>
									<div>
										{{ item.date }}
									</div>
								</v-list-item-action-text>
								<v-list-item-action>
									<v-icon :color="item.seen_at == null ? 'green' : 'grey'">mdi-circle-small</v-icon>
								</v-list-item-action>
							</v-list-item>
						</div>
						<v-divider
							v-if="index < notifications.length - 1"
							:key="`i${index}`"/>
					</template>
				</v-list>
			</v-card-text>
			<v-divider></v-divider>
			<v-card-text class="d-flex py-2">
				<v-spacer></v-spacer>
				<v-btn text title="Pengaturan Pemberitahuan" icon>
					<v-icon>mdi-cog</v-icon>
				</v-btn>
			</v-card-text>
		</v-card>
	</v-navigation-drawer>
</template>
<script>
export default {
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
		notification_seens() {
			return [0, 1, 2, 3, 4, 5, 6, 7]
			// return this.notifications.map((e, i) => {
			// 	return e.seen_at == null ? i + i : null;
			// })
		}
	},
	data() {
		return {
			notifications: [
				{
					id: 1,
					icon: {
						className: 'hand-wave',
						name: 'mdi-hand-right',
					},
					title: 'Hello world!',
					body: 'Selamat bergabung, {user.name}',
					date: '1d',
					seen_at: null,
				},
				{
					id: 3,
					icon: {
						className: 'hand-wave',
						name: 'mdi-hand-right',
					},
					title: 'Hello world!',
					body: 'Selamat bergabung, {user.name}',
					date: '1d',
					seen_at: null,
				},
				{
					id: 2,
					icon: {
						name: 'mdi-fire',
						className: 'pink--text text--darken-2',
					},
					title: 'Update aplikasi',
					body: 'Kami telah menambahkan fitur baru 🔥',
					date: '1d',
					link: {
						type: 'route',
						name: 'blog',
						params: {
							id: 1,
						},
					},
					seen_at: null,
				},
			],
		}
	}
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