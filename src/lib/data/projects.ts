import Assets from './assets';
import { getSkills } from './skills';
import type { Project } from '../types';
import page1 from './projects/wangi-sakura/page1.png';
import page2 from './projects/wangi-sakura/page2.png';
import page3 from './projects/wangi-sakura/page3.png';
import login from './projects/wangi-sakura/login.png';
import dashboard_ws from './projects/wangi-sakura/dashboard.png';
import dashboard_pos from './projects/pos/dashboard.png';
import master_data1 from './projects/pos/master_data1.png';
import transaksi1 from './projects/pos/transaksi1.png';
import transaksi2 from './projects/pos/transaksi2.png';
import keuangan1 from './projects/pos/keuangan1.png';
import laporan1 from './projects/pos/laporan1.png';

export const items: Array<Project> = [
	{
		slug: 'wangi-sakura',
		color: '#ff37f0',
		description:
			'Wangi Sakura is a health-focused website designed to help users easily determine if they may be suffering from hypertension (high blood pressure). The site provides a simple and user-friendly interface for patients to input key health data such as diastolic and systolic. Through detailed analysis and guidance, Wangi Sakura offers personalized insights to help users understand their blood pressure status and the potential risks associated with hypertension. \n\nIn addition to diagnostic tools, the site educates users on the causes, symptoms, and treatments for hypertension, empowering them to take proactive steps toward better health.',
		shortDescription:
			'Wangi Sakura is a health-focused website designed to help users easily determine if they may be suffering from hypertension (high blood pressure).',
		links: [{ to: 'https://wangisakura.dinkes.wajokab.go.id', label: 'Link' }],
		logo: Assets.WS,
		name: 'Wangi Sakura',
		period: {
			from: new Date()
		},
		skills: getSkills('expressjs', 'ts', 'vuejs', 'tailwind', 'mysql', 'js'),
		type: 'Web App',
		screenshots: [
			{
				label: 'Home Page',
				src: page1
			},
			{
				label: 'Diagnosis Page ',
				src: page2
			},
			{
				label: 'Patient Registration Page',
				src: page3
			},
			{
				label: 'Admin Login Page',
				src: login
			},
			{
				label: 'Dashboard',
				src: dashboard_ws
			},
		]
	},
	{
		slug: 'point-of-sales',
		color: '#37adff',
		description:
			'This POS Web App is a streamlined platform for managing sales, inventory, and billing in medical facilities. Designed for hospitals, clinics, and pharmacies, it enables quick and accurate transactions.',
		shortDescription:
			'This POS Web App is a streamlined platform for managing sales, inventory, and billing in medical facilities. Designed for hospitals, clinics, and pharmacies, it enables quick and accurate transactions.',
		links: [{ to: '#', label: 'Github' }],
		logo: Assets.Unknown,
		name: 'Point Of Sales App',
		period: {
			from: new Date()
		},
		skills: getSkills('codeigniter', 'bootstrap', 'mysql', 'php'),
		type: 'Web App',
		screenshots: [
			{
				label: 'Dashboard',
				src: dashboard_pos
			},
			{
				label: 'Master Data',
				src: master_data1
			},
			{
				label: 'Transaksi 1',
				src: transaksi1
			},
			{
				label: 'Transaksi 2',
				src: transaksi2
			},
			{
				label: 'Keuangan',
				src: keuangan1
			},
			{
				label: 'Laporan',
				src: laporan1
			},
		]
	},
	{
		slug: 'simple-svelte-website',
		color: '#ff3e00',
		description:
			'A Simple website template made with Typescript and Svelte.',
		shortDescription:
			'A Simple website template made with Typescript and Svelte.',
		links: [{ to: 'https://web-pages-sage.vercel.app', label: 'Link' }],
		logo: Assets.Svelte,
		name: 'Simple Svelte Website',
		period: {
			from: new Date()
		},
		skills: getSkills('svelte', 'ts', 'tailwind'),
		type: 'Website Template',
		screenshots: []
	}
];

export const title = 'Projects';
