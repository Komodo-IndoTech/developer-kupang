<template>
	<div class="d-flex mb-2">
		<div class="pr-3 pt-2">
			<v-avatar size="30">
				<img :src="comment.user.avatar" alt="">
			</v-avatar>
			<div class="pt-2 text-center">
				<small>
					{{ comment.up - comment.down }}
				</small>
			</div>
		</div>
		<div class="grow-1" style="min-width: 0px">
			<v-card rounded="xl" color="grey lighten-5" flat
				@contextmenu="show">
				<v-card-text class="pb-2">
					<h4>
						{{ comment.user.name }}
					</h4>
				</v-card-text>
				<v-card-text class="pt-0">
					{{ comment.content }}
				</v-card-text>
			</v-card>
			<v-menu 
				content-class="shadow-lg" 
				max-width="200" 
				absolute 
				v-model="contextmenu.show"
				:position-x="contextmenu.x" 
				:position-y="contextmenu.y" 
				transition="slide-y-transition">
				<tutorial-comment-item-menu/>
			</v-menu>
			<slot name="quote"></slot>
			<tutorial-comment-item-footer>
				<div>
					<v-menu content-class="shadow-lg" max-width="200" offset-y top offset-x right nudge-top="10" nudge-right="10" transition="slide-y-reverse-transition">
						<template v-slot:activator="{ on, attrs }">
							<v-btn icon v-bind="attrs" v-on="on">
								<v-icon small>mdi-dots-vertical</v-icon>
							</v-btn>
						</template>
						<tutorial-comment-item-menu/>
					</v-menu>
				</div>
			</tutorial-comment-item-footer>
			<slot></slot>
		</div>
	</div>
</template>
<script>
import TutorialCommentItemFooter from './footer/TutorialCommentItemFooter.vue';
import TutorialCommentItemMenu from './menu/TutorialCommentItemMenu.vue';
export default {
  components: { TutorialCommentItemMenu, TutorialCommentItemFooter },
	props: {
		value: {
			type: Object,
			default: () => ({})
		}
	},
	data() {
		return {
			contextmenu: {
				x: 0,
				y: 0,
				show: false,
			}
		}
	},
	computed: {
		comment() {
			return this.value;
		}
	},
	methods: {
		show(e) {
			e.preventDefault()
			this.contextmenu.show = false
			this.contextmenu.x = e.clientX
			this.contextmenu.y = e.clientY
			this.$nextTick(() => {
				this.contextmenu.show = true
			})
		}
	}
}
</script>