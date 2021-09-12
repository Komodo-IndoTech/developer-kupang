<template>
	<v-list class="py-0">
		<template v-if="false">
			<div class="pa-3">
				<v-card rounded="xl" color="grey lighten-5" flat>
					<v-card-text>
						Log Aktivitas kosong :(
					</v-card-text>
				</v-card>
			</div>
		</template>
		<template v-else-if="true">
			<template v-for="(item, index) in notifications">
				<div :key="item.id" class="">
					<navbar-notification-item-log :value="item"/>
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
import NavbarNotificationItemLog from '../item/NavbarNotificationItemLog.vue'
import NavbarNotificationItemPlaceholder from '../item/NavbarNotificationItemPlaceholder.vue'
export default {
  	components: { NavbarNotificationItemPlaceholder, NavbarNotificationItemLog },
	data() {
		return {
			notifications: [
				{
					id: 1,
					icon: {
						className: '',
						name: 'mdi-comment-outline',
					},
					title: '${user} mengomentari tutorial ${tutorial}',
					date: '1d',
				},
				{
					id: 2,
					icon: {
						className: '',
						name: 'mdi-arrow-up-bold-outline',
					},
					title: '${user} meng-upvote tutorial ${tutorial}',
					date: '1d',
				},
			],
			loading: true,
		}
	},

}
</script>