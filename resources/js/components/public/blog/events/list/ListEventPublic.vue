<template>
	<div>
		<div class="d-flex mb-5 justify-center">
			<v-card class="pa-3" link rounded="lg" flat color="primary lighten-5" @click="unshiftItem()">
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
		</div>
		<template v-for="(item, i) in items">
			<v-card :key="item.id" 
				rounded="0" 
				flat 
				class="border-bottom"
				v-intersect="onIntersect" 
				:id="`event-${item.id}`" @click="pushItem()"
				:data-id="item.id">
				<v-card-text>
					<div class="d-flex">
						<div class="pr-10">
							<div class="text-h6 text-uppercase font-weight-regular">
								Senin
							</div>
							<div class="d-flex">
								<span class="text-h3 font-weight-bold pr-3" style="letter-spacing: -.25rem!important">
									10
								</span>
								<div>
									<span class="d-flex align-end fill-height">
										Sep.
									</span>
								</div>
							</div>
						</div>
						<div>
							<div class="flex-middle">
								<div>
									<div class="d-flex">
										<div>
											<div class="text-h6 mb-3">
												{{ item.title }}
											</div>
											<div>
												Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit earum animi ratione! Iste illum ea dolorem iusto dicta eum soluta, laudantium distinctio natus quisquam nemo ratione ad iure, vitae quia.
											</div>
										</div>
										<div class="pl-5">
											<div class="flex-middle">
												<v-icon>mdi-arrow-right</v-icon>
											</div>
										</div>
									</div>
									<!-- <div v-if="item.image" class="py-5">
										<v-img :src="item.image" class="shadow-md rounded-lg" height="300"></v-img>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</v-card-text>
			</v-card>
			<v-divider :key="`divider-${item.id}`"></v-divider>
		</template>
	</div>
</template>
<script>
export default {
	data() {
		return {
			firstItemId: 0,
			items: [

			],
			intersects: [],
		}
	},
	computed: {
		/**
		 * get items that contains image with already in this.intersects
		 * 
		 */
		itemsWithImage() {
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
			this.items.push({
				id: this.items.length + 1,
				title: `Event ke-${this.items.length + 1}`,
				date: '10 September 2019',
				time: '10:00',
				location: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit earum animi ratione! Iste illum ea dolorem iusto dicta eum soluta, laudantium distinctio natus quisquam nemo ratione ad iure, vitae quia.',
				image: `https://picsum.photos/id/${Math.floor(Math.random() * 1000)}/200/200`
			})
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
		}
	},
	created() {
		this.loadItems()
	},
	mounted() {
	}
}
</script>