<template>
	<div>
		<v-menu offset-x nudge-right="10" top open-on-hover content-class="shadow-lg" max-width="150">
			<template #activator="{ attrs, on }">
				<v-card class="shadow" outlined rounded="lg" style="position: relative" v-bind="attrs">
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
									<rating-stars small :value="4.5"/>
								</div>
							</div>
						</div>
						<div>
							<v-btn icon v-on="on">
								<v-icon small>mdi-dots-grid</v-icon>
							</v-btn>
						</div>
					</v-card-text>
				</v-card>
			</template>
			<v-card rounded="lg" outlined dark>
				<v-list-item dense>
					<v-list-item-icon>
						<v-icon small>mdi-comment</v-icon>
					</v-list-item-icon>
					<v-list-item-content>
						<v-list-item-title>
							9+
						</v-list-item-title>
					</v-list-item-content>
				</v-list-item>
				<v-list-item dense>
					<v-list-item-icon>
						<v-icon small>mdi-eye</v-icon>
					</v-list-item-icon>
					<v-list-item-content>
						<v-list-item-title>
							{{ 19399 | number }}
						</v-list-item-title>
					</v-list-item-content>
				</v-list-item>
			</v-card>
		</v-menu>
	</div>
</template>
<script>
import RatingStars from '../../../../ratings/stars/RatingStars.vue';
export default {
  components: { RatingStars },
	props: {
		value: Object
	},
	computed: {
		item: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			}
		}
	}
}
</script>