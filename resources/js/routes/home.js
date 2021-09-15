
import PublicIndex from '../pages/public/PublicIndex.vue';
import HomeIndex from '../pages/public/home/HomeIndex.vue';
import MengenaiKami from '../pages/public/about/AboutUs.vue';

/**
 * blog
 */
import PublicBlog from '../pages/public/blog/BlogPublic.vue'
import BlogIndex from '../pages/public/blog/blogs/BlogIndex.vue'
import BlogInfo from '../pages/public/blog/blogs/BlogInfo.vue'
import EventIndex from '../pages/public/blog/events/EventIndex.vue'
/**
 * forum
 */
import PublicForum from '../pages/public/forum/ForumPublic.vue'
import ForumIndex from '../pages/public/forum/forum/ForumIndex.vue'
import TagsIndex from '../pages/public/forum/tags/TagsIndex.vue'

import PublicTutorial from '../pages/public/forum/tutorial/TutorialPublic.vue'
import TutorialIndex from '../pages/public/forum/tutorial/tutorial/TutorialIndex.vue'
import TutorialInfo from '../pages/public/forum/tutorial/tutorial/TutorialInfo.vue'
import RequestIndex from '../pages/public/forum/tutorial/request/RequestIndex.vue'

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
						path: 'event',
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
				path: 'blog/:username/:blog_slug',
				component: BlogInfo,
				name: 'blog.show',
				meta: {
					title: '# | by $ | Developer Kupang'
				}
			},
			{
				path: 'forum',
				component: PublicForum,
				children: [
					{
						path: 'tutorial',
						component: PublicTutorial,
						children: [
							{
								path: 'permintaan',
								component: RequestIndex,
								name: 'permintaan',
								meta: {
									title: 'Developer Kupang - Tutorial'
								}
							},
							{
								path: '',
								component: TutorialIndex,
								name: 'tutorial',
								meta: {
									title: 'Developer Kupang - Tutorial'
								}
							},
						]
					},
					{
						path: 'tag',
						component: TagsIndex,
						name: 'tag',
						meta: {
							title: 'Developer Kupang - Tag'
						}
					},
					{
						path: '',
						component: ForumIndex,
						name: 'forum',
						meta: {
							title: 'Developer Kupang - Forum'
						}
					},
				]
			},
			{
				path: 'forum/tutorial/:id_tutorial',
				component: TutorialInfo,
				name: 'tutorial.show',
				meta: {
					title: 'Developer Kupang - Tutorial #'
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