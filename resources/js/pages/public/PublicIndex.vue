<template>
	<div>
		<navbar :notification="notification" @set-notification="notification = $event"/>
		<navbar-notification v-model="notification"/>
		<router-view/>
		<login-dialog/>
		<!-- <bottom-navbar/> -->
		<!-- <v-list>
			<v-list-item active-class="">

			</v-list-item>
		</v-list> -->
	</div>
</template>
<script>
import Navbar from '../../components/public/navbars/Navbar.vue'
import axios from 'axios'
import NavbarNotification from '../../components/public/navbars/notifications/NavbarNotification.vue'
import LoginDialog from '../../components/public/auth/login/dialog/LoginDialog.vue'
import BottomNavbar from '../../components/public/navbars/bottom/BottomNavbar.vue'
export default {
  	components: { Navbar, NavbarNotification, LoginDialog, BottomNavbar },
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