@extends('layouts.app')

{{-- 
	pastikan elemen yang dituliskan pada section('content') adalah element pendukung SEO
	element ini akan di baca robot google dengan cepat	
--}}

@section('content')
	<v-app>
		<v-navigation-drawer app mini floating class="indigo lighten-4">
			<div class="d-flex flex-column fill-height">
				<v-spacer></v-spacer>
				<v-list nav class="px-8">
					<v-list-item-group color="primary">
						<v-list-item link :to="{ name: 'beranda' }" exact active-class="list-active">
							<v-list-item-icon>
								<v-icon>mdi-home-outline</v-icon>
							</v-list-item-icon>
							<v-list-item-content>
								<v-list-item-title>
									Beranda
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
						<v-list-item link :to="{ name: 'mengenai' }" active-class="list-active">
							<v-list-item-icon>
								<v-icon>mdi-account-group-outline</v-icon>
							</v-list-item-icon>
							<v-list-item-content>
								<v-list-item-title>
									Mengenai Kami
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
						<v-list-item link :to="{ name: 'blog' }" active-class="list-active">
							<v-scale-transition mode="out-in">
								<v-list-item-icon :key="nav.blog.counter">
									<v-icon v-if="nav.blog.counter == 0">mdi-newspaper-variant-outline</v-icon>
									<v-icon v-else-if="nav.blog.counter == 1">mdi-calendar</v-icon>
									<v-icon v-else>mdi-bullhorn-outline</v-icon>
								</v-list-item-icon>
							</v-scale-transition>
							<v-list-item-content>
								<v-list-item-title>
									Blog & Event
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
						<v-list-item link :to="{ name: 'forum' }" active-class="list-active">
							<v-list-item-icon>
								<v-icon>mdi-forum-outline</v-icon>
							</v-list-item-icon>
							<v-list-item-content>
								<v-list-item-title>
									Forum
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
						{{-- <v-list-item link>
							<v-list-item-icon>
								<v-icon>mdi-gamepad-variant-outline</v-icon>
							</v-list-item-icon>
							<v-list-item-content>
								<v-list-item-title>
									Event & Kegiatan
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item> --}}
						<v-list-item link>
							<v-scale-transition mode="out-in">
								<v-list-item-icon :key="nav.feedback.counter">
									<v-icon v-if="nav.feedback.counter == 0">mdi-message-alert-outline</v-icon>
									<v-icon v-else>mdi-handshake-outline</v-icon>
								</v-list-item-icon>
							</v-scale-transition>
							<v-list-item-content>
								<v-list-item-title>
									Feedback & Dukungan
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
						<v-list-item link>
							<v-list-item-icon>
								<v-icon>mdi-fingerprint</v-icon>
							</v-list-item-icon>
							<v-list-item-content>
								<v-list-item-title>
									Kebijakan Privasi
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
						<v-list-item link>
							<v-list-item-icon>
								<v-icon>mdi-flag-outline</v-icon>
							</v-list-item-icon>
							<v-list-item-content>
								<v-list-item-title>
									Ketentuan Layanan
								</v-list-item-title>
							</v-list-item-content>
						</v-list-item>
					</v-list-item-group>
					<v-subheader>
						Pintasan Saya
					</v-subheader>
					<v-list-item link>
						<v-list-item-icon>
							<v-icon>mdi-pin</v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title>
								#Javascript
							</v-list-item-title>
						</v-list-item-content>
					</v-list-item>
				</v-list>
			</div>
			{{-- <div class="d-flex flex-column justify-center fill-height">
			</div> --}}
		</v-navigation-drawer>
		<v-main app>
			<router-view></router-view>
		</v-main>
	</v-app>
	<div class="loading page" v-cloak>
		<img src="{{ asset('img/dk_logo.png') }}" alt="logo developer kupang" style="max-width: 200px; max-height: 200px">
	</div>
@endsection
