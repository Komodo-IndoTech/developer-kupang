
import PublicIndex from '../pages/public/PublicIndex.vue';
import HomeIndex from '../pages/public/home/HomeIndex.vue';
import MengenaiKami from '../pages/public/about/AboutUs.vue';
import PublicBlog from '../pages/public/blog/BlogIndex.vue'

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
				path: 'blog',
				component: PublicBlog,
				name: 'blog',
				meta: {
					title: 'Developer Kupang - Blog'
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