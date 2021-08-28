@extends('layouts.app')

{{-- 
	pastikan elemen yang dituliskan pada section('content') adalah element pendukung SEO
	element ini akan di baca robot google dengan cepat	
--}}

@section('content')
	<v-app>
		<v-navigation-drawer app mini>
			<v-list nav>
				<v-subheader>
					Menu
				</v-subheader>
				<v-list-item-group color="primary">
					<v-list-item link :to="{ name: 'beranda' }" exact>
						<v-list-item-icon>
							<v-icon>mdi-home-outline</v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title>
								Beranda
							</v-list-item-title>
						</v-list-item-content>
					</v-list-item>
					<v-list-item link :to="{ name: 'mengenai' }">
						<v-list-item-icon>
							<v-icon>mdi-account-group-outline</v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title>
								Mengenai Kami
							</v-list-item-title>
						</v-list-item-content>
					</v-list-item>
					<v-list-item link :to="{ name: 'blog' }">
						<v-list-item-icon>
							<v-icon>mdi-newspaper-variant-outline</v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title>
								Blog & Event
							</v-list-item-title>
						</v-list-item-content>
					</v-list-item>
					<v-list-item link :to="{ name: 'forum' }">
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
						<v-list-item-icon>
							<v-icon>mdi-message-alert-outline</v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title>
								Feedback
							</v-list-item-title>
						</v-list-item-content>
					</v-list-item>
					<v-list-item link>
						<v-list-item-icon>
							<v-icon>mdi-lifebuoy</v-icon>
						</v-list-item-icon>
						<v-list-item-content>
							<v-list-item-title>
								Support
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
			</v-list>
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
