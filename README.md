<div style="display: flex; justify-content: center; align-items: center;">
<p style="font-size: 64px; ">WiseBite <img src="public\assets\svg\Logo.svg"/></p>
</div>

---

## Table of Contents

-   [Preview](#preview)
-   [Description](#description)
-   [Tech Stack](#tech-stack)
-   [Installation](#instalation)
-   [Data Source](#data-source)
-   [Design](#design)
-   [Documents](#documents)
-   [Contribution](#contribution)

---

## Preview

video

<br>

## Description

WiseBite is a web-based application designed to provide users with food recipe recommendations. It offers suggestions based on two scenarios: matching recipes with the ingredients users currently have and providing recipe options that fit within users' budgets. Additionally, WiseBite aims to educate users about the ingredients and cooking steps involved in each recipe.

<br>

## Tech Stack
- <a href="https://tailwindcss.com">TailwindCSS</a>
- <a href="https://laravel.com">Laravel</a>

<br>

## Instalation

1.  Clone this Repository
    ```bash
    git clone https://github.com/RivaldoPardede/ProjectADPL.git
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

API : <a href="https://www.figma.com/design/8vFYk6Wl0CMr2aUwJxXaL8/WiseBites?node-id=0-1">Recipe Data</a>

<br>

## Design

Figma : <a href="https://www.figma.com/design/8vFYk6Wl0CMr2aUwJxXaL8/WiseBites?node-id=0-1">WiseBite Design</a>

<br>

## Documents

Software Requirement Specification :

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
