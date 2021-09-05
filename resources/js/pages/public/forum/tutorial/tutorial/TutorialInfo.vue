<template>
	<div>
		<!-- <div class="d-grid-blog">
			<div class="colspan-2">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus ab molestiae laborum error quaerat nostrum nulla harum in voluptas modi magni, neque blanditiis tempore, sunt ipsam, quo unde? Repellendus, doloribus.
			</div>
			<div>
				<v-subheader>
					Komentar
				</v-subheader>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem pariatur molestias similique. Debitis dolorum quos voluptate quas quidem? Fuga quod cum perspiciatis enim molestias aut velit quibusdam! Sequi, voluptas iste.
			</div>
		</div> -->
		<div class="pa-3">
			<v-app-bar
				prominent
				:src="item.image"
				fade-img-on-scroll
				flat
				height="400"
				class="rounded-xl"
				dark>
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
								<v-badge content="9+" offset-x="16" offset-y="16" color="grey">
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
			<v-card flat rounded="xl" :color="step.type === 'code' ? 'purple darken-4' : 'grey lighten-5' " :dark="step.type === 'code'" v-for="(step, i) in item.steps" :key="i" class="mb-2">
				<div class="d-flex justify-space-between">
					<v-card-title v-if="step.title" v-text="step.title"/>
					<v-spacer v-else></v-spacer>
					<div class="pa-3">
						<v-btn icon style="top: 0px">
							<v-icon small>mdi-dots-vertical</v-icon>
						</v-btn>
					</div>
				</div>
				<v-card-text>
					<template v-if="step.type === 'code'">
						<pre>
							{{ step.content }}
						</pre>
					</template>
					<template v-else-if="step.type === 'embed'">
						<div v-html="step.content"></div>
					</template>
					<template v-else-if="step.type === 'image'">
						<v-img :src="step.content.src" class="rounded-xl" max-width="600"></v-img>
						<div class="pt-2">
							<code>
								{{ step.content.alt }}
							</code>
						</div>
					</template>
					<template v-else>
						{{ step.content }}
					</template>
				</v-card-text>
				<template v-if="step.items && step.items.length">
					<v-card-text v-for="(item, i) in step.items" :key="i">
						<template v-if="item.type === 'code'">
							<pre>
								{{ item.content }}
							</pre>
						</template>
						<template v-else-if="item.type === 'embed'">
							<div v-html="item.content"></div>
						</template>
						<template v-else>
							<p>
								{{ item.content }}
							</p>
						</template>
					</v-card-text>
				</template>
				<div class="d-flex justify-space-between">
					<div class="px-3 pb-3">
						<div class="d-flex">
							<v-btn icon style="top: 0px">
								<v-icon small>mdi-history</v-icon>
							</v-btn>
							<div class="text--disabled">
								<div class="flex-middle">
									<small>
										terakhir diubah 1menit yang lalu
									</small>
								</div>
							</div>
						</div>
					</div>
					<v-spacer></v-spacer>
					<div class="px-3 pb-3">
						<v-btn icon style="top: 0px">
							<v-icon small>mdi-reply</v-icon>
						</v-btn>
					</div>
				</div>
			</v-card>
		</div>
		<!-- comments -->
		<v-navigation-drawer right fixed floating app width="400" bottom clipped mobile-breakpoint="800">
			<div class="pa-3">
				<div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, similique! Sapiente tempora alias laborum temporibus mollitia reiciendis culpa, excepturi quam necessitatibus ullam, aspernatur adipisci praesentium nobis distinctio quod saepe voluptatibus!
				</div>
			</div>
		</v-navigation-drawer>
	</div>
</template>
<script>
export default {
	data() {
		return {
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