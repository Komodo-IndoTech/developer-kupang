<template>
	<div class="pa-3 d-flex">
		<div class="mx-auto w-100" style="max-width: 500px">
			<v-alert prominent type="info" text v-bind="$attrs" class="w-100">
				Dalam Pengembangan
			</v-alert>
		</div>
	</div>
</template>
<script>
export default {
	name: 'EmptyContentPengembangan',
}
</script>