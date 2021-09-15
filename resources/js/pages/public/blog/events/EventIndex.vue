<template>
	<div>
		<div class="pa-5">
			<div class="d-grid-blog w-100">
				<list-event-public @update-image="updateImage($event)"/>
				<div class="pa-4">
					<div v-if="image" class="sticky-top py-5" :style="{ top: `${$vuetify.application.top}px` }">
						<v-scroll-y-transition mode="out-in">
							<v-img :src="image" :key="image" max-width="100%" class="rounded-xl"></v-img>
						</v-scroll-y-transition>
					</div>
				</div>
			</div>			
		</div>
		<v-container fluid>
			
		</v-container>
	</div>
</template>
<script>
import ListEventPublic from '../../../../components/public/blog/events/list/ListEventPublic.vue'
export default {
  	components: { ListEventPublic },
	data() {
		return {
			image: null,
		}
	},
	methods: {
		updateImage(image) {
			console.log(image);
			if(image)
				this.image = image
		}
	},
	created(){

	}
}
</script>
<style lang="scss" scoped>
	.d-grid-blog {
		
		// show scrollbar when mouse hover
		&::-webkit-scrollbar {
			width: 3px;
			height: 3px;
		}

		/* Track */
		&::-webkit-scrollbar-track {
			background: #f1f1f1;
			visibility: hidden;
		}

		/* Handle */
		&::-webkit-scrollbar-thumb {
			background: #888;
			visibility: hidden;
		}

		/* Handle on hover */
		&::-webkit-scrollbar-thumb:hover {
			background: #555;
		}

		&:hover{
			&::-webkit-scrollbar-track {
				visibility: visible;
			}
			&::-webkit-scrollbar-thumb {
				visibility: visible;
			}
		}


		padding: 20px 0px;
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  		// grid-auto-flow: column;
		// overflow-x: auto;
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
			grid-template-columns: 0rem repeat(auto-fit, minmax(400px, 1fr));
			@for $i from 1 through 4 {
				& > .colspan-#{$i} {
					grid-column-end: span 1;
				}
			}
		}
	}
</style>