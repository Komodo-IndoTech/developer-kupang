import Vue from "vue";

Vue.mixin({
	filters: {
		datetime: function(value) {
			return new Date(value).toLocaleString();
		},
		/**
		 * make filters date to return formated Intl object indonesian date
		 */
		date(val, local = 'id-ID', fullMonth = false) {
			let date = new Date(val);
			/**
			 * check if the date is in year
			 * 
			 */
			if(date.getFullYear() === (new Date()).getFullYear())
				return new Intl.DateTimeFormat(local, { month: fullMonth ? 'long' : 'short', day: 'numeric' }).format(date)
			return new Intl.DateTimeFormat(local, { year: '2-digit', month: 'long', day: 'numeric' }).format(date)
		},
		time(val, local = 'id-ID'){
			let date = new Date(val);
			return new Intl.DateTimeFormat(local, { hour: 'numeric', minute: '2-digit' }).format(date)
		}
	}
});