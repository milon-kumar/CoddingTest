# Codding Test

[![PHP Version Require](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) 
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-%23CB3837.svg?style=for-the-badge&logo=npm&logoColor=white)

## 💻 About Project
I created Codding Test project from scratch. Apart from that I used <a href="https://getbootstrap.com/">BootStrap 5 </a> for a responsive view. I tried to cover your all requirment using <a href="https://laravel.com/docs/10.x">Laravel 10</a> and  <a href="https://vuejs.org/">vuejs 3</a>

### I tried to cover MVC structure with all modules. You get here about:
▶ Login, Register, Dashboard

▶ Employees Management and others



# ⭐ How to clone and set up project from GitHub

### ⪢ Step 1
Firstly, Clone github repo form this url :

https://github.com/milon-kumar/CoddingTest.git

It's a public repo, you don't need any credentials to download the project.

#Backend:-

### ⪢ Step 2
Next, open the project in your local editor then open the .env file and put your database details:

``` DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
```
### ⪢ Step 3
Then open your project editor terminal and go to project directory <b> >> backend</b>

Next:-

``` Run composer install.
    Run cp .env.example .env.
    Run php artisan key:generate.
    Run php artisan migrate.
    Run php artisan serve.
    Run php artisan migrate --seed.
    Go to link localhost:8000.
```

# ⭐ Some other useful commands of Laravel:
✅ To clear the cache: <b>php artisan optimize</b>

✅ Make new controller:<b> php artisan make:controller name_of_controller</b>

✅ Make new middleware: <b>php artisan make:middleware name_of_middleware</b>

✅ Make new model: <b>php artisan make:model name_of_model</b>

#Frontend :-
Then open your project editor terminal and go to project directory <b> >> frontend</b>

Next:-

set your base api url in main.js . Default `http://127.0.0.1:8000`


``` 
    Run npm install
    Run npm run dev
```
