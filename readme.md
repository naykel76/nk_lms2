# NAYKEL LMS

#### After cloning this repository, go to the root folder and run the following commands to install dependencies.

-   `composer install`
-   `composer update`
-   `npm install` (optional)

#### Configure `.env`

-   rename `.env.example` to `.env`
-   run `php artisan key:generate` **MUST** do after rename `.env`
-   Set app name `APP_NAME="My App"`
-   Set contact email `APP_EMAIL="email@email.com.au"`

-   run `php artisan migrate`
