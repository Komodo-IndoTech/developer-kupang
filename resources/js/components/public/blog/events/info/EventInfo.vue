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
		<div class="date">
			<v-slide-x-reverse-transition leave-absolute>
				<v-card :color="`${colorStatus} darken-1 white--text`" 
					dark 
					flat 
					class="fill-height"
					rounded="0">
					<v-card-text>
						<div class="mb-3">
							Tanggal & Waktu
						</div>
						<div>
							{{ Date.now() | date }}
						</div>
						<div>
							16.00 - Selesai
						</div>
					</v-card-text>
				</v-card>
			</v-slide-x-reverse-transition>
		</div>
		<div class="location">
			<v-slide-x-reverse-transition leave-absolute>
				<v-card 
					:color="`${colorStatus} darken-1 white--text`" 
					dark 
					flat
					class="fill-height" 
					rounded="0" 
					link>
					<menu-tooltip :label="'Buka link'" :icons_count="1">
						<v-card-text>
							<div class="mb-3">
								Lokasi
							</div>
							<div>
								Zoom
							</div>
							<div class="pt-3">
								<v-icon>mdi-arrow-right</v-icon>
							</div>
						</v-card-text>
					</menu-tooltip>
				</v-card>
			</v-slide-x-reverse-transition>
		</div>
		<div class="peserta">
			<v-slide-x-reverse-transition leave-absolute>
				<v-card 
					:color="`${colorStatus} darken-1 white--text`" 
					dark 
					flat
					class="fill-height" 
					rounded="0">
					<v-card-text>
						<div class="mb-3">
							Akan hadir
						</div>
						<div>
							<div class="text-h6">
								{{ 10 | number }}
							</div>
						</div>
					</v-card-text>
				</v-card>
			</v-slide-x-reverse-transition>
		</div>
		<div class="detail">
			<v-slide-x-reverse-transition leave-absolute>
				<v-card 
					:color="`${colorStatus} white--text darken-4`"  
					dark 
					flat
					class="fill-height" 
					rounded="0" 
					link>
					<v-card-text class="flex-middle">
						<div>
							Lihat rincian
						</div>
					</v-card-text>
				</v-card>
			</v-slide-x-reverse-transition>
		</div>
		<v-card dark class="footer" flat rounded="0">
			<v-card-text class="flex-middle">
				<div>
					<v-slide-y-transition mode="out-in">
						<div :key="item.id">
							<span v-if="item.id % 3 == 0" class="success--text">
								Belum dibuka
							</span>
							<span v-else-if="item.id % 3 == 1" class="warning--text">
								Sedang Berlangsung
							</span>
							<span v-else class="error--text">
								Status Selesai
							</span>
						</div>
					</v-slide-y-transition>
				</div>
			</v-card-text>
		</v-card>
		<v-card dark class="footer-action" flat rounded="0" link>
			<v-card-text class="flex-middle">
				<v-icon>mdi-arrow-right</v-icon>
			</v-card-text>
		</v-card>
		<v-card color="glass-sm" class="calendar" dark flat rounded="0" link>
			<menu-tooltip label="Pasang pengingat" :icons_count="1">
				<v-card-text class="flex-middle">
					<v-scroll-y-transition>
						<v-icon>mdi-calendar</v-icon>
					</v-scroll-y-transition>
				</v-card-text>
			</menu-tooltip>
		</v-card>
	</div>
</template>
<script>
import MenuTooltip from '../../../dummy/MenuTooltip.vue'
export default {
  components: { MenuTooltip },
	props: {
		item: {
			type: Object,
			required: true
		}
	},
	computed: {
		colorStatus(){
			return this.item.id % 3 == 0 ? 'teal' : this.item.id % 3 == 1 ? 'orange' : 'pink'
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