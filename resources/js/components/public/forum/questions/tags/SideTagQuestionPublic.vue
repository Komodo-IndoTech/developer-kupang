<template>
	<div>
		<v-subheader class="font-weight-regular">
			Tag
		</v-subheader>
		<div class="pt-6 d-flex flex-column">
			<div v-for="item in items" :key="item.id" class="d-flex mb-2">
				<v-chip color="blue lighten-5" class="mr-2 rounded-lg" style="border-color: rgba(0,0,0,.15); text-transform: none; font-weight: normal; font-size: 80%">
					{{ item.name }}
				</v-chip>
				<div>
					<div class="flex-middle text--disabled">
						<small>
							&times; {{ item.count | number }}
						</small>
					</div>
				</div>
			</div>
		</div>
		<div class="py-4 mb-4">
			<a href="#" class="text-decoration-none">
				Lihat semua tag
			</a>
		</div>
	</div>
</template>
<script>
export default {
	data () {
		return {
			items: [
				{
					id: 1,
					name: 'Self',
					description: 'Kategori 1',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 1,
					count: 1000,
					parent: null,
				},
				{
					id: 2,
					name: 'Relationship',
					description: 'Kategori 2',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 2,
					count: 1000,
					parent: null,
				},
				{
					id: 3,
					name: 'Data Science',
					description: 'Kategori 3',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 3,
					count: 1000,
					parent: null,
				},
				{
					id: 4,
					name: 'Programming',
					description: 'Kategori 4',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 4,
					count: 1000,
					parent: null,
				},
				{
					id: 5,
					name: 'Productivity',
					description: 'Kategori 5',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 5,
					count: 1000,
					parent: null,
				},
				{
					id: 6,
					name: 'Javascript',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 6,
					count: 1000,
					parent: null,
				},
				{
					id: 7,
					name: 'Machine Learning',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 7,
					count: 1000,
					parent: null,
				},
				{
					id: 8,
					name: 'Politics',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 8,
					count: 1000,
					parent: null,
				},
				{
					id: 9,
					name: 'Healt',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 9,
					count: 1000,
					parent: null,
				},
			]
		}
	}
}
</script>