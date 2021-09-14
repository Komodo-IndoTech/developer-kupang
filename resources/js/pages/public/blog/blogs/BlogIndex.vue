<template>
	<div>
		<v-container class="pt-10">
			<!-- list blog pilihan -->
			<list-blog-pilihan-public/>
		</v-container>
		<div class="sticky-top pb-10 pt-3" :style="{ top: `${$vuetify.application.top}px` }" style="z-index: 10; bottom: 0; pointer-events: none;">
			<div class="flex-middle" style="pointer-events: none;">
				<floating-action-make-blog/>
			</div>
		</div>
		<v-divider></v-divider>
		<v-container fluid>
			<div class="d-grid-blog">
				<!-- list blog -->
				<list-blog-public/>
				<div class="row-1-sm">
					<side-kategori-blog-public class="sticky-top" :style="{ top: `calc(${$vuetify.application.top}px + 20px)` }"/>
				</div>
			</div>
		</v-container>
	</div>
</template>
<script>
import FloatingActionMakeBlog from '../../../../components/public/blog/fab/FloatingActionMakeBlog.vue'
import SideKategoriBlogPublic from '../../../../components/public/blog/kategori/SideKategoriBlogPublic.vue'
import ListBlogPilihanPublic from '../../../../components/public/blog/list/ListBlogPilihanPublic.vue'
import ListBlogPublic from '../../../../components/public/blog/list/ListBlogPublic.vue'
export default {
  	components: { ListBlogPublic, SideKategoriBlogPublic, ListBlogPilihanPublic, FloatingActionMakeBlog },
	created(){
		console.log(this.$vuetify);
	}
}
</script>
<style lang="scss" scoped>
	.d-grid-blog {
		margin-top: 20px;
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		grid-gap: 20px;
		@for $i from 1 through 4 {
			& > .colspan-#{$i} {
				grid-column-end: span #{$i};
			}
		}
	}
	@media screen and (max-width: 830px) {
		.row-1-sm {
			grid-row-start: 1;
		}
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