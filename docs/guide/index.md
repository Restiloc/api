<script setup>
	import { VPTeamMembers } from 'vitepress/theme'

	const members = [
		{
			avatar: 'https://github.com/Dinholu.png',
			name: 'Alizée Hett',
			title: 'Contributor',
			links: [
				{ icon: 'github', link: 'https://github.com/Dinholu' },
				{
					icon: "linkedin",
					link: "https://www.linkedin.com/in/alizee-hett/",
				},
			]
		},
		{
			avatar: 'https://github.com/Vladimir9595.png',
			name: 'Vladimir Sacchetto',
			title: 'Contributor',
			links: [
				{ icon: 'github', link: 'https://github.com/Vladimir9595' },
				{
					icon: "linkedin",
					link: "https://www.linkedin.com/in/vladimir-sacchetto-16642b116/",
				},
			]
		},
		{
			avatar: "https://github.com/AlxisHenry.png",
			name: "Alexis Henry",
			title: "Contributor",
			links: [
				{ icon: "github", link: "https://github.com/Alxishenry" },
				{
					icon: "linkedin",
					link: "https://www.linkedin.com/in/alexishenry03",
				},
			],
		},
	];
</script>

# Welcome 👋

This is the documentation for the [RESTful API](https://www.redhat.com/fr/topics/api/what-is-a-rest-api) of the Restiloc mobile application. Restiloc is built with Kotlin and work with a Laravel [RESTful API](https://www.redhat.com/fr/topics/api/what-is-a-rest-api).

On this documentation, you have access to the differents availables API routes and the differents methods.

## Stack

Restiloc use the following techs :

- [Laravel](https://laravel.com/)
- [Kotlin](https://kotlinlang.org/)
- [Figma](https://www.figma.com/)

## Repositories

- **Restiloc** <Badge type="tip" text="0.0.1" />
- **API REST** <Badge type="tip" text="0.1.0" />
- **UI/UX** <Badge type="tip" text="1.0.0" />
- **Documentations** <Badge type="info" text="BDD Docs" />

## Contributors

<VPTeamMembers size="medium" :members="members" />