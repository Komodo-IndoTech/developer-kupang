<template>
	<v-navigation-drawer class="tutorial-comment-container shadow-md ml-4" right fixed floating app width="450" bottom clipped mobile-breakpoint="800" v-model="comments" :style="{'max-height': $vuetify.breakpoint.width <= 800 ? '90%' : `calc(100vh - ${$vuetify.application.top})`}">
		<template #prepend>
			<!-- <v-divider></v-divider> -->
		</template>
		<div class="pa-3 pl-lg-4 tutorial-comment fill-height d-flex flex-column">
			<div class="pa-3 mb-5" style="z-index: 2">
				<v-card rounded="lg" class="shadow-md" color="transparent-light">
					<v-card-text class="d-flex">
						<div class="grow-1">
							<div class="flex-middle">
								<v-tooltip top>
									<template v-slot:activator="{ on }">
										<v-btn icon v-on="on">
											<v-icon>mdi-bell-ring-outline</v-icon>
										</v-btn>
									</template>
									<span>
										Hidupkan pemberitahuan
									</span>
								</v-tooltip>
							</div>
						</div>
						<v-spacer></v-spacer>
						<div>
							<v-select
								v-model="sort"
								:items="sortItems"
								label="Urutkan"
								value="value"
								item-text="label"
								item-value="value"
								rounded
								solo
								dense
								flat
								hide-details/>
						</div>
					</v-card-text>
				</v-card>
			</div>
			<tutorial-comment-list/>
		</div>
		<template #append>
			<!-- <v-divider></v-divider> -->
			<div style="z-index: 2">
				<v-card rounded="lg" class="shadow-lg" color="transparent-light">
					<v-card-text>
						<div class="d-flex">
							<v-textarea
								dense
								outlined
								placeholder="Komentar Anda"
								rows="1"
								hide-details/>
							<div>
								<v-btn text>
									Kirim
								</v-btn>
							</div>
						</div>
					</v-card-text>
				</v-card>
			</div>
		</template>
	</v-navigation-drawer>
</template>
<script>
import TutorialCommentList from '../list/TutorialCommentList.vue';
export default {
  	components: { TutorialCommentList },
	props: {
		value: {
			type: Boolean,
			default: false
		}
	},
	computed: {
		comments: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			}
		},
	},
	data() {
		return {
			search: '',
			sort: 'new',
			sortItems: [
				{
					label: 'Terbaru',
					value: 'new'
				},
				{
					label: 'Vote Terbanyak',
					value: 'popular'
				},
				{
					label: 'Terlama',
					value: 'old'
				}
			],
		}
	},
}
</script>