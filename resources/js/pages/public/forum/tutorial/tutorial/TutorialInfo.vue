<template>
	<div>
		<v-container class="pa-0" style="max-width: 1024px">
			<div class="pa-3">
				<v-app-bar
					prominent
					:src="item.image"
					fade-img-on-scroll
					flat
					height="400"
					class="rounded-xl"
					dark
					color="blue-grey darken-3">
					<div class="align-self-center mx-auto">
						<div class="text-center">
							#{{ item.category }}
						</div>
						<div class="text-center font-weight-bold">
							{{ item.title }}
						</div>
					</div>
				</v-app-bar>
			</div>
			<div class="sticky-top" :style="{ top: `${$vuetify.application.top}px` }" style="transition: top .2s cubic-bezier(.4,0,.2,1)">
				<v-card flat rounded="0" color="transparent-light">
					<v-card-text class="py-1">
						<div class="d-flex">
							<div class="pr-3">
								<div class="content-middle">
									<v-avatar rounded="lg">
										<v-img :src="item.image"/>
									</v-avatar>
								</div>
							</div>
							<div class="grow-1 w-100" style="min-width: 0;">
								<div class="text-truncate font-weight-bold">
									{{ item.title }}
								</div>
								<v-chip-group class="py-0">
									<v-chip color="blue lighten-4" small>
										<v-icon left>mdi-tag</v-icon>
										<span>{{ item.category }}</span>
									</v-chip>
									<v-chip color="primary" small>
										<v-icon left>mdi-account</v-icon>
										<span>@agriedd</span>
									</v-chip>
								</v-chip-group>
							</div>
							<div class="pl-3">
								<div class="content-middle">
									<v-badge content="9+" offset-x="14" offset-y="12" color="grey">
										<v-btn icon>
											<v-icon>mdi-comment-outline</v-icon>
										</v-btn>
									</v-badge>
								</div>
							</div>
						</div>
					</v-card-text>
				</v-card>
				<v-divider v-if="$vuetify.breakpoint.mobile"></v-divider>
				<!-- <div class="w-100" style="height: 3rem; background: linear-gradient(to bottom, rgba(255,255,255, .9), transparent)" v-else></div> -->
			</div>
			<div>
				<v-tabs align-with-title>
					<v-tab>Konten</v-tab>
					<v-tab>Log</v-tab>
					<v-tab>Kontributor</v-tab>
				</v-tabs>
				<v-divider></v-divider>
			</div>
			<div class="pa-lg-4 pa-2" :style="{'margin-top': $vuetify.breakpoint.mobile ? null : null}">
				<step-item-list v-for="(step, i) in item.steps" :key="i" :value="step"/>
			</div>
		</v-container>
		<!-- comments -->
		<v-navigation-drawer right fixed floating app width="450" bottom clipped mobile-breakpoint="800" class="shadow-md ml-4" v-model="comments" :style="{'max-height': $vuetify.breakpoint.width <= 800 ? '90%' : `calc(100vh - ${$vuetify.application.top})`}">
			<template #prepend>
				<!-- <v-divider></v-divider> -->
			</template>
			<div class="pa-3 pl-lg-5">
				<div class="pa-3 sticky-top mb-5" style="z-index: 2">
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
				<div class="pa-3 sticky-bottom mt-5" style="z-index: 2">
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
			</div>
			<!-- <template #append> -->
				<!-- <v-divider></v-divider> -->
			<!-- </template> -->
		</v-navigation-drawer>
	</div>
</template>
<script>
import TutorialCommentList from '../../../../../components/public/forum/tutorial/comments/list/TutorialCommentList.vue'
import StepItemList from '../../../../../components/public/forum/tutorial/steps/item/StepItemList.vue'
export default {
 	components: { StepItemList, TutorialCommentList },
	data() {
		return {
			comments: true,
			item: {
				id: 1,
				title: 'Flexbox and Truncated Text',
				image: 'https://picsum.photos/1920/1080?random',
				attrs: {
					'v-bind:style': '{ backgroundImage: "url(" + image + ")" }'
				},
				content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
				date: '12/12/2019',
				folder: true,
				category: 'CSS',
				steps: [
					{
						title: 'Problem',
						type: 'text',
						content: `Situation: you have a single line of text in a flex child element. You don’t want that text to wrap, you want it truncated with ellipsis (or fall back to just hiding the overflow). But the worst happens. The unthinkable! The layout breaks and forces the entire flex parent element too wide. Flexbox is supposed to be helping make layout easier!`,
						items: [
							{
								title: '',
								type: 'text',
								content: `Fortunately, there is a (standardized) solution. You just need to use a non-flexbox property/value to do it.`,
							}
						]
					},
					{
						title: 'What we want',
						type: 'image',
						content: {
							src: 'https://i1.wp.com/css-tricks.com/wp-content/uploads/2016/05/want.gif',
							alt: 'Flexbox and Truncated Text | css-tricks.com'
						},
					},
					{
						title: 'The potential problem',
						type: 'image',
						content: {
							src: 'https://i0.wp.com/css-tricks.com/wp-content/uploads/2016/05/busted.gif',
							alt: 'Flexbox and Truncated Text | css-tricks.com'
						},
						items: [
							{
								title: '',
								type: 'text',
								content: `Not only might this prevent the narrowing of a container, it might blow a container out super wide.`,
							}
						]
					},
					{
						title: 'Child elements (of the flex child) are the issue',
						type: 'text',
						content: `Confusing things a bit… if the text at hand is directly within the flex child, things work fine:`,
					},
					{
						title: '',
						type: 'code',
						content: `
<div class="flex-parent">
	<div class="flex-child">
		Text to truncate here.
	</div>
	<div class="flex-child">
		Other stuff.
	</div>
</div>`
					},
					{
						title: '',
						type: 'code',
						content: `
/* Text is directly within flex child,
   so doing the wrapping here */
.flex-child {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}`
					},
					{
						title: '',
						type: 'text',
						content: `The problem comes up when there are child elements, like:`
					},
					{
						title: '',
						type: 'code',
						content: `
<div class="flex-parent">
  <div class="flex-child">
    <h2>Text to truncate here.</h2>
  </div>
  <div class="flex-child">
    Other stuff.
  </div>
</div>`
					},
					{
						title: '',
						type: 'code',
						content: `
/* Text is a header now,
  so need to truncate there for it to work */
.flex-child > h2 {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}`
					},
					{
						title: 'Demo',
						type: 'embed',
						content: `
					<iframe height="300" style="width: 100%;" scrolling="no" title="Thing you gotta know about flexbox" src="https://codepen.io/chriscoyier/embed/zqedEr?default-tab=html%2Cresult" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
						See the Pen <a href="https://codepen.io/chriscoyier/pen/zqedEr">
						Thing you gotta know about flexbox</a> by Chris Coyier  (<a href="https://codepen.io/chriscoyier">@chriscoyier</a>)
						on <a href="https://codepen.io">CodePen</a>.
					</iframe>`
					},
				]
			},
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
	created(){
		console.log(this.$vuetify.breakpoint)
	}
}
</script>
<style lang="scss" scoped>
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