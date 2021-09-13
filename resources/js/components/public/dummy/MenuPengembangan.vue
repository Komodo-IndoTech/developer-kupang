<template>
	<v-menu content-class="shadow" v-bind="$attrs" offset-y top open-on-hover nudge-top="12" max-width="250">
		<template #activator="{attrs, on}">
			<span v-on="on" v-bind="attrs">
				<slot/>
			</span>
		</template>
		<v-card>
			<div class="pa-3 d-flex">
				<div class="mx-auto w-100" style="max-width: 500px">
					<div class="d-flex">
						<div class="pr-3">
							<v-scroll-y-transition mode="out-in">
								<div class="flex-middle" :key="icon_counter">
									<v-icon v-if="icon_counter == 0">mdi-information</v-icon>
									<v-icon v-else>mdi-account-hard-hat</v-icon>
								</div>
							</v-scroll-y-transition>
						</div>
						<div>
							<small>
								Dalam Pengembangan {{ label}}
							</small>
						</div>
					</div>
				</div>
			</div>
		</v-card>
	</v-menu>
</template>
<script>
export default {
	name: 'MenuPengembangan',
	props: {
		label: {
			type: String,
			default: '🧑‍🏭👨‍🏭👩‍🏭👷👷‍♂️👷‍♀️⚒️💪🔥💥',
		},
		icons_count: {
			type: Number,
			default: 2,
		},
	},
	data(){
		return {
			icon_counter: 0,
		}
	},
	methods: {
		nextIcon() {
			setTimeout(()=>{
				this.icon_counter++;
				if (this.icon_counter >= this.icons_count) {
					this.icon_counter = 0;
				}
				this.nextIcon()
			}, 5000)
		},
	},
	created() {
		this.nextIcon();
	},
}
</script>