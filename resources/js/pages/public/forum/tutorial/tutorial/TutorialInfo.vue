<template>
	<div>
		<v-container class="pa-0" style="max-width: 1024px" id="tutorial-info">
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
				<v-card rounded="0" class="shadow" color="transparent-light">
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
									<v-badge content="9+" offset-x="14" offset-y="12" color="grey" class="mr-5">
										<v-btn icon @click="comments = true">
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
			<div class="px-lg-10 px-md-2">
				<v-tabs align-with-title>
					<v-tab>Konten</v-tab>
					<v-tab>Log</v-tab>
					<v-tab>Kontributor</v-tab>
				</v-tabs>
				<v-divider></v-divider>
			</div>
			<div class="pa-lg-10 pa-2" :style="{'margin-top': $vuetify.breakpoint.mobile ? null : null}">
				<template v-if="true">
					<step-item-list v-for="(step, i) in item.steps" :key="i" :value="step"/>
					<div class="d-flex justify-center py-5">
						<rating-stars v-model="item.rating"/>
					</div>
					<div class="d-flex py-5">
						<div class="pa-2 flex-grow-1">
							<v-card color="grey lighten-5" rounded="lg" flat link @click="report.tutorial = true">
								<v-card-text class="text-center">
									Laporkan Tutorial
								</v-card-text>
							</v-card>
						</div>
						<div class="pa-2 flex-grow-1">
							<v-card color="grey lighten-5" rounded="lg" flat link>
								<v-card-text class="text-center">
									Komentar
								</v-card-text>
							</v-card>
						</div>
					</div>
					<report-dialog-tutorial v-model="report.tutorial"/>
				</template>
				<template v-else>
					<step-item-list-placeholder v-for="i in 4" :key="i"/>
				</template>
			</div>
		</v-container>
		<!-- comments -->
		<tutorial-comment-sidebar v-model="comments"/>
	</div>
</template>
<script>
import TutorialCommentSidebar from '../../../../../components/public/forum/tutorial/comments/sidebar/TutorialCommentSidebar.vue'
import ReportDialogTutorial from '../../../../../components/public/forum/tutorial/reports/ReportDialogTutorial.vue'
import StepItemList from '../../../../../components/public/forum/tutorial/steps/item/StepItemList.vue'
import StepItemListPlaceholder from '../../../../../components/public/forum/tutorial/steps/item/StepItemListPlaceholder.vue'
import RatingStars from '../../../../../components/public/ratings/stars/RatingStars.vue'
export default {
 	components: { StepItemList, TutorialCommentSidebar, StepItemListPlaceholder, RatingStars, ReportDialogTutorial },
	data() {
		return {
			comments: true,
			report: {
				tutorial: false,
				step: false,
			},
			item: {
				id: 1,
				title: 'Flexbox and Truncated Text',
				image: 'https://picsum.photos/1920/1080?random',
				rating: 4.5,
				attrs: {
					'v-bind:style': '{ backgroundImage: "url(" + image + ")" }'
				},
				content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
				date: '12/12/2019',
				folder: true,
				category: 'CSS',
				steps: [
					{
						id: 1,
						title: 'Problem',
						type: 'text',
						content: `Situation: you have a single line of text in a flex child element. You don’t want that text to wrap, you want it truncated with ellipsis (or fall back to just hiding the overflow). But the worst happens. The unthinkable! The layout breaks and forces the entire flex parent element too wide. Flexbox is supposed to be helping make layout easier!`,
						items: [
							{
								id: 21,
								title: '',
								type: 'text',
								content: `Fortunately, there is a (standardized) solution. You just need to use a non-flexbox property/value to do it.`,
							}
						]
					},
					{
						id: 2,
						title: 'What we want',
						type: 'image',
						content: {
							src: 'https://i1.wp.com/css-tricks.com/wp-content/uploads/2016/05/want.gif',
							alt: 'Flexbox and Truncated Text | css-tricks.com'
						},
					},
					{
						id: 3,
						title: 'The potential problem',
						type: 'image',
						content: {
							src: 'https://i0.wp.com/css-tricks.com/wp-content/uploads/2016/05/busted.gif',
							alt: 'Flexbox and Truncated Text | css-tricks.com'
						},
						items: [
							{
								id: 31,
								title: '',
								type: 'text',
								content: `Not only might this prevent the narrowing of a container, it might blow a container out super wide.`,
							}
						]
					},
					{
						id: 4,
						title: 'Child elements (of the flex child) are the issue',
						type: 'text',
						content: `Confusing things a bit… if the text at hand is directly within the flex child, things work fine:`,
					},
					{
						id: 5,
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
						id: 6,
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
						id: 7,
						title: '',
						type: 'text',
						content: `The problem comes up when there are child elements, like:`
					},
					{
						id: 8,
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
						id: 9,
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
						id: 10,
						title: 'Demo',
						type: 'embed',
						// dark: false,
						fullscreen: true,
						content: `
					<iframe height="300" style="width: 100%;" scrolling="no" title="Thing you gotta know about flexbox" src="https://codepen.io/chriscoyier/embed/zqedEr?default-tab=html%2Cresult" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
						See the Pen <a href="https://codepen.io/chriscoyier/pen/zqedEr">
						Thing you gotta know about flexbox</a> by Chris Coyier  (<a href="https://codepen.io/chriscoyier">@chriscoyier</a>)
						on <a href="https://codepen.io">CodePen</a>.
					</iframe>`
					},
					{
						id: 11,
						title: 'Code Git',
						type: 'gist',
						content: {
							username: `agriedd`,
							file: `Hello World Javascript.js`,
							id: `324744ea0bfaa89553f2ad45b3cfa771`
						}
					},
				]
			},
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
	.tutorial-comment-container{

		transition: all .2s cubic-bezier(.4,0,.2,1);
			// , max-height .2s cubic-bezier(.4,0,.2,1);

		.tutorial-comment{
			height: 100%;
			overflow-y: auto;
			overflow-x: hidden !important;
			&::-webkit-scrollbar{
				width: .5rem;
			}
			&::-webkit-scrollbar-thumb{
				transition: all .25s ease;
				background: rgba($color: #000, $alpha: 0);
				border-radius: 5px;
			}
			&:hover::-webkit-scrollbar-thumb{
				background: rgba($color: #000, $alpha: .25);
			}
		}
	}
</style>