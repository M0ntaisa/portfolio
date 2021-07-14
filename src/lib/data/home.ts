import { Platform } from '$lib/types';
import { getSkills } from './skills';

export const title = 'Home';

export const name = 'Ilham';

export const lastName = 'Darmawan';

export const description =
	'that is my name, i am currently doing freelance web development. I’ve always believed that the best way to learn coding is by doing—-at my own pace. I take my time to understand each challenge and let my curiosity guide me. Whether I’m exploring new technologies or debugging tricky issues, I grow by building things that fascinate me. I like to push my limits and learn in a way that feels natural, combining a hands-on approach with steady, self-paced improvement.';

export const links: Array<{ platform: Platform; link: string }> = [
	{ 
		platform: Platform.GitHub, 
		link: 'https://github.com/m0ntaisa' 
	},
	{
		platform: Platform.Twitter,
		link: 'https://twitter.com/'
	},
	// {
	// 	platform: Platform.Linkedin,
	// 	link: 'https://www.linkedin.com/'
	// },
	// {
	// 	platform: Platform.StackOverflow,
	// 	link: 'https://stackoverflow.com/'
	// },
	// {
	// 	platform: Platform.Email,
	// 	link: 'riadh_adrani@hotmail.fr'
	// },
	{
		platform: Platform.Youtube,
		link: 'https://www.youtube.com/@akadorag'
	},
	// {
	// 	platform: Platform.Facebook,
	// 	link: 'https://www.facebook.com'
	// }
];

export const skills = getSkills('js', 'css', 'html', 'vuejs', 'codeigniter', 'svelte', 'ts', 'bootstrap', 'expressjs', 'laravel', 'php', 'tailwind', 'mysql', 'sqlite');
