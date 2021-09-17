<template>
	<div>
		<!-- <div class="d-flex mb-5 justify-center">
			<v-card class="pa-3" link rounded="xl" flat color="primary lighten-5" @click="unshiftItem()">
				<v-card-text>
					<div class="d-flex">
						<div class="pr-4">
							<v-icon>mdi-chevron-up</v-icon>
						</div>
						<div>
							<div class="flex-middle">
								Muat event yang akan datang
							</div>
						</div>
					</div>
				</v-card-text>
			</v-card>
		</div> -->
		<template v-for="(item, i) in items">
			<event-item :value="item" 
				:key="item.id"
				v-intersect="onIntersect"
				@item-click="$emit('update-active-event', item || null)"
				:active="item.id == active"/>
			<v-divider :key="`divider-${item.id}`"></v-divider>
		</template>
		<template v-if="loading">
			<template v-for="i in 3">
				<event-item-placeholder :key="`placeholder-${i}`"/>
				<v-divider :key="`divider-placeholder-${i}`"></v-divider>
			</template>
		</template>
	</div>
</template>
<script>
import EventItem from '../item/EventItem.vue'
import EventItemPlaceholder from '../item/EventItemPlaceholder.vue'
export default {
  	components: { EventItem, EventItemPlaceholder },
	props: {
		active: {
			type: Number,
			default: null
		},
	},
	data() {
		return {
			firstItemId: 0,
			items: [

			],
			intersects: [],
			scroller: {
				y: 0,
				x: 0,
			},
			loading: false,
		}
	},
	computed: {
		intersects_trimed() {
			let intersects = this.intersects
			if(intersects.length > 1) {
				let offset = parseInt(intersects.length/2)
				intersects = intersects.slice(offset, offset+1)
			}
			return intersects
		},
		/**
		 * get items that contains image with already in this.intersects
		 * 
		 */
		itemsWithImage() {
			let items = new Array(this.intersects.length);
			this.items.forEach(item => {
				let index = this.intersects.findIndex(e => `${item.id}` == e)
				if (index > -1) {
					items[index] = item
				}
			});
			return items;
			/**
			 * @deprecated
			 * 
			 */
			return this.items.filter(item => {
				return this.intersects.includes(`${item.id}`)
			})
		},
		/**
		 * get first items with image
		 * 
		 */
		firstItemWithImage() {
			let val = this.itemsWithImage[0]
			return val
		},
	},
	methods: {
		unshiftItem() {
			this.items.unshift({
				id: this.items.length + 1,
				title: `Event ke-${this.items.length + 1}`,
				date: '10 September 2019',
				time: '10:00',
				location: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit earum animi ratione! Iste illum ea dolorem iusto dicta eum soluta, laudantium distinctio natus quisquam nemo ratione ad iure, vitae quia.',
				// random image
				image: `https://picsum.photos/id/${Math.floor(Math.random() * 1000)}/200/200`
			})
		},
		pushItem() {
			this.loading = true
			setTimeout(() => {
				for(let i = 0; i < 3; i++) 
					this.items.push({
						id: this.items.length + 1,
						title: `Event ke-${this.items.length + 1}`,
						date: '10 September 2019',
						time: '10:00',
						location: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit earum animi ratione! Iste illum ea dolorem iusto dicta eum soluta, laudantium distinctio natus quisquam nemo ratione ad iure, vitae quia.',
						image: `https://picsum.photos/id/${Math.floor(Math.random() * 1000)}/200/200`
					})
				this.loading = false
			}, Math.random() * 1000)
		},
		removeItem(index) {
			this.items.splice(index, 1)
		},
		updateItem(index) {
			this.items[index].title = 'Updated'
		},
		loadItems() {
			this.items = [
				{
					id: 1,
					title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
					date: '10 September 2019',
					time: '10:00',
					location: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
					image: `https://picsum.photos/id/${Math.floor(Math.random() * 1000)}/200/200`
				},
				{
					id: 2,
					title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
					date: '10 September 2019',
					time: '10:00',
					location: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
				},
				{
					id: 3,
					title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
					date: '10 September 2019',
					time: '10:00',
					location: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
					image: `https://picsum.photos/id/${Math.floor(Math.random() * 1000)}/200/200`
				},
			];
			this.firstItemId = this.items[0].id || 0;
			this.$nextTick(e=>{
				// this.$vuetify.goTo(`#event-${this.firstItemId}`);
			})
		},
		onIntersect (entries, observer) {
			// More information about these options
			// is located here: https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API

			let el = entries[0].target;
			/**
			 * get id from element data-id
			 * 
			 */
			let id = el.getAttribute('data-id');
		
			let isIntersecting = entries[0].isIntersecting;
			
			if (isIntersecting) {
				this.intersects.push(id);
			} else {
				this.intersects = this.intersects.filter(item => item !== id);
			}
		},
	},
	watch: {
		intersects(val) {
			this.$emit('update-image', this.firstItemWithImage?.image || null)
			if(this.$vuetify.breakpoint.width >= 820)
				this.$emit('update-active-event', this.firstItemWithImage || null)
		},
		scroller: {
			handler(val) {
				/**
				 * check if val.y is greater than document height - 100 - window height
				 * 
				 */
				let offsetY = window.innerHeight / 2;
				if(!this.loading && val.y >= (document.body.scrollHeight - offsetY - window.innerHeight)) {
					this.pushItem();
				}
			},
			deep: true,
		},
	},
	created() {
		this.loadItems()
		/**
		 * watch scroll changes event from window then store to this.scroller object
		 * 
		 */
		window.addEventListener('scroll', () => {
			this.scroller.y = window.pageYOffset || document.documentElement.scrollTop;
		});

	},
	mounted() {
	}
}
</script>