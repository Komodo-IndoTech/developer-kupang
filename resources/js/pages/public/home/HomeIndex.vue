<template>
	<div>
		<div 
			style="height: 100vh; background-image: linear-gradient(to top, rgba(255, 255, 255, 1) 1vh, transparent 25vh), url('/img/bg_banner.png'); background-size: contain; background-position: bottom center; background-repeat: no-repeat;"
			:style="{'max-height': `calc(100vh - (${$vuetify.application.top}px + 40px))`}">
		</div>
	</div>
</template>
<script>
export default {
	
}
</script>