# Team Antpp QR_Gen
## [See The Live Site Here](https://project-qr-go.herokuapp.com/)
<p align="center">
  <strong>A platform that allows users generate QR code that specifically does something when scanned</strong>
</p>

<h3 align="center">
  <a href="https://github.com/zuri-training/TeamAntpp_QR_Gen/blob/main/GUIDE.md">Guidelines</a> | <a href="https://github.com/zuri-training/TeamAntpp_QR_Gen/blob/main/ROUTE.md">Endpoint Routes</a> | <a href="https://github.com/zuri-training/TeamAntpp_QR_Gen/issues">Contribute</a>
</h3>

---

## Table of Contents

- [Project Modalities](ReadMe.md#Project)
- [User Flow](ReadMe.md)
- [Research Plan](ReadMe.md)
- [Project Scope](ReadMe.md)
- [Database Schema](ReadMe.md#Database)
- [Setup and Installation](ReadMe.md#Setup)
- [Useful Commands](Readme.md#Useful)
- [Technologies Used](ReadMe.md)
- [Contributors](Readme.md#Contributors)
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

# User Case Scenario

Case 1: “I am organizing an event, I want to send ticket invites to people, instead of going through the stress of manually sending the files to each individual, or probably using a cloud service to upload the files and send them links to access it, I can simply upload it and a QR code is generated for me. I can share this QR code and when scanned, it will automatically open and download the ticket.”

Case 2: “I need to send my address or the address of an event or place to someone, or some set of people, I can also enter the address details, after which a QR code is generated for me. This QR code when scanned can display the direction on the map on how I can locate the address.”

I have an option of sharing the QR code to different social media platforms directly or download it on my device.

The QR-Go Web Application also gives the users (authenticated) the access to scan URLs in general, and also to read QR Codes.


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

>Read the [guideline](https://github.com/zuri-training/TeamAntpp_QR_Gen/blob/main/GUIDE.md) doc for more information.

## Technologies Used

HTML5 <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/html5-colored.svg" width="28" height="20" alt="HTML5" /></a>

CSS3  <a href="https://www.w3.org/TR/CSS/#css" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/css3-colored.svg" width="28" height="20"  alt="CSS3" /></a>

Javascript <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/javascript-colored.svg" width="28" height="20" alt="Javascript" /></a>

Figma <a href="https://www.figma.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/figma-colored.svg" width="28" height="20"  alt="Python" /></a> 

Laravel <a href="https://laravel.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/profileme-dev/main/public/icons/skills/laravel-colored.svg" width="28" height="20"  alt="Django" /></a>

PHP <a href="https://www.php.net/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/profileme-dev/main/public/icons/skills/php-colored.svg" width="28" height="20" alt="Python" /></a>

## Contributors

- [Russell Ojegun - Fullstack](https://github.com/Ruxy1212)
- [Rejoice Igwebueze - Frontend](https://github.com/Rejoice7571)
- [Aremu Olaoluwa - FrontEnd](https://github.com/Nova-prospec)
- [Urhoghide Justin Uyioghosa  - Frontend](https://github.com/Uyimolo)
- [Olowookere Elizabeth - Product design](https://github.com/Lizzylade)
- [Victor Ogungbure  - Product Design ](https://github.com/VicksArt)
- [Ogunyemi Oluwatimilehin - Product design ](https://github.com/Theonlyrealgee)
- [Ukoha Obinna - Product Design](https://github.com/obisco4u)
- [Muhammed Muktar - Fullstack](https://github.com/maingate27)
- [Emmanuel Akinyemi - Product Design](https://github.com/tm-teck)
- [Agoro Ifeoluwa - Product Design](https://github.com/IfeoluwaUX)
- [Jewel Osafile - PHP](https://github.com/JewelSama)
- [odeleye Joseph Tobi - Frontend](https://github.com/koree99)
- [Onyekwena Jennifer Nneoma - Product Design](https://github.com/Jensss-o)
- [Ighiwiyisi Anthony Osadolor - Fullstack](https://github.com/TonyOsadolor)

## References

- [Live Website](https://project-qr-go.herokuapp.com)
- [Documentation](https://docs.google.com/document/d/18p9V39g_C216a7R_mXDo-8HAFGWnViipYBjA416KJaQ/edit?usp=sharing)
- [Design Prototype](https://www.figma.com/proto/iKsqYnaNBsT43nqnpLkQfh/Project-Qr-Go?node-id=276%3A1924&starting-point-node-id=276%3A1924)
- [Design Sketch](https://www.figma.com/file/iKsqYnaNBsT43nqnpLkQfh/moodboards?t=V9BLm24BScYouKT4-6)
- [Mood Boards](https://www.figma.com/file/iKsqYnaNBsT43nqnpLkQfh/moodboards?t=V9BLm24BScYouKT4-6)
