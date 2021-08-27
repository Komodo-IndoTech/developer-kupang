<template>
	<div>
		<div class="d-grid-blog">
			<div class="colspan-3">
				<v-container class="pb-4 pt-8">
					<div class="px-4">
						<div class="d-flex justify-space-between mb-3 flex-wrap">
							<div>
								<div class="text-h5 flex-middle">
									Semua Pertanyaan
								</div>
							</div>
							<div>
								<div class="content-middle">
									<v-btn
										color="blue darken-1"
										dark
										class="text-capitalize font-weight-regular py-5"
										elevation="0">
										Buat Pertanyaan
									</v-btn>
								</div>
							</div>
						</div>
						<div class="d-flex justify-space-between mt-5 flex-wrap">
							<div class="py-3">
								<div class="flex-middle align-start">
									{{ 1000 | number }} Pertanyaan minggu ini
								</div>
							</div>
							<div>
								<div class="d-flex">
									<v-btn-toggle
										v-model="tab"
										mandatory>
										<v-btn class="text-capitalize font-weight-regular pa-3" style="height: unset">
											<small>
												Terbaru
											</small>
										</v-btn>
										<v-btn class="text-capitalize font-weight-regular pa-3" style="height: unset">
											<small>
												Aktif
											</small>
										</v-btn>
										<v-btn class="text-capitalize font-weight-regular pa-3" style="height: unset">
											<small>
												Belum terjawab
											</small>
										</v-btn>
										<v-menu open-on-click offset-y nudge-bottom="12" content-class="shadow" min-width="200">
											<template #activator="{ attrs, on }">
												<v-btn class="text-capitalize font-weight-regular pa-3" style="height: unset" v-bind="attrs" v-on="on">
													<small>
														Lainnya
													</small>
													<v-icon right small>mdi-menu-down</v-icon>
												</v-btn>
											</template>
											<v-card rounded="lg" outlined>
												<v-list>
													<v-list-item link dense>
														<v-list-item-content>
															<v-list-item-title>
																Vote
															</v-list-item-title>
														</v-list-item-content>
													</v-list-item>
													<v-list-item link dense>
														<v-list-item-content>
															<v-list-item-title>
																Berdasarkan tag pilihan
															</v-list-item-title>
														</v-list-item-content>
													</v-list-item>
												</v-list>
											</v-card>
										</v-menu>
									</v-btn-toggle>
									<v-btn class="text-capitalize font-weight-regular pa-3 ml-5" style="height: unset" outlined color="blue lighten-1" @click="filter.show = !filter.show">
										<v-icon small left>mdi-filter-variant</v-icon>
										<small>
											Filter
										</small>
									</v-btn>
								</div>
							</div>
						</div>
					</div>
				</v-container>
				<v-expand-transition>
					<div v-if="filter.show">
						<v-container class="pt-0 pb-5">
							<div class="px-4">
								<v-card color="grey lighten-4" outlined flat style="border-color: rgba(0,0,0,.15)!important">
									<v-card-text>
										<div class="d-grid-filter-forum">
											<div>
												<v-subheader class="font-weight-bold">
													Filter berdarkan
												</v-subheader>
												<v-checkbox
													color="blue"
													:label="`Belum memiliki jawaban`"
													hide-details/>
												<v-checkbox
													color="blue"
													:label="`Belum memiliki jawaban yang diterima`"
													hide-details/>
											</div>
											<div>
												<v-subheader class="font-weight-bold">
													Urutkan berdarkan
												</v-subheader>
												<v-radio-group v-model="radioGroup">
													<v-radio
														color="blue"
														:label="`Terbaru`"/>
													<v-radio
														color="blue"
														:label="`Aktivitas Terbaru`"/>
													<v-radio
														color="blue"
														:label="`Vote Terbanyak`"/>
												</v-radio-group>
											</div>
											<div>
												<v-subheader class="font-weight-bold">
													Dengan tag
												</v-subheader>
												<v-radio-group v-model="radioGroup">
													<v-radio
														color="blue"
														:label="`Tag yang diikuti`"/>
													<v-radio
														color="blue"
														:label="`Mengikuti Tag berikut`"/>
												</v-radio-group>
												<div class="pl-8">
													<v-autocomplete
														outlined
														background-color="white"
														label="contohnya: javascript atau java"
														chips dense/>
												</div>
											</div>
										</div>
									</v-card-text>
									<v-divider></v-divider>
									<v-card-actions class="pa-3">
										<v-btn
											color="blue darken-1"
											dark
											class="text-capitalize font-weight-regular py-5"
											elevation="0">
											Terapkan
										</v-btn>
										<v-spacer></v-spacer>
										<v-btn
											class="text-capitalize font-weight-regular py-5"
											elevation="0"
											text
											color="blue darken-1">
											Batalkan
										</v-btn>
									</v-card-actions>
								</v-card>
							</div>
						</v-container>
					</div>
				</v-expand-transition>
				<v-divider></v-divider>
				<v-container fluid>
					<list-question-public/>
				</v-container>
			</div>
			<div class="row-1-sm pt-4 px-4 px-md-0">
				<side-tag-question-public class="sticky-top" :style="{ top: `${$vuetify.application.top}px` }"/>
			</div>
		</div>
		<v-card flat rounded="0" dark>
			<v-card-text class="pa-lg-10">
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam autem nemo odio dignissimos eaque quas maxime repellat nihil, voluptatibus minus molestias totam modi obcaecati dolore officiis, esse aliquid voluptate distinctio?
			</v-card-text>
		</v-card>
	</div>
</template>
<script>
import ListQuestionPublic from '../../../../components/public/forum/questions/list/ListQuestionPublic.vue'
import SideTagQuestionPublic from '../../../../components/public/forum/questions/tags/SideTagQuestionPublic.vue'
export default {
  	components: { ListQuestionPublic, SideTagQuestionPublic },
	data() {
		return {
			tab: 0,
			filter: {
				show: false,
			}
		}
	},
	created(){
	}
}
</script>
<style lang="scss" scoped>
	.d-grid-filter-forum {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		grid-gap: 1rem;
	}
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