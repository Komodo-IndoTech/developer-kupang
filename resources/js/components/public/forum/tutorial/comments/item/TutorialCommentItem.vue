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
			<v-card rounded="xl" color="grey lighten-5" flat>
				<v-card-text class="pb-2">
					<h4>
						{{ comment.user.name }}
					</h4>
				</v-card-text>
				<v-card-text class="pt-0">
					{{ comment.content }}
				</v-card-text>
			</v-card>
			<slot name="quote"></slot>
			<div class="pt-0 d-flex px-2">
				<div class="mr-2">
					<div class="flex-middle">
						<small>
							2d ago
						</small>
					</div>
				</div>
				<div class="mr-2">
					<v-btn icon>
						<v-icon small>mdi-arrow-up-bold-outline</v-icon>
					</v-btn>
				</div>
				<div class="mr-2">
					<v-btn icon>
						<v-icon small>mdi-arrow-down-bold-outline</v-icon>
					</v-btn>
				</div>
				<div class="mr-2">
					<v-btn icon>
						<v-icon small>mdi-reply-outline</v-icon>
					</v-btn>
				</div>
				<v-spacer></v-spacer>
				<div>
					<v-btn icon>
						<v-icon small>mdi-dots-vertical</v-icon>
					</v-btn>
				</div>
			</div>
			<slot></slot>
		</div>
	</div>
</template>
<script>
export default {
	props: {
		value: {
			type: Object,
			default: () => ({})
		}
	},
	computed: {
		comment() {
			return this.value;
		}
	}
}
</script>