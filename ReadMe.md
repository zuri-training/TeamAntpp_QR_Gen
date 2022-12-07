# Team Antpp QR_Gen

<p align="center">
  <strong>A platform that allows users generate QR code that specifically does something when scanned</strong>
</p>

<h3 align="center">
  <a href="https://github.com/zuri-training/TeamAntpp_QR_Gen/blob/main/GUIDE.md">Guideline</a> | <a href="https://github.com/zuri-training/TeamAntpp_QR_Gen/blob/main/ROUTE.md">Endpoint Routes</a> | <a href="https://github.com/zuri-training/TeamAntpp_QR_Gen/issues">Contribute</a>
</h3>

---

## Table of Contents

- [Project Modalities](ReadMe.md#Project)
- [User Flow](ReadMe.md)
- [Project Modalities](ReadMe.md#)
- [Research Plan](ReadMe.md)
- [Project Scope](ReadMe.md)
- [Database Schema](ReadMe.md#Database)
- [Setup and Installation](ReadMe.md#Setup)
- [Useful Commands](Readme.md#Useful)
- [Technologies Used](ReadMe.md)
- [References](ReadMe.md)

# Project Modalities

### Project Name
QR_Gen

### Feature Requests
- User: Unauthenticated
  1. Visit the platform to view basic information about it
  2. View and Interact with the documentation
  3. Register to view more details
  4. No access to use until registered
- User: Authenticated
  1. Full access to the platform
  2. Allow setting on what should happen when QR is scanned - give at least 2 options
  3. Allow user to download (allow png, jpeg and pdf download format), or share code by email or social media
  4. Allow user save data and come back to it.

## Database

![TeamAntpp_QR_Gen](https://user-images.githubusercontent.com/85977511/205498564-f2184fdf-2757-4b56-9a7c-d61fe1e19d7c.png)

The database schema for this project was designed on `dbdiagram.io`, and [can be assessed here:](https://dbdiagram.io/d/638aa967bae3ed7c454470c9)

## Setup and Installation

This project QR-Go uses Laravel Framework. The views will be built by the frontend developers and converted to `laravel blade` files.

- Clone the repo `git clone https://github.com/zuri-training/TeamAntpp_QR_Gen.git`.

- Navigate to the project folder using `cd TeamAntpp_QR_Gen`.

> **QR-Go** replies heavily on `PHP 8.x.x` and `Laravel`. If you dont have php installed, follow this link on setting it up. [Setup PHP ON (mac,linux,windows) ](https://www.youtube.com/watch?v=mVzL2MRFANI)

- Install all projects dependencies using `composer install`.

> If you dont have composer installed, download composer with this [link](https://getcomposer.org/download/).

- Start the project server locally.. `php artisan serve`. This should startup a local server @ `http://localhost:8000

> make sure MYSQL server has started locally before running the above commands.

## Useful Commands.

### Creating application key
```
php artisan key:generate
```

### Creating a model and migrating the model.

```
php artisan make:model Users --migrate
```

### Migrate existing model

```
php artisan migrate
```

### Clear application cache

```
php artisan cache:clear
```

> If an error occur while migrating, cross check the `**.env**`  file and make sure you passed the correct database informations

```env
# sqlite database setup
DB_CONNECTION=sqlite
# DB_HOST=
# DB_PORT=
# DB_DATABASE=
# DB_USERNAME=
# DB_PASSWORD=
```

## Technologies Used

HTML5 <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/html5-colored.svg" width="28" height="20" alt="HTML5" /></a>

CSS3  <a href="https://www.w3.org/TR/CSS/#css" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/css3-colored.svg" width="28" height="20"  alt="CSS3" /></a>

Javascript <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/javascript-colored.svg" width="28" height="20" alt="Javascript" /></a>

Figma <a href="https://www.figma.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/figma-colored.svg" width="28" height="20"  alt="Python" /></a> 

Laravel <a href="https://laravel.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/profileme-dev/main/public/icons/skills/laravel-colored.svg" width="28" height="20"  alt="Django" /></a>

PHP <a href="https://www.php.net/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/profileme-dev/main/public/icons/skills/php-colored.svg" width="28" height="20" alt="Python" /></a>

## References

- [Documentation](https://docs.google.com/document/d/18p9V39g_C216a7R_mXDo-8HAFGWnViipYBjA416KJaQ/edit?usp=sharing)
- [Design Sketch](https://www.figma.com/file/iKsqYnaNBsT43nqnpLkQfh/moodboards?t=V9BLm24BScYouKT4-6)
- [Mood Board](https://www.figma.com/file/iKsqYnaNBsT43nqnpLkQfh/moodboards?t=V9BLm24BScYouKT4-6)
