<template>
	<div>
		<v-card v-for="item in items" :key="item.id" flat>
			<v-card-text>
				<div class="d-flex">
					<div class="">
						<v-badge :value="item.closed != null && item.closed" icon="mdi-check-bold" color="teal" offset-x="20" offset-y="20" bordered>
							<v-card flat>
								<v-card-text class="py-2">
									<div class="d-flex align-center flex-column">
										<div>
											{{ item.votes | number }}
										</div>
										<div>
											<small>
												dukungan
											</small>
										</div>
									</div>
								</v-card-text>
							</v-card>
						</v-badge>
						<v-card flat :outlined="item.answers > 0" :color="item.answered ? 'green' : null" :dark="item.answered" :class="{'teal--text': item.answers > 0 }" :style="{ borderColor: item.answers > 0 && !item.answered ? 'var(--v-accent-lighten2)' : null  }">
							<v-card-text class="py-2" :class="{'teal--text': item.answers > 0 && !item.answered, 'white--text': item.answered }">
								<div class="d-flex align-center flex-column">
									<div class="pa-0">
										{{ item.answers | number }}
									</div>
									<div>
										<small class="pa-0">
											Komentar
										</small>
									</div>
								</div>
							</v-card-text>
						</v-card>
						<v-card flat>
							<v-card-text class="py-2">
								<div class="d-flex align-center flex-column">
									<div>
										{{ item.views | number }}
									</div>
									<div>
										<small>
											dilihat
										</small>
									</div>
								</div>
							</v-card-text>
						</v-card>
					</div>
					<div>
						<a href="#" class="text-decoration-none pa-0">
							<v-card-title class="font-weight-regular blue--text text--darken-2 py-1">
								{{ item.title }}
							</v-card-title>
						</a>
						<v-card-text class="py-0">
							{{ item.description }}
						</v-card-text>
						<v-card-text class="d-flex pt-0 flex-wrap">
							<div class="grow">
								<v-chip-group>
									<v-chip small class="rounded-0" color="blue lighten-5">
										node.js
									</v-chip>
									<v-chip small class="rounded-0" color="blue lighten-5">
										windows-installer
									</v-chip>
									<v-chip small class="rounded-0" color="blue lighten-5">
										access-denied
									</v-chip>
								</v-chip-group>
							</div>
							<div style="min-width: 200px;">
								<div class="pt-3">
									<div class="text--disabled">
										<small>
											1 min yang lalu
										</small>
									</div>
									<div class="d-flex">
										<div>
											<div class="flex-middle">
												<v-avatar size="32px" class="mr-2" rounded="lg">
													<img src="https://cdn.vuetifyjs.com/images/lists/1.jpg">
												</v-avatar>
											</div>
										</div>
										<div>
											<div class="font-weight-regular">
												<small>
													{{ item.user.name }}
												</small>
											</div>
											<div class="d-flex">
												<div class="mr-1">
													<small>
														{{ 2000 | number }}
													</small>
												</div>
												<div class="mr-1">
													<v-icon small color="yellow darken-2">mdi-crown</v-icon>
												</div>
												<div class="mr-1">
													<v-icon small color="blue">mdi-check-decagram</v-icon>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</v-card-text>
					</div>
				</div>
			</v-card-text>
		</v-card>
		<v-card flat>
			<v-card-actions>
				<!-- pagination vuetify -->
				<v-pagination
					v-model="currentPage"
					:length="totalPage"
					:total-visible="5"
					color="orange darken-1"
					class="mt-0"/>
			</v-card-actions>
		</v-card>
	</div>
</template>
<script>
export default {
	data() {
		return {
			currentPage: 1,
			totalPage: 10,
			items: [
				{
					id: 1,
					title: 'Как получить доступ к приложению в мобильном приложении?',
					description: 'Приложение доступно в мобильном приложении на платформе Android и iOS. Для получения доступа к приложению необходимо приложение зарегистрировать на сайте и получить код доступа. Для получения кода доступа необходимо зарегистрироваться на сайте и получить код доступа.',
					created_at: '2019-01-01',
					updated_at: '2019-01-01',
					votes: 2000,
					answers: 10,
					views: 5000,
					closed: true,
					user: {
						id: 1,
						name: 'Иван Иванов',
						avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
						created_at: '2019-01-01',
						updated_at: '2019-01-01',
					},
				},
				{
					id: 2,
					title: 'Как получить доступ к приложению в мобильном приложении?',
					description: 'Приложение доступно в мобильном приложении на платформе Android и iOS. Для получения доступа к приложению необходимо приложение зарегистрировать на сайте и получить код доступа. Для получения кода доступа необходимо зарегистрироваться на сайте и получить код доступа.',
					created_at: '2019-01-01',
					updated_at: '2019-01-01',
					votes: 0,
					answers: 0,
					views: 0,
					user: {
						id: 1,
						name: 'Иван Иванов',
						avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
						created_at: '2019-01-01',
						updated_at: '2019-01-01',
					},
				},
				{
					id: 2,
					title: 'Как получить доступ к приложению в мобильном приложении?',
					description: 'Приложение доступно в мобильном приложении на платформе Android и iOS. Для получения доступа к приложению необходимо приложение зарегистрировать на сайте и получить код доступа. Для получения кода доступа необходимо зарегистрироваться на сайте и получить код доступа.',
					created_at: '2019-01-01',
					updated_at: '2019-01-01',
					votes: 1,
					answers: 1,
					views: 510,
					answered: true,
					user: {
						id: 1,
						name: 'Иван Иванов',
						avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
						created_at: '2019-01-01',
						updated_at: '2019-01-01',
					},
				},
			],
		}
	},
}
</script>
<style lang="scss">
	.v-pagination__item,
	.v-pagination__navigation{
		border: 1px solid rgba(0,0,0, .15);
		box-shadow: unset!important;
	}
</style>