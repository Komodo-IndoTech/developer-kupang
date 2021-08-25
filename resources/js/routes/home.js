
import PublicIndex from '../pages/public/PublicIndex.vue';
import HomeIndex from '../pages/public/home/HomeIndex.vue';
import MengenaiKami from '../pages/public/about/AboutUs.vue';

export default [
	{
		path: '/',
		component: PublicIndex,
		children: [
			{
				path: 'mengenai-kami',
				component: MengenaiKami,
				name: 'mengenai',
				meta: {
					title: 'Developer Kupang - Siapa Kami?'
				}
			},
			{
				path: '',
				component: HomeIndex,
				name: 'beranda',
				meta: {
					title: 'Developer Kupang - 🏡'
				}
			}
		]
	}
]