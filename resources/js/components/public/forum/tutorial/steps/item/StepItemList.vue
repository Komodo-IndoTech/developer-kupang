<template>
	<div>
		<slot/>
		<v-card rounded="xl" :dark="item.dark != null && item.dark" class="mb-2 mb-lg-10 shadow-md">
			<div class="d-flex justify-space-between">
				<v-card-title v-if="item.title" v-text="item.title"/>
				<v-spacer v-else></v-spacer>
				<step-item-list-head-action v-if="!simple">
					<template v-if="item.fullscreen">
						<v-btn icon @click="fullscreen = !fullscreen">
							<v-icon>mdi-fullscreen</v-icon>
						</v-btn>
						<v-dialog max-width="800" content-class="shadow-lg" v-model="fullscreen" overlay-opacity=".25">
							<v-card rounded="xl">
								<div class="d-flex justify-space-between">
									<v-card-title v-if="item.title" v-text="item.title"/>
									<v-spacer v-else></v-spacer>
									<div class="pa-3">
										<v-btn icon @click="fullscreen = !fullscreen">
											<v-icon>mdi-fullscreen-exit</v-icon>
										</v-btn>
									</div>
								</div>
								<step-item-list-template :value="item"></step-item-list-template>
								<template v-if="item.items && item.items.length">
									<step-item-list-template :value="item" v-for="(item, i) in item.items" :key="i"></step-item-list-template>
								</template>
								<step-item-list-footer-action v-if="!simple"/>
							</v-card>
						</v-dialog>
					</template>
				</step-item-list-head-action>
			</div>
			<step-item-list-template :value="item"></step-item-list-template>
			<template v-if="item.items && item.items.length">
				<step-item-list-template :value="item" v-for="(item, i) in item.items" :key="i"></step-item-list-template>
			</template>
			<step-item-list-footer-action v-if="!simple"/>
		</v-card>
	</div>
</template>
<script>
import StepItemListFooterAction from './StepItemListFooterAction.vue'
import StepItemListHeadAction from './StepItemListHeadAction.vue'
import StepItemListTemplate from './StepItemListTemplate.vue'
export default {
  	components: { StepItemListTemplate, StepItemListFooterAction, StepItemListHeadAction },
	props: {
		value: {
			type: Object,
			required: true,
		},
		simple: Boolean
	},
	computed: {
		item() {
			return this.value
		},
	},
	data() {
		return {
			fullscreen: false,	
		}
	},
	methods: {
	}
}
</script>