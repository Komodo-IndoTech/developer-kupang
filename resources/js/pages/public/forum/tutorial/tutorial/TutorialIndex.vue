<template>
	<div>
		<v-container>
			<div class="d-flex mb-5">
				<div class="mr-2">
					<div class="d-flex flex-column justify-space-between fill-height">
						<v-subheader class="px-0 pb-0">
							Urutkan berdasarkan
						</v-subheader>
						<v-select
							v-model="sort"
							:items="sortItems"
							label="Urutkan"
							value="value"
							item-text="label"
							item-value="value"
							outlined
							class="mt-2"
							hide-details
							dense/>
					</div>
				</div>
				<div class="mr-2 d-none d-lg-block">
					<div class="d-flex flex-column justify-space-between fill-height">
						<v-subheader class="px-0 pb-0">
							Filter berdasarkan
						</v-subheader>
						<v-select
							v-model="sort"
							:items="sortItems"
							label="Filter"
							value="value"
							item-text="label"
							item-value="value"
							outlined
							dense
							class="mt-2"
							hide-details/>
					</div>
				</div>
				<div class="mr-2 d-none d-lg-block">
					<div class="d-flex flex-column justify-space-between fill-height">
						<v-subheader class="px-0 pb-0">
						</v-subheader>
						<v-select
							v-model="sort"
							:items="sortItems"
							label="Progress"
							value="value"
							item-text="label"
							item-value="value"
							outlined
							dense
							class="mt-2"
							hide-details/>
					</div>
				</div>
				<div class="mr-2 d-none d-lg-block">
					<div class="d-flex flex-column justify-space-between fill-height">
						<v-subheader class="px-0 pb-0">
						</v-subheader>
						<div class="grow">
							<div class="d-flex flex-column justify-center fill-height">
								<v-btn text class="text-capitalize">
									Reset
								</v-btn>
							</div>
						</div>
					</div>
				</div>
				<div class="ml-auto">
					<div class="d-flex flex-column justify-space-between fill-height">
						<v-subheader class="px-0 pb-0">
						</v-subheader>
						<div class="grow">
							<div class="d-flex flex-column justify-center fill-height">
								<div class="d-flex">
									<v-text-field
										v-model="search"
										label="Cari"
										outlined
										dense
										class="mt-2"
										hide-details
										append-outer-icon="mdi-magnify"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</v-container>
		<div class="d-grid-blog pa-lg-3 pa-2">
			<!-- <v-card flat rounded="xl" color="grey lighten-5" class="rowspan-3"></v-card> -->
			<tutorial-item-grid v-for="item in items" :key="item.id" :value="item"/>
			<tutorial-item-grid-placeholder v-for="i in 10" :key="`placeholder-${i}`"/>
		</div>
	</div>
</template>
<script>
import TutorialItemGrid from '../../../../../components/public/forum/tutorial/list/item/TutorialItemGrid.vue'
import TutorialItemGridPlaceholder from '../../../../../components/public/forum/tutorial/list/item/TutorialItemGridPlaceholder.vue'
export default {
  	components: { TutorialItemGrid, TutorialItemGridPlaceholder },
	data() {
		return {
			search: '',
			sort: '',
			sortItems: [
				{
					label: 'Terbaru',
					value: 'new'
				},
				{
					label: 'Terpopuler',
					value: 'popular'
				},
				{
					label: 'Terlama',
					value: 'old'
				}
			],
			items: [
				{
					id: 1,
					title: 'Dasar PHP',
					image: 'https://picsum.photos/200/300',
					attrs: {
						'v-bind:style': '{ backgroundImage: "url(" + image + ")" }'
					},
					content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
					date: '12/12/2019',
					folder: true,
					category: 'PHP'
				},
				{
					id: 2,
					title: 'Tipe Data Javascript',
					image: 'https://picsum.photos/200/300',
					attrs: {
						'v-bind:style': '{ backgroundImage: "url(" + image + ")" }'
					},
					content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
					date: '12/12/2019',
					folder: false,
					category: 'Javascript'
				},
				{
					id: 3,
					title: 'Dasar Javascript',
					image: 'https://picsum.photos/200/300',
					attrs: {
						'v-bind:style': '{ backgroundImage: "url(" + image + ")" }'
					},
					content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
					date: '12/12/2019',
					folder: true,
					category: 'Javascript'
				},
			]
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


		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		grid-auto-rows: 150px;
		justify-content: center;
  		// grid-auto-flow: column;
		overflow-x: auto;
		grid-gap: 1rem;
		& > *{
			grid-row-end: span 2;
		}
		@for $i from 1 through 4 {
			& > .colspan-#{$i} {
				grid-column-end: span #{$i};
			}
			& > .rowspan-#{$i} {
				grid-row-end: span #{$i};
			}
		}
	}
	// @media screen and (max-width: 830px) {
	// 	.row-1-sm {
	// 		grid-row-start: 1;
	// 	}
	// 	.d-grid-blog {
	// 		grid-template-columns: 0rem repeat(auto-fit, minmax(400px, 1fr));
	// 		@for $i from 1 through 4 {
	// 			& > .colspan-#{$i} {
	// 				grid-column-end: span 1;
	// 			}
	// 		}
	// 	}
	// }
</style>