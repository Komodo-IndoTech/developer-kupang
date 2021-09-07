<template>
	<div>
		<v-card-text>
			<template v-if="item.type === 'code'">
				<pre>
					{{ item.content }}
				</pre>
			</template>
			<template v-else-if="item.type === 'embed'">
				<div v-html="item.content"></div>
			</template>
			<template v-else-if="item.type === 'image'">
				<v-img :src="item.content.src" class="rounded-lg shadow-md" max-width="600" width="100%"></v-img>
				<div class="pt-2">
					<code>
						{{ item.content.alt }}
					</code>
				</div>
			</template>
			<template v-else-if="item.type === 'gist'">
				<vuegist :gist-id="item.content.id" :file="item.content.name"/>
			</template>
			<template v-else>
				{{ item.content }}
			</template>
		</v-card-text>
	</div>
</template>
<script>
import Vuegist from 'vue-embed-gist'

export default {
	components: {
		Vuegist
	},
	props: {
		value: {
			type: Object,
			required: true,
		},
		simple: Boolean,
	},
	computed: {
		item() {
			return this.value
		},
	},
}
</script>