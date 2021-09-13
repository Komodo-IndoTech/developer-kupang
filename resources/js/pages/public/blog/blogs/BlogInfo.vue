<template>
	<div>
		<v-container class="pa-lg-0 pa-3" style="max-width: 680px" id="blog-info">
			<div class="d-flex">
				<v-card link rounded="xl" class="mt-10 mb-4" color="grey lighten-5" flat :to="{ name: 'blog' }">
					<v-card-title class="grey--text text--lighten-1">
						<v-icon left>mdi-arrow-left</v-icon>
						<span>
							Blog
						</span>
					</v-card-title>
				</v-card>
				<v-spacer></v-spacer>
				<!-- TODO perbaikan target scroll -->
				<v-card link rounded="xl" class="mt-10 mb-4" color="grey lighten-5" flat @click="$vuetify.goTo('#bottom-blog-info', { duration: 500 })">
					<v-card-title class="grey--text text--lighten-1">
						<span>
							Blog Sejenis
						</span>
						<v-icon right>mdi-arrow-down</v-icon>
					</v-card-title>
				</v-card>
			</div>
			<!-- title -->
			<h1>
				{{ item.title }}
			</h1>
			<div class="d-flex mb-10 mt-5">
				<blog-author-list :item="item"/>
				<v-spacer></v-spacer>
				<blog-share-action/>
			</div>
			
			<div class="">
				<v-img :src="item.image" max-height="auto" max-width="100%" height="350" class="rounded-lg"/>
			</div>
			<blog-separator/>

			<!-- body -->
			<div>
				<div v-for="(body, i) in item.body" :key="i">
					<template v-if="body && body.type == 'ad'">
						<blog-ads/>
					</template>
					<p v-else v-html="body"></p>
				</div>
			</div>
			<blog-separator/>
			<div class="py-10" id="bottom-blog-info"></div>
			<floating-menu-blog-info/>
			<!-- TODO menambah info author -->
			<!-- TODO menambah list / grid blog berelasi -->
		</v-container>
	</div>
</template>
<script>
import BlogAds from '../../../../components/public/blog/ads/BlogAds.vue'
import BlogAuthorList from '../../../../components/public/blog/author/BlogAuthorList.vue'
import BlogSeparator from '../../../../components/public/blog/divider/BlogSeparator.vue'
import FloatingMenuBlogInfo from '../../../../components/public/blog/fab/FloatingMenuBlogInfo.vue'
import BlogShareAction from '../../../../components/public/blog/share/BlogShareAction.vue'
import EmptyContentPengembangan from '../../../../components/public/dummy/EmptyContentPengembangan.vue'
export default {
  	components: { FloatingMenuBlogInfo, EmptyContentPengembangan, BlogSeparator, BlogAds, BlogShareAction, BlogAuthorList },
	data() {
		return {
			comments: true,
			report: {
				blog: false,
			},
			item: {
				id: 1,
				title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.',
				description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.',
				image: 'https://picsum.photos/680/350',
				author: 'John Doe',
				date: '2019-01-01',
				body: [
					'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.',
					'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.',
					{
						type: 'ad',
					},
					'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.',
					'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.',
				]
			}
		}
	},
	created(){
		window.s = this.$vuetify
	}
}
</script>
<style lang="scss" scoped>
	.d-grid-blog {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
		grid-gap: 1rem;
		@for $i from 1 through 4 {
			& > .colspan-#{$i} {
				grid-column-end: span #{$i};
			}
		}
	}
	@media screen and (max-width: 830px) {
		.d-grid-blog {
			grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
			@for $i from 1 through 4 {
				& > .colspan-#{$i} {
					grid-column-end: span 1;
				}
			}
		}
	}
</style>