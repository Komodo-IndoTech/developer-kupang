<template>
	<!-- <div class="pa-3 d-flex">
		<div class="mx-auto w-100" style="max-width: 500px">
			<v-alert prominent type="info" text v-bind="$attrs" class="w-100" rounded="xl">
				Dalam Pengembangan
			</v-alert>
		</div>
	</div> -->
	<div class="pa-3 flex-middle py-10">
		<div class="mx-auto w-100" style="max-width: 500px; position: relative">
			<v-btn fab absolute bottom class="shadow-md" color="white" style="right: -32px; z-index: 1">
				<span class="text-h1">
					💔
				</span>
			</v-btn>
			<v-btn fab absolute class="shadow-md" color="white" style="left: -32px; top: 4rem; z-index: 1">
				<span class="text-h3">
					💌
				</span>
			</v-btn>
			<v-card class="glass shadow-md" rounded="xl" style="z-index: 2; position: relative">
				<div class="pa-5 d-flex">
					<div class="pr-5">
						<v-img src="/img/3d/comment-crop.png" max-width="200" width="200" height="200"></v-img>
					</div>
					<div>
						<div class="flex-middle">
							<div>
								<h1 class="font-weight-black">
									Ups!
								</h1>
								<div>
									Konten ini sedang dalam pengembangan.
								</div>
							</div>
						</div>
					</div>
				</div>
			</v-card>
		</div>
	</div>
</template>
<script>
export default {
	name: 'EmptyContentPengembangan',
}
</script>