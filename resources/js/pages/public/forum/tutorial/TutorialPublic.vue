<template>
	<div>
		<div class="pt-lg-5">
			<v-card flat rounded="0" color="transparent-light">
				<v-card-title>
					Tutorial
				</v-card-title>
				<v-card-text>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, harum tempora! Asperiores esse commodi sint. Suscipit, pariatur. Eos, iste aspernatur ex nisi ipsam, non optio, quo est quia eum incidunt.
				</v-card-text>
			</v-card>
		</div>
		<v-card flat rounded="0" class="sticky-top" color="transparent-light" :style="{ top: `${$vuetify.application.top}px` }" style="transition: top .2s cubic-bezier(.4,0,.2,1); z-index: 10">
			<v-tabs color="teal" height="64">
				<v-tab :to="{ name: 'tutorial' }" exact>Semua Tutorial</v-tab>
				<v-tab :to="{ name: 'permintaan' }">Permintaan</v-tab>
				<v-tabs-slider color="teal"></v-tabs-slider>
			</v-tabs>
			<div class="d-flex justify-end">
				<v-divider></v-divider>
			</div>
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