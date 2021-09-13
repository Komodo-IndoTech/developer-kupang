<template>
	<div>
		<v-container class="pa-lg-0 pa-3" style="max-width: 680px" id="blog-info">
			<!-- title -->
			<h1 class="mt-10">
				{{ item.title }}
			</h1>
			<div class="d-flex mb-10 mt-5">
				<div>
					<div class="flex-middle">
						<v-avatar>
							<v-img :src="item.image"></v-img>
						</v-avatar>
					</div>
				</div>
				<div class="px-3">
					<div class="d-flex">
						<div>
							<div class="flex-middle">
								{{ item.author }}
							</div>
						</div>
						<div class="pl-3">
							<v-chip color="teal" dark class="px-5" small>
								Follow
							</v-chip>
						</div>
					</div>
					<div class="text-muted">
						{{ item.date | date }}
					</div>
				</div>
				<v-spacer></v-spacer>
				<div class="pl-3">
					<div class="d-flex">
						<v-btn icon>
							<v-icon>mdi-twitter</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>mdi-facebook</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>mdi-linkedin</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>mdi-link</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>mdi-bookmark-plus-outline</v-icon>
						</v-btn>
					</div>
				</div>
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
			<div class="py-10"></div>
			<floating-menu-blog-info/>
		</v-container>
	</div>
</template>
<script>
import BlogAds from '../../../../components/public/blog/ads/BlogAds.vue'
import BlogSeparator from '../../../../components/public/blog/divider/BlogSeparator.vue'
import FloatingMenuBlogInfo from '../../../../components/public/blog/fab/FloatingMenuBlogInfo.vue'
import EmptyContentPengembangan from '../../../../components/public/dummy/EmptyContentPengembangan.vue'
export default {
  	components: { FloatingMenuBlogInfo, EmptyContentPengembangan, BlogSeparator, BlogAds },
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