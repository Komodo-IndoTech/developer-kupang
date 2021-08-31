<template>
	<div>
		<v-card dark flat rounded="0">
			<v-container class="pb-0">
				<div class="pa-5">
					<h1 style="font-family: SuisseWorks,Georgia,Times,times new roman,serif,apple color emoji,segoe ui emoji,segoe ui symbol">
						Tutorial
					</h1>
				</div>
				<v-tabs slider-size="5">
					<v-tab :to="{ name: 'tutorial' }">Semua Tutorial</v-tab>
					<v-tab :to="{ name: 'permintaan' }">Permintaan</v-tab>
					<v-tabs-slider color="grey"></v-tabs-slider>
				</v-tabs>
			</v-container>
		</v-card>
		<router-view></router-view>
	</div>
</template>
<script>
export default {
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
		grid-template-columns: 10rem repeat(auto-fit, 400px);
  		grid-auto-flow: column;
		overflow-x: auto;
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