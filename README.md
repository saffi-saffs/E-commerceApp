# Laravel Project

This is a Laravel project of E commerce Website.

## Table of Contents

-   [About](#about)
-   [Prerequisites](#prerequisites)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Development](#development)
-   [License](#license)

## About

This repository contains a Laravel project ecommerce application.
This project contains all the necessary functionalities of aa E governance Website.
It includes various dependencies and configurations for building web applications using the Laravel framework.

## Prerequisites

Before you begin, ensure you have met the following requirements:

-   [PHP](https://www.php.net/) (>= 8.1)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/) (>= 14)
-   [npm](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/) (for frontend assets)
-   [Laravel](https://laravel.com/) (>= 10.10)
-   [Guzzle HTTP](https://docs.guzzlephp.org/en/stable/overview.html)
-   [Tailwind CSS](https://tailwindcss.com/) (>= 3.3.3)
-   [Vite](https://vitejs.dev/) (>= 4.4.9)

## Installation

Follow these steps to set up the Laravel project:

1.Clone the repository:
git clone https://github.com/saffi-saffs/E-commerceApp.git
cd <project_directory>
2.Install PHP dependencies:
composer install

     3.Install JavaScript dependencies
     npm install

# OR

yarn install

4.Create a .env file:
cpy .env.example .env

5.Generate an application key:

php artisan key:generate

6.Migrate the database:
php artisan migrate

7.Serve the application:
php artisan serve

## Usage

Visit the Laravel documentation for information on how to use and customize the Laravel framework: Laravel Documentation.

## Development

For development purposes, you can use the following scripts:

1.Start development server:
npm run dev

2.Build for production:
npm run build

## License

This project is licensed under the MIT License. See the LICENSE file for details.
