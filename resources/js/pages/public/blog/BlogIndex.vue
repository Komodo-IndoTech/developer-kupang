<template>
	<div>
		<v-toolbar flat>
			<v-tabs align-with-title>
				<v-tab>Blog</v-tab>
				<v-tab>Event</v-tab>
				<v-tab>Diarsipkan</v-tab>
			</v-tabs>
		</v-toolbar>
		<v-divider></v-divider>
		<v-container>
			
		</v-container>
		<v-divider></v-divider>
		<v-container fluid>
			<div class="d-grid-blog">
				<list-blog-public/>
				<side-kategori-blog-public class="row-1-sm"/>
			</div>
		</v-container>
	</div>
</template>
<script>
import SideKategoriBlogPublic from '../../../components/public/blog/kategori/SideKategoriBlogPublic.vue'
import ListBlogPublic from '../../../components/public/blog/list/ListBlogPublic.vue'
export default {
  	components: { ListBlogPublic, SideKategoriBlogPublic },
	
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