@extends('layouts.app')

{{-- 
	pastikan elemen yang dituliskan pada section('content') adalah element pendukung SEO
	element ini akan di baca robot google dengan cepat	
--}}

@section('content')
	<v-app>
		<v-app-bar app class="back-color" flat fixed :color="$vuetify.theme.dark ? null : 'white'">
			<div class="w-100 d-flex" style="width: 100%">
				<v-container class="py-0 ml-0 fill-height text-center mx-auto">
					<v-app-bar-nav-icon class="mr-2 x-small" v-if="$vuetify.breakpoint.smAndDown" @click=""></v-app-bar-nav-icon>
					<v-avatar class="mr-3">
						<v-img src="{{ asset('img/dk_logo.png') }}"></v-img>
					</v-avatar>
					<v-toolbar-title class="text-xs-center">
						<span>Developer Kupang</span>
					</v-toolbar-title>
					<v-spacer></v-spacer>
					<v-responsive max-width="500" v-if="$vuetify.breakpoint.mdAndUp">
						{{-- <auto-complete-produk 
							flat
							rounded
							hide-details
							dense
							label="Temukan disini.."
							append-icon="mdi-magnify"/> --}}
						<v-autocomplete
							width="$vuetify.breakpoint.smAndDown ? 64px : 300px"
							dense
							solo-inverted
							persistent-hint
							rounded
							flat
							hide-details
							label="Temukan disini..."
							append-icon="mdi-magnify"/>
					</v-responsive>
					<v-spacer></v-spacer>
					<v-btn
						icon
						small
						@click=""
						v-if="$vuetify.breakpoint.smAndDown">
						<v-icon>mdi-magnify</v-icon>
					</v-btn>
					<v-badge color="teal" :content="1" bottom offset-x="15" offset-y="15" :value="1 > 0">
						<v-btn
							icon
							class="ml-3"
							link>
							<v-icon>mdi-cart</v-icon>
						</v-btn>
					</v-badge>
					{{-- <template v-if="user.id_pembeli">
						<v-menu
							bottom
							left
							max-width="400"
							content-class="shadow-sm" v-if="false">
							<template v-slot:activator="{ on, attrs }">
								<v-btn
									icon
									v-bind="attrs"
									v-on="on"
									small
									class="ml-3">
									<v-icon>mdi-bell</v-icon>
								</v-btn>
							</template>
							<v-list three-line>
								<template v-for="(item, index) in notifData">
									<v-subheader
										v-if="item.header"
										:key="item.header"
										v-text="item.header"/>
									<v-divider
										v-else-if="item.divider"
										:key="index"
										:inset="item.inset"/>
									<v-list-item
										v-else
										:key="item.title"
										link>
										<v-list-item-avatar>
											<v-img :src="item.avatar"></v-img>
										</v-list-item-avatar>
										<v-list-item-content>
											<v-list-item-title v-html="item.title"></v-list-item-title>
											<v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
										</v-list-item-content>
									</v-list-item>
								</template>
							</v-list>
						</v-menu>
						<v-avatar
							color="grey darken-1"
							size="32"
							class="d-none d-sm-flex ml-4" @click="$router.push({ name: 'user.dashboard' })">
							<v-img :src="user.foto_url"></v-img>	
						</v-avatar>
						<div class="text-subtitle-2 ml-2 d-none d-sm-flex" @click="$router.push({ name: 'user.dashboard' })">
							@{{ user.nama_pembeli }}
						</div>
						<v-menu
							bottom
							left
							max-width="250"
							min-width="200"
							content-class="shadow-sm">
							<template v-slot:activator="{ on, attrs }">
								<v-btn
									icon
									v-bind="attrs"
									v-on="on"
									small
									class="ml-3">
									<v-icon>mdi-chevron-down</v-icon>
								</v-btn>
							</template>
							<v-list>
								<v-list-item
									v-for="(item, i) in avatarDrops"
									:key="i"
									@click="menuClick(item.id)">
									<v-list-item-title>@{{ item.title }}</v-list-item-title>
								</v-list-item>
							</v-list>
						</v-menu>
					</template> --}}
					<template>
						<v-btn text class="ml-3 px-4">
							Masuk
						</v-btn>
					</template>
				</v-container>
			</div>
		</v-app-bar>
		<v-main app>
			<v-container>
			</v-container>
		</v-main>
	</v-app>
	<div class="loading page" v-cloak>
		<img src="{{ asset('img/dk_logo.png') }}" alt="logo developer kupang" style="max-width: 200px; max-height: 200px">
	</div>
@endsection
