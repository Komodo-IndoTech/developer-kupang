<template>
	<v-card 
		rounded="0" 
		flat 
		class="border-bottom"
		v-bind="$attrs">
		<v-card-text>
			<div class="d-flex">
				<div class="pr-3 w-100" style="max-width: 100px">
					<v-skeleton-loader type="text" width="32"/>
					<div class="d-flex">
						<v-skeleton-loader type="image" height="40" width="40"/>
						<div class="pb-1">
							<v-skeleton-loader type="text"/>
						</div>
					</div>
				</div>
				<div class="flex-grow-1">
					<div class="flex-middle w-100">
						<div>
							<div class="d-flex w-100">
								<div class="flex-grow-1" style="min-width: 0px">
									<div class="mb-3">
										<v-skeleton-loader type="text" width="150"/>
									</div>
									<div>
										<v-skeleton-loader type="text@2" width="200"/>
									</div>
								</div>
								<div class="pl-5 ml-auto">
									<div class="flex-middle">
										<v-skeleton-loader type="text" width="16"/>
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
</template>
<script>
export default {
}
</script>