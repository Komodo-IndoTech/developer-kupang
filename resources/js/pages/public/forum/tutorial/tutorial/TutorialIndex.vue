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
							hide-details/>
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
		<div class="d-grid-blog py-5">
			<v-card v-for="item in items" :key="item.id" class="shadow" outlined rounded="lg" style="position: relative">
				<v-img
					:src="item.image"
					class="fill-height"
					:aspect-ratio="6/4"
					max-height="150"/>
				<v-btn fab small dark elevation="0" absolute top left disabled style="top: .5rem; left: .5rem" class="rounded-lg transparent-light" v-if="item.folder">
					<v-icon small>mdi-checkbox-multiple-blank</v-icon>
				</v-btn>
				<v-menu nudge-bottom="10" offset-y left min-width="250" content-class="shadow" :close-on-content-click="false">
					<template #activator="{ attrs, on }">
						<v-btn fab small light elevation="0" absolute top right style="top: .5rem; right: .5rem" class="rounded-lg" v-bind="attrs" v-on="on">
							<v-icon small>mdi-dots-vertical</v-icon>
						</v-btn>
					</template>
					<v-card color="transparent-light" outlined>
						<v-list-item link>
							<v-list-item-icon>
								<v-icon>mdi-share</v-icon>
							</v-list-item-icon>
							<v-list-item-title>
								Bagikan
							</v-list-item-title>
						</v-list-item>
						<v-list-item link>
							<v-list-item-icon>
								<v-icon>mdi-star</v-icon>
							</v-list-item-icon>
							<v-list-item-title>
								Favorit
							</v-list-item-title>
						</v-list-item>
						<v-list-item link>
							<v-list-item-icon>
								<v-icon>mdi-archive</v-icon>
							</v-list-item-icon>
							<v-list-item-title>
								Arsip
							</v-list-item-title>
						</v-list-item>
					</v-card>
				</v-menu>
				<v-card-text class="font-weight-bold pb-0" style="font-size: 110%; cursor: pointer;" @click="$router.push({ name: 'tutorial.show', params: { id_tutorial: item.id } })">
					{{ item.title }}
				</v-card-text>
				<v-card-text class="py-1">
					{{ item.content }}
				</v-card-text>
				<v-card-text class="py-0">
					<v-chip small color="blue lighten-5" light label>
						{{ item.category }}
					</v-chip>
				</v-card-text>
				<v-card-text class="pt-0 d-flex justify-space-between">
					<div>
						<div class="flex-middle">
							<div>
								<v-icon small color="yellow darken-2">mdi-star</v-icon>
								<v-icon small color="yellow darken-2">mdi-star</v-icon>
								<v-icon small color="yellow darken-2">mdi-star</v-icon>
								<v-icon small color="grey">mdi-star</v-icon>
								<v-icon small color="grey">mdi-star</v-icon>
							</div>
						</div>
					</div>
					<div>
						<v-btn icon>
							<v-icon small>mdi-message-outline</v-icon>
						</v-btn>
					</div>
				</v-card-text>
			</v-card>
			<v-card v-for="i in 3" :key="`placeholder-${i}`" class="shadow" outlined rounded="lg" style="position: relative">
				<v-skeleton-loader height="150" width="100%" type="image"/>
				<v-card-text class="pb-1">
					<v-skeleton-loader width="100%" type="text"/>
				</v-card-text>
				<v-card-text class="py-1">
					<v-skeleton-loader width="100%" type="text@2"/>
				</v-card-text>
				<v-card-text class="py-0">
					<v-skeleton-loader width="100%" max-width="50" type="text"/>
				</v-card-text>
				<v-card-text class="pt-0 d-flex justify-space-between">
					<div>
						<div class="flex-middle">
							<v-skeleton-loader width="100" type="text"/>
						</div>
					</div>
					<div>
						<v-skeleton-loader width="24" height="24" type="image"/>
					</div>
				</v-card-text>
			</v-card>
		</div>
	</div>
</template>
<script>
export default {
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
		grid-template-columns: repeat(auto-fit, 250px);
		justify-content: center;
  		// grid-auto-flow: column;
		overflow-x: auto;
		grid-gap: 1rem;
		@for $i from 1 through 4 {
			& > .colspan-#{$i} {
				grid-column-end: span #{$i};
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