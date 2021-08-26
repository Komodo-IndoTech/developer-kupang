
import PublicIndex from '../pages/public/PublicIndex.vue';
import HomeIndex from '../pages/public/home/HomeIndex.vue';
import MengenaiKami from '../pages/public/about/AboutUs.vue';
import PublicBlog from '../pages/public/blog/BlogPublic.vue'
import BlogIndex from '../pages/public/blog/blogs/BlogIndex.vue'
import EventIndex from '../pages/public/blog/events/EventIndex.vue'

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
				children: [
					{
						path: '/event',
						component: EventIndex,
						name: 'event',
						meta: {
							title: 'Developer Kupang - Event'
						}
					},
					{
						path: '',
						component: BlogIndex,
						name: 'blog',
						meta: {
							title: 'Developer Kupang - Blog'
						}
					},
				]
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