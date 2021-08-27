<template>
	<div>
		<div class="pa-5">
			<div class="rounded-xl" style="position: relative; overflow: hidden; background-size: cover; background-position: left; background-repeat: repeat-x" :style="{ 'background-image': `linear-gradient(20deg, rgba(0,0,0,.25) 0px, #fff 800px), url('https://picsum.photos/400/800')` }">
				<div class="d-flex pa-3">
					<div class="px-4">
						<div class="content-middle">
							<v-icon dark>mdi-pin</v-icon>
						</div>
					</div>
					<v-subheader class="py-5 font-weight-bold text-uppercase" dark>
						Kegiatan Disematkan
					</v-subheader>
				</div>
				<div class="d-grid-blog" style="backdrop-filter: blur(10px)">
					<div></div>
					<v-card flat v-for="i in 2" :key="i" style="width: 400px" rounded="xl" color="glass">
						<v-card-text class="pb-0">
							<div class="d-flex">
								<div class="pr-4">
									<div class="flex-middle">
										<v-icon>mdi-calendar</v-icon>
									</div>
								</div>
								<div>
									<div class="text-h5 font-weight-black">
										{{ Date.now() | date('id-ID', true) }}
									</div>
									<div class="font-weight-black">
										{{ Date.now() | time }}
									</div>
								</div>
								<v-spacer></v-spacer>
								<div class="pl-4">
									<div class="flex-middle">
										<v-icon>mdi-pin-outline</v-icon>
									</div>
								</div>
							</div>
						</v-card-text>
						<div class="d-flex">
							<v-card-title class="pr-0">
								<div class="flex-middle">
									<div style="width: 100px">
										<v-img src="https://picsum.photos/100" class=""></v-img>
									</div>
								</div>
							</v-card-title>
							<div>
								<v-card-title class="pb-1">
									Lorem ipsum, dolor sit amet consectetur
								</v-card-title>
								<v-card-text class="pt-0">
									Lorem ipsum dolor, sit amet consectetur 
								</v-card-text>
							</div>
						</div>
						<v-card-text class="pt-0">
							<v-btn color="pink" icon>
								<v-icon>mdi-heart-outline</v-icon>
							</v-btn>
							<v-btn icon>
								<v-icon>mdi-twitter</v-icon>
							</v-btn>
						</v-card-text>
					</v-card><div style="width: 10rem"></div>
				</div>
			</div>
		</div>
		<v-container fluid>
			
		</v-container>
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