# <span style="color:blue">**PAUL STANDLEY**</span>

![Profile Pick](http://res.cloudinary.com/pieol2/image/upload/v1516543296/profile-small.png)

---

## Providers

```PHP
  Collective\Html\HtmlServiceProvider::class,
  Unisharp\Ckeditor\ServiceProvider::class,
```

## Aliases

```PHP
  'Form' => Collective\Html\FormFacade::class,
  'Html' => Collective\Html\HtmlFacade::class,
```

---

## Bash

```bash
$ composer create-project laravel/larevel lsapp

$ php artisan make:controller PagesController

$ npm install

$ npm run dev

$ npm run watch

$ php artisan make:controller PostsController Deleted

$ php artisan make:model Post -m

$ php artisan migrate

$ php artisan tinker
>>> App\Post::count()
>>> $post = new App\Post()
>>> $post->title = 'This is Post 1';
>>> $post->body = 'This is post 1 body';
>>> $post->save();
>>> quit

$ php artisan make:controller PostController --resource

$ php artisan route:list

$ composer require "laravelcollective/html":"^5.4.0"

$ composer require laravelcollective/html

$ composer require unisharp/laravel-ckeditor

$ php artisan vendor:publish --tag=ckeditor

$ php artisan make:auth

$ php artisan make:migration add_user_id_to_posts

$ php artisan migrate roleback IF NEEDED
```
