<template>
	<div>
		<div class="d-flex">
			<div class="px-3">
				<div class="flex-middle">
					<v-badge dot>
						<v-icon>mdi-pin-outline</v-icon>
					</v-badge>
				</div>
			</div>
			<v-subheader class="font-weight-bold text-uppercase">
				Blog Pilihan
			</v-subheader>
		</div>
		<div class="d-grid-pilihan-blog px-lg-4">
			<template v-if="items && items.length">
				<blog-item-number v-for="(item, index) in items" :index="index + 1" :key="item.id"/>
				<!-- TODO tambah item placeholder agar memenuhi container -->
			</template>
			<template v-else-if="loading">
				<blog-item-number v-for="(item, index) in 4" :key="index"/>
			</template>
			<!-- TODO informasi blog pilihan kosong -->
			<template v-else>
				<empty-content/>
			</template>
		</div>
	</div>
</template>
<script>
/**
 * TODO Add request to get blog pilihan
 * 
 */
import EmptyContent from '../../dummy/EmptyContent.vue'
import BlogItemNumber from '../item/BlogItemNumber.vue'
export default {
	components: { BlogItemNumber, EmptyContent },
	props: {
		max: {
			type: Number,
			default: 4
		}
	},
	data() {
		return {
			items: [
				{
					id: 1,
					title: 'Blog Pilihan 1',
					image: 'https://picsum.photos/id/1/200/200',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
					date: '12/12/2019',
				},
				{
					id: 2,
					title: 'Blog Pilihan 2',
					image: 'https://picsum.photos/id/1/200/200',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
					date: '12/12/2019',
				},
				{
					id: 3,
					title: 'Blog Pilihan 3',
					image: 'https://picsum.photos/id/1/200/200',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
					date: '12/12/2019',
				},
				{
					id: 4,
					title: 'Blog Pilihan 3',
					image: 'https://picsum.photos/id/1/200/200',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
					date: '12/12/2019',
				}
			],
			loading: false,
		}
	},
}
</script>
<style lang="scss" scoped>
	.d-grid-pilihan-blog{
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(400px, 400px));
		grid-gap: 1rem;
		margin-bottom: 1rem;
	}
</style>