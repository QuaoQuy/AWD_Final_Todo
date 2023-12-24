<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About this project

Final exam for ```Advanced Web Development``` subject at VNUK Institute for Research and Executive Education

Student: ```Phan Văn Quý```

Student ID: ```21020003```

Lecterer: ```Nguyễn Hữu Quyền```

## Integrated Kits

- **[Laravel Breeze & Livewire](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)**
- **[Laravel Sanctum](https://laravel.com/docs/10.x/sanctum#main-content)**
- **[Scramble](https://scramble.dedoc.co/) & [Telescope](https://laravel.com/docs/10.x/telescope#main-content)**
- **[Tailwind CSS](https://tailwindcss.com/) (via [Vite](https://laravel.com/docs/10.x/vite))**

## Features

- Basic Todos application with ```CRUD``` functions
- Login and register function
- Managing todo tasks & categories
- User profile management by ```Breeze kit```
- ```Filter tasks by category``` (Can be filtered by selected one, or all, or none)

## Dev features
- Database migration and models to create schema
- Database seeder using factories
- Implement ```Livewire``` using ```Blade``` as layout
- Service providers such as ```Scramble``` to create API document
- Monitor requests via ```Telescope```


## Demo video
https://youtu.be/Dj8F0KejdBY
 
## Database schema
![Screenshot 2023-12-24 225242](https://github.com/QuaoQuy/AWD_Final_Todo/assets/130327203/a4d42152-9407-4a75-99ed-1d2ab7eb2833)


## Installation
1. Clone this repository
```shell
    git clone https://github.com/QuaoQuy/AWD_Final_Todo.git
````
2. Install dependencies
```shell
    composer install
    npm install
````
3. Database migrate and seed
   (Check your database config in .env and config/database.php before processing)
```shell
    php artisan migrate --seed
````
4. Run Laravel application
```shell
    php artisan serve
````
5. Run Vite (for Tailwind CSS)
```shell
    npm run dev
````
