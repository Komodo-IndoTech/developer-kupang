<template>
	<div class="d-grid">
		<v-img :src="item.image" :key="item.id" max-width="100%" class="image grey lighten-1"></v-img>
		<div class="pa-10 title" style="position: relative; z-index: 1">
			<v-slide-y-transition mode="out-in">
				<div class="text-h6 white--text" :key="item.title">
					{{ item.title }}
				</div>
			</v-slide-y-transition>
		</div>
		<div class="pa-4 overlay-title">
		</div>
		<v-card color="pink" class="date" dark flat rounded="0">
			<v-card-text>
				{{ item.date }}
			</v-card-text>
		</v-card>
		<v-card color="pink" class="location" dark flat rounded="0">
			<v-card-text>
				{{ item.date }}
			</v-card-text>
		</v-card>
		<v-card color="pink" class="peserta" dark flat rounded="0">
			<v-card-text>
				{{ item.date }}
			</v-card-text>
		</v-card>
		<v-card color="pink darken-4" class="detail" dark flat rounded="0">
			<v-card-text>
				{{ item.date }}
			</v-card-text>
		</v-card>
		<v-card dark class="footer" flat rounded="0">
			<v-card-text>
				lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</v-card-text>
		</v-card>
		<v-card dark class="footer-action" flat rounded="0">
			<v-card-text class="flex-middle">
				<v-icon>mdi-arrow-right</v-icon>
			</v-card-text>
		</v-card>
		<v-card color="glass-sm" class="calendar" dark flat rounded="0">
			<v-card-text class="flex-middle">
				<v-icon>mdi-calendar</v-icon>
			</v-card-text>
		</v-card>
	</div>
</template>
<script>
export default {
	props: {
		item: {
			type: Object,
			required: true
		}
	}
}
</script>
<style lang="scss" scoped>
	.d-grid {
		display: grid;
		grid-template-areas:
			"a a a"
			"a5 a5 a5"
			"a4 a4 a4"
			"a1 a2 a3"
			"b c d"
			"e f h"
			"g g h";
		grid-template-columns: repeat(3, 1fr);
		grid-template-rows: 1fr auto auto 2rem 100px 100px 100px;
		min-height: 100%;
		// gap: 1px;

		.image {
			grid-area: a;
			width: 100%;
			grid-row-end: d;
		}
		.title {
			grid-area: a4;
			width: 100%;
		}
		.date {
			grid-area: a1;
			width: 100%;
			grid-row-end: b;
		}
		.location {
			grid-area: a2;
			grid-row-end: c;
		}
		.calendar {
			grid-area: d;
		}
		.peserta {
			grid-area: e;
		}
		.detail {
			grid-area: f;
		}
		.footer {
			grid-area: g;
		}
		.footer-action {
			grid-area: h;
		}
		.overlay-title {
			grid-area: a5;
			grid-row-end: a3;
			position: relative;
			background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.5));
		}
	}
</style>