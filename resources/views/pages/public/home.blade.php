@extends('layouts.app')

{{-- 
	pastikan elemen yang dituliskan pada section('content') adalah element pendukung SEO
	element ini akan di baca robot google dengan cepat	
--}}

@section('content')
	<v-app>
		<v-main app>
			<v-container>
				<v-card flat rounded="xl" color="grey lighten-5">
					<v-card-text>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis error qui ut in, nulla facere repellendus non sequi cum commodi sit aliquid, culpa incidunt natus dicta. Nisi quasi et quod.
					</v-card-text>
				</v-card>
			</v-container>
		</v-main>
	</v-app>

@endsection
