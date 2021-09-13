<template>
	<div>
		<v-container class="pa-lg-0 pa-3" style="max-width: 680px" id="blog-info">
			<h1 class="mt-10">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis quaerat aperiam eos ut similique voluptas blanditiis enim, dolore ab odit ipsum eligendi placeat cum, ullam quo veritatis quidem doloremque.
			</h1>
			<div class="d-flex mb-10 mt-5">
				<div>
					<div class="flex-middle">
						<v-avatar>
							<v-img src="https://picsum.photos/30"></v-img>
						</v-avatar>
					</div>
				</div>
				<div class="px-3">
					<div class="d-flex">
						<div>
							<div class="flex-middle">
								John Doe
							</div>
						</div>
						<div class="pl-3">
							<v-chip color="teal" dark class="px-5" small>
								Follow
							</v-chip>
						</div>
					</div>
					<div class="text-muted">
						{{ Date.now() | date }}
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
				<v-img src="https://picsum.photos/680/350" max-height="auto" max-width="100%" height="350" class="rounded-lg"/>
			</div>

			<div class="separator">
				<div class="d-flex justify-center">
					<div>
						<div class="d-flex">
							<div class="px-0" v-for="i in 3" :key="i">
								<v-icon>mdi-circle-small</v-icon>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, cupiditate incidunt quis molestiae ipsa consequuntur vero vel nobis expedita asperiores recusandae minus deserunt quasi, error fugit distinctio quidem veritatis suscipit.
			</div>
			<div class="py-10"></div>
			<floating-menu-blog-info/>
		</v-container>
	</div>
</template>
<script>
import FloatingMenuBlogInfo from '../../../../components/public/blog/fab/FloatingMenuBlogInfo.vue'
export default {
  	components: { FloatingMenuBlogInfo },
	data() {
		return {
			comments: true,
			report: {
				blog: false,
			},
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