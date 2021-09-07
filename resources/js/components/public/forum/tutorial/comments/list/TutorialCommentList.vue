<template>
	<div class="fill-height grow-1">
		<div v-if="true">
			<tutorial-comment-item v-for="item in items" :key="item.id" :value="item">
				<template v-if="item.replies && item.replies.length" #default>
					<tutorial-comment-item v-for="reply in item.replies" :key="reply.id" :value="reply"/>
				</template>
				<template #quote v-if="item.quote">
					<div class="mt-2">
						<step-item-list :value="item.quote" simple style="max-height: 150px; overflow: hidden; position: relative" class="rounded-xl">
							<div class="overlay flex-middle">
								<v-btn icon dark @click="$vuetify.goTo(`#step-${item.quote.id}`, { duration: 500, offset: 80 })">
									<v-icon>mdi-reply</v-icon>
								</v-btn>
							</div>
						</step-item-list>
					</div>
				</template>
			</tutorial-comment-item>
			<v-card class="text-center" rounded="xl" flat color="grey lighten-5" link>
				<v-card-text>
					Komentar lainnya
				</v-card-text>
			</v-card>
		</div>
		<div v-else-if="false">
			<tutorial-comment-item-placeholder v-for="i in 3" :key="i"/>
		</div>
		<div v-else class="fill-height pa-lg-5 d-flex flex-column justify-center">
			<v-card flat rounded="xl" color="grey lighten-5">
				<div class="d-flex">
					<v-img src="/img/3d/comment-crop.png" width="200px" style="margin-top: -60px"></v-img>
					<v-card-text class="grow-1" style="min-width: 0px">
						<div class="flex-middle text-h5 grey--text text--lighten-2" style="margin-left: -2rem">
							Belum ada komentar
						</div>
					</v-card-text>
				</div>
			</v-card>
		</div>
	</div>
</template>
<script>
import StepItemList from '../../steps/item/StepItemList.vue'
import TutorialCommentItem from '../item/TutorialCommentItem.vue'
import TutorialCommentItemPlaceholder from '../item/TutorialCommentItemPlaceholder.vue'
export default {
  	components: { TutorialCommentItem, StepItemList, TutorialCommentItemPlaceholder },
	data() {
		return {
			items: [
				{ 
					id: 1, 
					user: {
						id: 1,
						name: 'Agri Eddison',
						avatar: 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200&d=mm&r=g'
					},
					content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
					date: '2d ago',
					up: 10,
					down: 42,
					reply_count: 10,
					quote: {
						id: 3,
						title: 'The potential problem',
						type: 'image',
						content: {
							src: 'https://i0.wp.com/css-tricks.com/wp-content/uploads/2016/05/busted.gif',
							alt: 'Flexbox and Truncated Text | css-tricks.com'
						},
						items: [
							{
								title: '',
								type: 'text',
								content: `Not only might this prevent the narrowing of a container, it might blow a container out super wide.`,
							}
						]
					},
					replies: [
						{
							id: 1,
							user: {
								id: 1,
								name: 'Agri Eddison',
								avatar: 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200&d=mm&r=g'
							},
							content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
							date: '1m ago',
							up: 10,
							down: 10,
						},
						{
							id: 2,
							user: {
								id: 3,
								name: 'Alex',
								avatar: 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200&d=mm&r=g'
							},
							content: 'Okok 👍',
							date: '5s ago',
							up: 0,
							down: 0,
						},
					]
				},
				{ 
					id: 2, 
					user: {
						id: 1,
						name: 'Agri Eddison',
						avatar: 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200&d=mm&r=g'
					},
					content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
					date: '2d ago',
					up: 10,
					down: 10,
					reply_count: 10,
					replies: []
				},
			],
			loading: false,
		}
	}
}
</script>