<template>
	<div 
		:style="{minHeight: item.id == 1 ? `calc(100vh - ${$vuetify.application.top}px - ${$vuetify.application.bottom}px - 206px)` : null}"
		class="d-flex flex-column justify-end"
		:data-id="item.id">
		<v-card 
			rounded="0" 
			flat 
			class="border-bottom"
			v-bind="$attrs"
			:id="`event-${item.id}`">
			<v-card-text>
				<div class="d-flex">
					<div class="pr-3 w-100" style="max-width: 100px">
						<div class="text-uppercase font-weight-regular">
							Senin
						</div>
						<div class="d-flex">
							<span class="text-h4 font-weight-bold pr-3" style="letter-spacing: -.25rem!important">
								10
							</span>
							<div class="pb-1">
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
										<div class="text-h6 mb-3 font-weight-regular" style="line-height: 1.5rem">
											{{ item.title }}
										</div>
										<div>
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
										</div>
									</div>
									<div class="pl-5">
										<div class="flex-middle">
											<v-icon small>mdi-arrow-right</v-icon>
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
	</div>
</template>
<script>
export default {
	/**
	 * bind item from v-model
	 * 
	 */
	props: {
		value: {
			type: Object,
		},
	},
	computed: {
		item: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			},
		}
	},
}
</script>