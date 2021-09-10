<template>
	<div>
		<v-dialog v-model="dialog" max-width="400px" overlay-opacity=".25" content-class="shadow-lg" scrollable>
			<v-form>
				<v-card>
					<v-toolbar flat color="white">
						<v-toolbar-title>
							Laporkan Tutorial
						</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-btn icon @click.native="dialog = false">
							<v-icon>mdi-close</v-icon>
						</v-btn>
					</v-toolbar>
					<v-card-text>
						<v-select
							v-model="type"
							:items="reportType"
							label="Jenis Laporan"
							value="value"
							item-text="label"
							item-value="value"
							outlined
							dense/>
						<v-text-field
							v-if="isLainnya"
							label="Sebutkan Jenis Lainnya"
							outlined
							dense/>
						<v-text-field
							v-model="message"
							label="Deskripsi Tambahan"
							outlined
							dense/>
						<v-slide-y-transition mode="out-in">
							<div :key="screenshot">
								<v-img max-height="100px" max-width="100%" v-if="screenshot" :src="screenshot" class="rounded-lg"/>
							</div>
						</v-slide-y-transition>
					</v-card-text>
					<div>
						<v-alert type="info" text class="mb-0">
							<small>
								Laporan akan dikirim ke admin untuk ditinjau.
							</small>
						</v-alert>
					</div>
					<v-divider></v-divider>
					<v-card-actions>
						<v-btn text @click.native="dialog = false">
							Batal
						</v-btn>
						<v-spacer></v-spacer>
						<v-btn color="blue darken-1" text @click="submit()" :loading="submited">
							<div class="d-flex">
								<div>
									Kirim
								</div>
								<v-scroll-x-transition mode="out-in">
									<div :key="submited">
										<v-icon small right>mdi-send</v-icon>
									</div>
								</v-scroll-x-transition>
							</div>
						</v-btn>
					</v-card-actions>
				</v-card>
			</v-form>
		</v-dialog>
	</div>
</template>
<script>
import { toJpeg } from 'html-to-image'
export default {
	props: {
		value: Boolean,
	},
	computed: {
		dialog: {
			get () {
				return this.value;
			},
			set (value) {
				this.$emit('input', value);
			},
		},
		isLainnya(){
			let isLainnya = false;
			/**
			 * check if type is lainnya from report type
			 * 
			 */
			let type = this.reportType.find(type => {
				if(type.value == this.type){
					return type;
				}
			});
			if(type?.other)
				isLainnya = true;
			return isLainnya;
		}
	},
	data() {
		return {
			type: '',
			message: '',
			submited: false,
			reportType: [
				{
					value: '1',
					label: 'Tutorial Tidak Sesuai',
				},
				{
					value: '2',
					label: 'Duplikasi',
				},
				{
					value: '3',
					label: 'Lainnya',
					other: true,
				},
			],
			screenshot: null,
		}
	},
	watch: {
		dialog(val){
			if(val)
			toJpeg(document.querySelector("#tutorial-info"), { quality: .75 })
				.then((dataUrl) => {
					this.screenshot = dataUrl;
				});
		}
	},
	methods: {
		submit(){
			this.submited = true;
			setTimeout(() => {
				this.submited = false;
			}, 2000);
		}
	}
}
</script>