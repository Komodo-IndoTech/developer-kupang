import Vue from "vue";

Vue.mixin({
	filters: {
		number(val){
			return new Intl.NumberFormat({
				style: "decimal",
			}).format(val)
		}
	}
});