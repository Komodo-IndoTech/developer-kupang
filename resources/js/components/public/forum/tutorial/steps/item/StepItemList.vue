<template>
	<div>
		<slot/>
		<v-card flat rounded="xl" :color="item.type === 'code' ? 'purple darken-4' : 'grey lighten-5' " :dark="item.type === 'code'" class="mb-2">
			<div class="d-flex justify-space-between">
				<v-card-title v-if="item.title" v-text="item.title"/>
				<v-spacer v-else></v-spacer>
				<step-item-list-head-action v-if="!simple"/>
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
}
</script>