<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PHP version requirement
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel PHP requirement, you can change
    | it if your application require.
    |
    */
    'php-version' => '5.5.9',

    /*
    |--------------------------------------------------------------------------
    | Server Requirements
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel server requirements, you can add as many
    | as your application require, we check if the extension is enabled
    | by looping through the array and run "extension_loaded" on it.
    |
    */
    'requirements' => [
        'openssl',
        'pdo',
        'mbstring',
        'tokenizer'
    ],

    /*
    |--------------------------------------------------------------------------
    | Folders Permissions
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel folders permissions, if your application
    | requires more permissions just add them to the array list bellow.
    |
    */
    'permissions' => [
        'storage/app/'           => '775',
        'storage/framework/'     => '775',
        'storage/logs/'          => '775',
        'bootstrap/cache/'       => '775'
    ],

    /*
    |--------------------------------------------------------------------------
    | Administrator creator
    |--------------------------------------------------------------------------
    |
    | Set true if you want administrator creation
    |
    */
    'administrator' => true,

    /*
    |--------------------------------------------------------------------------
    | Administrator fields
    |--------------------------------------------------------------------------
    |
    | Set all fields as setted in create method of AuthController
    |
    */    
    'fields' => [
        'name' => 'text',
        'email' => 'email',
        'password' => 'text'
    ],

];