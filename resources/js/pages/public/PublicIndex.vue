<template>
	<div>
		<navbar/>
		<router-view/>
	</div>
</template>
<script>
import Navbar from '../../components/public/navbars/Navbar.vue'
export default {
  	components: { Navbar },
	name: 'PublicIndex',
}
</script>