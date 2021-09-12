<template>
	<v-list class="py-0">
		<template v-if="false">
			<div class="pa-3">
				<v-card rounded="xl" color="grey lighten-5" flat>
					<v-card-text>
						Pemberitahuan kosong :(
					</v-card-text>
				</v-card>
			</div>
		</template>
		<template v-else-if="true">
			<template v-for="(item, index) in notifications">
				<div :key="item.id" class="">
					<navbar-notification-item :value="item"/>
				</div>
				<v-divider
					v-if="index < notifications.length - 1"
					:key="`i${index}`"/>
			</template>
		</template>
		<template v-else>
			<template v-for="i in 3">
				<navbar-notification-item-placeholder :key="`placeholder-${i}`"/>
				<v-divider
					v-if="i < 3 - 1"
					:key="`placeholder-i${i}`"/>
			</template>
		</template>
	</v-list>
</template>
<script>
import NavbarNotificationItem from '../item/NavbarNotificationItem.vue'
import NavbarNotificationItemPlaceholder from '../item/NavbarNotificationItemPlaceholder.vue'
export default {
  	components: { NavbarNotificationItem, NavbarNotificationItemPlaceholder },
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
						className: 'pink--text text--darken-2 fire',
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
					twoline: true,
					seen_at: null,
				},
			],
			loading: true,
		}
	},

}
</script>