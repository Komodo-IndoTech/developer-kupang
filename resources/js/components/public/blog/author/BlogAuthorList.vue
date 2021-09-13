<template>
	<div class="d-flex">
		<div>
			<div class="flex-middle">
				<v-avatar>
					<v-img :src="item.image"></v-img>
				</v-avatar>
			</div>
		</div>
		<div class="px-3">
			<div class="d-flex">
				<div>
					<div class="flex-middle">
						{{ item.author }}
					</div>
				</div>
				<div class="pl-3">
					<v-chip color="teal" dark class="px-5" small>
						Follow
					</v-chip>
				</div>
			</div>
			<div class="text-muted">
				{{ item.date | date }}
			</div>
		</div>
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