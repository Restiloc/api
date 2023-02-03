<a name="readme-top"></a>

<div align="center">

  <img src="https://cdn.alexishenry.eu/shared/images/restiloc-logo-full.svg" alt="logo" width="220" height="auto" />
  <h1>Restiloc</h1>
  
  <p>
    Restiloc API built with Laravel
  </p>

<a href="https://github.com/Restiloc/docs/tree/master/api"><strong>Documentation »</strong></a>

<h4>
    <a href="https://restiloc.space">Go to the site</a>
  <span> · </span>
    <a href="https://github.com/Restiloc/api/issues">Report a bug</a>
  <span> · </span>
    <a href="https://github.com/Restiloc/api/issues">I have an idea</a>
  </h4>
</div>

<br/>

# :notebook_with_decorative_cover: Summary

- [:notebook\_with\_decorative\_cover: About the project](#star2-about-the-project)
  * [:space\_invader: Techs](#space_invader-techs)
- [:toolbox: Getting Started](#toolbox-getting-started)
  * [:gear: Setup](#gear-setup)
  * [:gear: Configuration](#gear-config)
  * [:test\_tube: Tests](#test_tube-tests)
- [:wave: Authors](#wave-authors)

## :star2: About the project

This is the API of the Restiloc mobile application.

### :space_invader: Techs

![Laravel](https://img.shields.io/badge/laravel%20-hotpink.svg?&style=for-the-badge&logo=laravel&color=gray)
[![Shell](https://img.shields.io/badge/bash%20-hotpink.svg?&style=for-the-badge&logo=gnu-bash&logoColor=4EAA25&color=gray)]()

## :toolbox: Getting Started

### :gear: Setup

**Clone the repository**

```bash
$ git clone https://github.com/Restiloc/api
```

**Install dependencies**

```bash
$ npm install && composer install
```

### :gear: Configuration

**Configure the environment variables**

```diff
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=

+ DB_DATABASE=laravel
+ DB_USERNAME=root
+ DB_PASSWORD=
```

**Setup encryption key**

```bash
$ php artisan key:generate
```

**Seed the database**

```bash
$ php artisan migrate:fresh {--seed}
```

### :test_tube: Tests

**Run the tests using the following command**

```bash
$ php artisan test
```

## :wave: Contributors

* **Vladimir Sacchetto** _alias_ [@Vladimir9595](https://github.com/Vladimir9595)
* **Alizée Hett** _alias_ [@Dinholu](https://github.com/Dinholu)
* **Alexis Henry** _alias_ [@AlxisHenry](https://github.com/AlxisHenry)

<p align="right">(<a href="#readme-top">back to top</a>)</p>