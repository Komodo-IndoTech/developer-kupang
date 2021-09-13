<template>
	<div>
		<div class="d-flex">
			<div class="px-3">
				<div class="flex-middle">
					<v-icon>mdi-pin-outline</v-icon>
				</div>
			</div>
			<v-subheader class="font-weight-bold text-uppercase">
				Blog Pilihan
			</v-subheader>
		</div>
		<div class="d-grid-pilihan-blog px-lg-4">
			<template v-if="items && items.length">
				<blog-item-number v-for="(item, index) in items" :index="index" :key="item.id"/>
			</template>
			<template v-else-if="loading">
				<blog-item-number v-for="(item, index) in items" :index="index" :key="item.id"/>
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
	data() {
		return {
			items: [],
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