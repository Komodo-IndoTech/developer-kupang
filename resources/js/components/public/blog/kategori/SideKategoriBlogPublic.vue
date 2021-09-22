<template>
	<div>
		<v-subheader class="font-weight-bold text-uppercase">
			<small>
				Kategori Pilihan
			</small>
		</v-subheader>
		<div class="pt-6">
			<v-btn outlined v-for="item in items" :key="item.id" class="mr-2 mb-2" style="border-color: rgba(0,0,0,.15); text-transform: none; font-weight: normal; font-size: 80%">
				{{ item.name }}
			</v-btn>
		</div>
		<div class="py-4 mb-4">
			<a href="#" class="text-decoration-none">
				Lihat semua topik
			</a>
		</div>
		<v-divider></v-divider>
		<div class="pt-6">
			<a href="#" class="text-decoration-none mb-3 mr-3 text--disabled" style="text-transform: none; font-weight: normal;">
				Bantuan
			</a>
			<a href="#" class="text-decoration-none mb-3 mr-3 text--disabled" style="text-transform: none; font-weight: normal;">
				Status
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
					parent: null,
				},
				{
					id: 2,
					name: 'Relationship',
					description: 'Kategori 2',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 2,
					parent: null,
				},
				{
					id: 3,
					name: 'Data Science',
					description: 'Kategori 3',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 3,
					parent: null,
				},
				{
					id: 4,
					name: 'Programming',
					description: 'Kategori 4',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 4,
					parent: null,
				},
				{
					id: 5,
					name: 'Productivity',
					description: 'Kategori 5',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 5,
					parent: null,
				},
				{
					id: 6,
					name: 'Javascript',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 6,
					parent: null,
				},
				{
					id: 7,
					name: 'Machine Learning',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 7,
					parent: null,
				},
				{
					id: 8,
					name: 'Politics',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 8,
					parent: null,
				},
				{
					id: 9,
					name: 'Healt',
					description: 'Kategori 6',
					icon: 'fa fa-folder',
					color: '#f0f0f0',
					order: 9,
					parent: null,
				},
			]
		}
	}
}
</script>