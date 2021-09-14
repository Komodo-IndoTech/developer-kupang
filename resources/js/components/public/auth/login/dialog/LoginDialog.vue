<template>
	<div>
		<v-dialog v-model="dialog" :max-width="$vuetify.breakpoint.width >= 850 ? 800 : 400" content-class="shadow-lg rounded-xl login-dialog" overlay-opacity=".86" overlay-color="#dcf4fe" scrollable transition="slide-y-reverse-transition">
			<v-card class="" rounded="xl">
				<v-card-text class="pa-0">
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
						<v-card flat rounded="0" color="#806df3" class="flex-grow" style="min-width: 0px; position: relative" key="login-banner" dark
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
										<a href="https://dribbble.com/shots/15979404-Dashboard-Login?utm_source=Clipboard_Shot&utm_campaign=batuhankara&utm_content=Dashboard%3A%20Login&utm_medium=Social_Share&utm_source=Clipboard_Shot&utm_campaign=batuhankara&utm_content=Dashboard%3A%20Login&utm_medium=Social_Share" class="pink--text text--lighten-4 text-decoration-none">
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
export default {
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
		}
	},
}
</script>
<style lang="scss">
	.login-dialog{
		min-height: 500px;
	}
</style>