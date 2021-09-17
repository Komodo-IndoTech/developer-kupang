<template>
	<div>
		<div class="py-5">
			<div class="d-grid-blog w-100" style="max-width: 1024px">
				<div class="px-5">
					<list-event-public @update-active-event="updateEvent($event)"/>
				</div>
				<div class="pa-4 sidebar">
					<div class="d-flex">
						<date-filter-event class="mx-auto" style="max-width: 440px"/>
					</div>
					<div v-if="item" class="sticky-top fill-height" :style="{ top: `${$vuetify.application.top}px`, maxHeight: `calc(100vh - ${$vuetify.application.top}px - ${$vuetify.application.bottom}px)` }">
						<event-info :item="item"/>
					</div>
				</div>
			</div>			
		</div>
		<v-container fluid>
			
		</v-container>
	</div>
</template>
<script>
import DateFilterEvent from '../../../../components/public/blog/events/filters/DateFilterEvent.vue';
import EventInfo from '../../../../components/public/blog/events/info/EventInfo.vue';
import ListEventPublic from '../../../../components/public/blog/events/list/ListEventPublic.vue'
export default {
  	components: { ListEventPublic, DateFilterEvent, EventInfo },
	data() {
		return {
			image: null,
			item: null,
		}
	},
	methods: {
		updateImage(image) {
			if(image)
				this.image = image
		},
		updateEvent(item) {
			if(item)
				this.item = item
		},
	},
	created(){

	}
}
</script>
<style lang="scss" scoped>
	.d-grid-blog {
		padding: 20px 0px;
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  		// grid-auto-flow: column;
		// overflow-x: auto;
		grid-gap: 20px;
		@for $i from 1 through 4 {
			& > .colspan-#{$i} {
				grid-column-end: span #{$i};
			}
		}
	}
	@media screen and (max-width: 880px) {
		.row-1-sm {
			grid-row-start: 1;
		}
		.d-grid-blog {
			// grid-template-columns: 0rem repeat(auto-fit, minmax(400px, 1fr));
			.sidebar{
				grid-row: 1;
			}
			@for $i from 1 through 4 {
				& > .colspan-#{$i} {
					grid-column-end: span 1;
				}
			}
		}
	}
</style>