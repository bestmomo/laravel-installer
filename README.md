## Laravel Installer ##

There is already [a helper package](https://github.com/RachidLaasri/LaravelInstaller) for Laravel application installation. It's great but is not what I need because final people are not developpers and they must have informations that they can understand. On the other hand I think it's usefull to manage the possibility to register an administrator in the installation phase. 

So I have developed this alternative package with final user in mind.

*** It's still a work in progress and will evolve quickly ***

### Features ###

  - point base url to installator route
  - check PHP version
  - check folders permissions
  - check server requirements
  - get the database settings with a form
  - migrate the database
  - seed the database (if needed)
  - optionaly get basic informations (set in config) for administrator creation with a form
  - allow saving complementary informations fo administrator (for example roles)
  - set an unique security key for application
  - remove service provider reference in config to delete the installation stuff

### Installation ###

Add Installer to your composer.json file to require it :
```
    require : {
        ...
        "bestmomo/laravel-installer": "dev-master"
    }
```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to config/app.php :
```
    Bestmomo\Installer\InstallerServiceProvider::class,
```

### Publish ###

The last required step is to publish views, translations and configuration in your application with :
```
    php artisan vendor:publish
```

### Configuration ###

## Views ##

View are in `resources/views/vendor/installer`, you can customize them as you want.

## Translations ##

Translations are in `resources/lang/*` in `installer.php` file. You can customize them as you want and add other languages (default are only `en` and `fr`).

## Configuration ##

Configuration is in `config/installer.php` :

  - ***PHP version*** : you can set newer version if you need for your application
  - ***Server requirements*** : add other requirements if you need for your application
  - ***Permissions*** : add other permissions if you need for your application
  - ***Administrator*** : set `true` if you want administrator creation with installation. Set also the `fields` if default values dont suit. But take care that these fields must fit the `create` method of AuthController because package use this method to create the administrator.

To add other informations to administrator as roles you can create this method in AuthController :
```
protected function userAddValues(User $user)
{
    // Add elements to administrator record there
}
```
The user model is provided as method parameter so you can easily set a query.

## Todo list ## 

  - Screenshots
  - Tutorial

