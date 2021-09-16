<template>
	<v-card rounded="xl" flat class="w-100">
		<div class="" style="position: relative">
			<v-slide-y-transition tag="div" class="d-grid px-2" mode="out-in">
				<div :key="year">
					<v-card rounded="pill" flat class="noselect">
						<div class="d-flex flex-column justify-center fill-height">
							<v-card-text class="text-center text-h6 py-0 my-0 text--disabled">
								{{ year }}
							</v-card-text>
						</div>
					</v-card>
				</div>
			</v-slide-y-transition>
			<v-scale-transition leave-absolute group tag="div" class="d-grid pa-2" mode="out-in">
				<div v-for="item in items_month" :key="item.month">
					<v-card rounded="pill" flat class="noselect" @click="selectDate(item)">
						<div class="d-flex flex-column justify-center fill-height py-4">
							<v-card-text class="text-center text-h5 font-weight-black py-0 my-0" :class="[ item.time == selected ? 'indigo--text text--lighten-2' : 'grey--text text--lighten-3' ]">
								{{ item.month }}
							</v-card-text>
						</div>
					</v-card>
				</div>
			</v-scale-transition>
			<!-- Minggu dalam tahun -->
			<v-scale-transition leave-absolute group tag="div" class="d-grid pa-2" mode="out-in">
				<div v-for="item in items_week" :key="item.week">
					<menu-tooltip :label="`Minggu ke-${item.week}`" :icons_count="1">
						<v-card rounded="pill" flat class="item-hari noselect" 
							:color="item.time == selected ? 'indigo lighten-5' : null" 
							@click="selectDate(item)"
							style="height: 40px; width: 40px">
							<div class="d-flex flex-column justify-center fill-height">
								<v-card-text class="text-center pa-0 my-0" :class="[  ]">
									{{ item.week }}
								</v-card-text>
							</div>
						</v-card>
					</menu-tooltip>
				</div>
			</v-scale-transition>
			<v-scale-transition leave-absolute group tag="div" class="d-grid pa-2" mode="out-in">
				<div v-for="item in items" :key="item.date">
					<v-card rounded="pill" flat class="item-hari noselect" :color="item.time == selected ? 'indigo' : null" :dark="item.time == selected" @click="selectDate(item)">
						<div class="d-flex flex-column justify-center fill-height py-5">
							<v-card-text class="text-center text-h6 py-0" :class="[ item.libur != null && item.libur ? 'error--text' : null ]">
								{{ item.date }}
							</v-card-text>
							<v-card-text class="py-0 text-center text-truncate" :class="[ item.libur != null && item.libur && item.time != selected ? 'text--disabled' : null ]">
								{{ item.label }}
							</v-card-text>
							<!-- <v-card-text class="text-center py-0" :class="[ item.libur != null && item.libur && item.time != selected ? 'text--disabled' : null ]">
								{{ item.month }}
							</v-card-text> -->
						</div>
					</v-card>
				</div>
			</v-scale-transition>
			<div style="position: absolute; top: 0px; right: 0px; width: 4rem; height: 100%; 
				background: linear-gradient(to left, #fff, transparent); pointer-events: none">
			</div>
			<div style="position: absolute; top: 0px; left: 0px; width: 4rem; height: 100%; 
				background: linear-gradient(to right, #fff, transparent); pointer-events: none">
			</div>
		</div>
	</v-card>
</template>
<script>
import moment from 'moment'
import { mapMutations } from 'vuex'
import MenuTooltip from '../../../dummy/MenuTooltip.vue'
export default {
  components: { MenuTooltip },
	props: {
		range: {
			type: Number,
			default: 7
		},
		month_range: {
			type: Number,
			default: 3
		},
		week_range: {
			type: Number,
			default: 9
		},
	},
	data(){
		return {
			items_temp: [
				{ value: 'senin', label: 'Senin', mingguan: true, weekday: 1, month: 'Agu', date: '02'},
				{ value: 'selas', label: 'Selasa', mingguan: true, weekday: 1, month: 'Agu', date: '03'},
				{ value: 'rabu', label: 'Rabu', mingguan: true, weekday: 1, month: 'Agu', date: '04'},
				{ value: 'kamis', label: 'Kamis', mingguan: true, weekday: 1, month: 'Agu', date: '05'},
				{ value: 'jumat', label: 'Jumat', mingguan: true, weekday: 1, month: 'Agu', date: '06'},
				{ value: 'sabtu', label: 'Sabtu', mingguan: true, weekday: 1, month: 'Agu', date: '07'},
				{ value: 'minggu', label: 'Minggu', mingguan: true, weekday: 1, month: 'Agu', date: '08', libur: true},
			],
			selected: 0,
			handler: null
		}
	},
	computed: {
		midrange(){
			return parseInt(this.range / 2)
		},
		midrange_month(){
			return parseInt(this.month_range / 2)
		},
		midrange_week(){
			return parseInt(this.week_range / 2)
		},
		month(){
			/**
			 * get month from selected date
			 * 
			 */
			let selected = moment(this.selected)
			return selected.format('MMMM')
		},
		year(){
			/**
			 * get month from selected date
			 * 
			 */
			let selected = moment(this.selected)
			return selected.format('YYYY')
		},
		items(){
			let items = []
			let selected = moment(this.selected)
			let first_item = selected.subtract(this.midrange + 1, 'day')
			let item = first_item
			for(let i = 0; i < this.range; i++){
				item.add(1, 'day')
				item.locale('id-ID')
				items.push({
					time: item.valueOf(),
					value: item.format('d'), label: item.format('ddd'), month: item.format('MMM'), date: item.format('DD'),
					libur: item.format('d') == 0
				})
			}
			return items
		},
		/**
		 * return items of week according on selected date
		 * 
		 */
		items_week(){
			let items = []
			let selected = moment(this.selected).locale('id-ID')
			let first_item = selected.subtract(this.midrange_week + 1, 'week')
			let item = first_item
			for(let i = 0; i < this.week_range; i++){
				item.add(1, 'week')
				item.locale('id-ID')
				items.push({
					time: item.valueOf(),
					value: item.format('d'), label: item.format('ddd'), month: item.format('MMM'), date: item.format('DD'),
					libur: item.format('d') == 0,
					week: item.isoWeek()
				})
			}
			return items
		},
		items_month(){
			let items = []
			let selected = moment(this.selected).locale('id-ID')
			let first_item = selected.subtract(this.midrange_month + 1, 'month')
			let item = first_item
			for(let i = 0; i < this.month_range; i++){
				item.add(1, 'month')
				item.locale('id-ID')
				items.push({
					time: item.valueOf(),
					value: item.format('d'), label: item.format('ddd'), month: item.format('MMMM'), date: item.format('DD'),
					libur: item.format('d') == 0,
				})
			}
			return items
		},
	},
	methods: {
		...mapMutations({
			selectDay: 'jadwal/options/SET_HARI'
		}),
		nextDate(add = 1){
			this.selected = moment(this.selected).add(add, 'day').valueOf()
		},
		prevDate(sub = 1){
			this.selected = moment(this.selected).subtract(sub, 'day').valueOf()
		},
		selectDate(date){
			this.selected = date.time
		},
	},
	watch: {
		selected(val){
			if(this.handler)
				clearTimeout(this.handler)
			this.handler = setTimeout(e => {
				let day = moment(val).locale('id-ID').format('dddd')
				this.$emit('selected', day)
				this.selectDay(day)
			}, 800)
		}
	},
	created(){
		this.selected = Date.now()
		// window.m = moment
	}
}
</script>
<style lang="scss" scoped>
	.d-grid {
		display: grid;
		grid-auto-columns: 1fr;
  		grid-auto-flow: column;
		overflow-x: auto;
		justify-content: center;
		gap: .5rem;
		overflow: hidden;
		.item-hari{
			width: 60px;
			&::before{
				border-radius: 4rem;
			}
		}
	}
</style>