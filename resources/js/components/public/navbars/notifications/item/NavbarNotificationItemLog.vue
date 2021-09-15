<template>
	<v-list-item 
		link 
		:to="isRouteLink 
			? item.link 
			: null" 
		:href="isExternalLink 
			? item.link 
			: null"
		:three-line="isTwoLine">
		<v-list-item-icon v-if="item.icon && item.icon.name">
			<v-icon :class="iconClass" small v-text="item.icon.name"/>
		</v-list-item-icon>
		<v-list-item-content>
			<v-list-item-subtitle>
				{{ item.title }}
			</v-list-item-subtitle>
		</v-list-item-content>
		<v-list-item-action-text>
			<div>
				{{ item.date }}
			</div>
		</v-list-item-action-text>
	</v-list-item>
</template>
<script>
export default {
	/**
	 * jenis notifikasi
	 * 
	 * 1. notifikasi biasa
	 * 2. notifikasi dengan link luar
	 * 3. notifikasi dengan route
	 * 
	 * notifikasi biasa jika tidak memiliki link referensi
	 * notifikasi biasa jika property link berupa string
	 * notifikasi dengan route harus memiliki properti link dengan type object
	 * 		- type: route
	 * 		- name: nama route
	 * 		- params: parameter route
	 * 		- query: query string
	 * 		- hash: hash string
	 * 		- full: full url
	 * 
	 */
	props: {
		value: {
			type: Object,
			required: true
		}
	},
	computed: {
		item: {
			get() {
				return this.value;
			},
			set(value) {
				this.$emit('input', value);
			}
		},
		isRouteLink(){
			return this.checkIfLinkLinkIsRoute(this.item?.link)
		},
		isExternalLink(){
			return this.checkIfLinkIsExternal(this.item?.link)
		},
		iconClass(){
			return this.item?.icon?.className || this.item?.icon?.class_name || null;
		},
		isTwoLine(){
			return this.item?.view?.twoline 
				|| this.item?.twoline 
				|| this.item?.view?.threeline 
				|| this.item?.threeline 
				|| null;
		}
	},
	methods: {
		checkIfLinkIsExternal(link) {
			if (typeof link == 'string') {
				return link.indexOf('http') == 0;
			}
			return false;
		},
		getLink(link) {
			if (typeof link == 'string') {
				return link;
			}
			if (typeof link == 'object') {
				if (link.type == 'route') {
					return this.$router.resolve(link).href;
				}
			}
			return null;
		},
		checkIfLinkLinkIsRoute(link) {
			if (typeof link == 'object') {
				if (link.type == 'route') {
					return true;
				}
			}
			return false;
		}
	}
}
</script>