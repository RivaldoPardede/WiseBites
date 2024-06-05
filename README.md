<p align="center"><img src="public\assets\svg\Logo.svg"/></p>
<h1 align="center">WiseBites</h1>

---

## Table of Contents

-   [Preview](#preview)
-   [Description](#description)
-   [Tech Stack](#tech-stack)
-   [Installation](#instalation)
-   [Data Source](#data-source)
-   [Design](#design)
-   [Documents](#documents)
-   [Contributors](#contributors)

---

## Preview

Demo Video : <a href="https://drive.google.com/file/d/1lF2AaKsV9WGBOlbqCb-N1qcOF5FvXm_l/view?usp=sharing">WiseBites Demo</a>

<br>

## Description

WiseBites is a web-based application designed to provide users with food recipe recommendations. It offers suggestions based on two scenarios: matching recipes with the ingredients users currently have and providing recipe options that fit within users' budgets. Additionally, WiseBite aims to educate users about the ingredients and cooking steps involved in each recipe.

<br>

## Tech Stack
<p align="left">
    <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40" align="left"/> </a> 
    <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40" align="left"/> </a>
    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40" align="left"/> </a>
    <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40" align="left"/> </a>
    <a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/laravel/laravel-ar21.svg" alt="laravel" height="40" align="left"/> </a>
    <a href="https://www.figma.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/figma/figma-ar21.svg" alt="figma" height="40" align="left"/> </a>
    <a href="https://www.figma.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/postgresql/postgresql-horizontal.svg" alt="figma" height="40" align="left"/> </a>
</p>

<br><br><br>

## Instalation

1.  Clone this Repository
    ```bash
    git clone https://github.com/RivaldoPardede/WiseBites.git
    ```
2.  Install All the Requirements
    ```bash
    composer install
    npm install
    ```
3.  Generate the env
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4.  Open `.env` file and modify the database
    ```bash
    DB_CONNECTION='database_connection'
    DB_HOST='database_host'
    DB_PORT='database_port'
    DB_DATABASE=wisebite
    DB_USERNAME='database_username'
    DB_PASSWORD='database_password'
    ```
5.  Migrate the database
    ```bash
    php artisan migrate:fresh
    ```
6.  Run the Application
    ```bash
    php artisan serve
    npm run dev
    ```
7.  Stop the application by `ctrl + c`

<br><br>

## Data Source

API : <a href="https://spoonacular.com/food-api/">Recipe Data</a>

<br>

## Design

Figma : <a href="https://www.figma.com/design/8vFYk6Wl0CMr2aUwJxXaL8/WiseBites?node-id=0-1">WiseBites Design</a>

<br>

## Documents

Software Requirement Specification : <a href="https://drive.google.com/drive/folders/1e1cDwK1Wu59N7AouZsDz614TRKSpkz-u?usp=sharing">WiseBites SRS</a>

<br>

## Contributors

-   Leader:<br>
    Rivaldo Dominggos Pardede - Front End<br>
-   Member:<br>
    Christian Nathaniel - Front End<br>
    Dhea Tania Salsabila Harahap - UI/UX<br>
    Frederick Godiva - Back End<br>
    Fico Yanton Jeremia Sibagariang - Back End<br>
    Rio Octaviannus Loka - Back End<br>
