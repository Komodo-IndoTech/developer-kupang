<template>
	<div>
		<navbar :notification="notification" @set-notification="notification = $event"/>
		<navbar-notification v-model="notification"/>
		<router-view/>
	</div>
</template>
<script>
import Navbar from '../../components/public/navbars/Navbar.vue'
import axios from 'axios'
import NavbarNotification from '../../components/public/navbars/notifications/NavbarNotification.vue'
export default {
  	components: { Navbar, NavbarNotification },
	name: 'PublicIndex',
	data() {
		return {
			notification: false
		}
	},
	methods: {
		loadWeather(){
		},
		showLogoOnConsole(){
			console.log('%c%s', 'color: #0f0;', `                                                  
              %%%%%%%%                            
                   %%%%                           
              %%%%   %%%%                         
              %%%%%*  %%%%       %%%%             
                 %%%%   %%%%    %%%%              
                  *%%%.  %%%% %%%%                
                    %%%%   %%%%%%   %             
                   %%%%   %%%%%   #%%           Developer  
                  %%%%   %%%%%   %%%%           Kupang
                %%%%   %%%%%   %%%%             
              %%%%%   %%%%%%%   %%%%            🔥🔥🔥  
                    %%%%   %%%/  #%%%             
              %%%%%%%%%     %%%%   %%             
                             .%%%.  %             
                               %%%%               
                                (%%%%             
			`)
		}
	},
	created(){
		this.showLogoOnConsole()
		// this.loadWeather()
	}
}
</script>