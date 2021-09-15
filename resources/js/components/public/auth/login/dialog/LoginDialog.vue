<template>
	<div>
		<v-dialog v-model="dialog" 
			:max-width="minimize ? 200 : $vuetify.breakpoint.width >= 850 ? 800 : 400" 
			:content-class="`shadow rounded-xl login-dialog ${minimize ? 'minimize' : null}`" 
			overlay-opacity=".9" 
			overlay-color="#dcf4fe" 
			scrollable 
			transition="slide-y-reverse-transition">
			<v-card class="" rounded="xl" :color="minimize ? null : null" :dark="minimize">
				<menu-tooltip :label="'Minimize Dialog 🤏'" v-if="!minimize" :icons_count="1">
					<v-btn fab absolute right style="top: 16px" class="shadow-lg" @click="alwayShow = true; dialog = false">
						<v-icon>mdi-unfold-less-horizontal</v-icon>
					</v-btn>
				</menu-tooltip>
				<div v-show="minimize">
					<div class="d-flex pa-2 justify-center">
						<menu-tooltip :label="'Dialog login'" :icons_count="1">
							<v-btn icon @click="dialog = true">
								<v-icon>mdi-drag-horizontal</v-icon>
							</v-btn>
						</menu-tooltip>
						<div>
							<div class="flex-middle">
								Login ✌️
							</div>
						</div>
						<v-spacer></v-spacer>
						<v-btn icon @click="alwayShow = false">
							<v-icon small>mdi-close</v-icon>
						</v-btn>
					</div>
					<v-divider></v-divider>
				</div>
				<v-card-text class="pa-0" v-if="!minimize">
					<v-fade-transition group mode="out-in" class="d-flex fill-height">
						<div class="pa-10 w-100" style="max-width: 400px; min-width: 400px" key="login-form">
							<div class="flex-middle">
								<div class="py-5 px-5">
									<h1 class="font-weight-black">
										Login ✌️
									</h1>
									<div class="py-5">
										Menjadi anggota komunitas dengan menggunakan akun github.
									</div>
									<div class="py-5 mb-5">
										<v-card outlined rounded="pill" flat link dark>
											<v-card-text>
												<div class="d-flex">
													<div class="pr-4">
														<v-icon>mdi-github</v-icon>
													</div>
													<div>
														<div class="flex-middle">
															Masuk dengan github
														</div>
													</div>
													<v-spacer></v-spacer>
													<div class="pl-4">
														<v-icon>mdi-login-variant</v-icon>
													</div>
												</div>
											</v-card-text>
										</v-card>
									</div>
									<div>
										<div class="mb-3">
											<a href="#" class="text-decoration-none">
												Punya masalah dengan akun?
											</a>
										</div>
										<div class="">
											<a href="#" class="text-decoration-none">
												Mengapa harus github?
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<v-card flat 
							rounded="0" 
							class="flex-grow" 
							style="background: url('/img/svg/bg.svg'), linear-gradient(45deg, #5138ed, #806df3); 
								min-width: 0px; 
								position: relative; 
								background-position: bottom left!important; 
								background-repeat: no-repeat!important" 
							key="login-banner" 
							dark
							v-if="$vuetify.breakpoint.width >= 850">
							<v-card-text class="fill-height d-flex flex-column" style="background-image: url('/img/3d/comment-crop.png'); background-position: 173% 133%; background-repeat: no-repeat; background-size: 300px">
								<div class="pa-10 flex-grow fill-height">
									<div class="flex-middle ">
										<v-card color="glass-sm" class="fill-height" rounded="xl" flat dark>
											<div class="pa-5">
												<v-card-title class="text-nowrap">
													Demi memajukan komunitas, kami mengajak member agar menggunakan github.
												</v-card-title>
											</div>
											<v-btn fab light absolute style="bottom: 16px; left: -28px; pointer-events: none" class="shadow-md">
												<span class="text-h5">
													🤝
												</span>
											</v-btn>
											<v-btn fab light absolute style="top: 8rem; right: -28px; pointer-events: none" class="shadow-md">
												<span class="text-h5">
													🔥
												</span>
											</v-btn>
										</v-card>
									</div>
								</div>
								<v-divider></v-divider>
								<div>
									<div class="flex-middle pt-3" style="">
										<span>
											Inspirasi Desain:
										</span>
										<a href="https://dribbble.com/shots/15979404-Dashboard-Login?utm_source=Clipboard_Shot&utm_campaign=batuhankara&utm_content=Dashboard%3A%20Login&utm_medium=Social_Share&utm_source=Clipboard_Shot&utm_campaign=batuhankara&utm_content=Dashboard%3A%20Login&utm_medium=Social_Share" class="pink--text text--lighten-4 text-decoration-none" target="_blank">
											Batuhan Kara @ Dribbble
										</a>
									</div>
								</div>
							</v-card-text>
						</v-card>
					</v-fade-transition>
				</v-card-text>
			</v-card>
		</v-dialog>
		<!-- https://dribbble.com/shots/15979404-Dashboard-Login?utm_source=Clipboard_Shot&utm_campaign=batuhankara&utm_content=Dashboard%3A%20Login&utm_medium=Social_Share&utm_source=Clipboard_Shot&utm_campaign=batuhankara&utm_content=Dashboard%3A%20Login&utm_medium=Social_Share -->
	</div>
</template>
<script>
import { mapMutations, mapState } from 'vuex'
import MenuTooltip from '../../../dummy/MenuTooltip.vue'
export default {
  	components: { MenuTooltip },
	computed: {
		dialog: {
			/**
			 * get value from this.isOpen
			 * set to this.setDialog()
			 * 
			 */
			get () {
				return this.isOpen
			},
			set (value) {
				this.setDialog(value)
			}
		},
		minimize(){
			return !this.dialog && this.alwayShow
		},
		...mapState({
			isOpen: state => state.auth.login.dialog.isOpen,
		})
	},
	methods: {
		...mapMutations({
			setDialog: 'auth/login/dialog/setIsOpen'
		}),
	},
	data() {
		return {
			alwayShow: true,
		}
	},
}
</script>
<style lang="scss">
	.login-dialog{
		min-height: 500px;
		&.minimize{
			align-self: end;
			display: flex!important;
			transform: translateY(calc(45%));
			opacity: .25;
			// margin: 0 0;
			min-height: unset;
			&:hover{
				opacity: 1;
				transform: translateY(0%);
			}
		}
	}
</style>