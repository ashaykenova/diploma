<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'tour' => [
        'title' => 'Tours',

        'actions' => [
            'index' => 'Tours',
            'create' => 'New Tour',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'announce' => 'Announce',
            'description' => 'Description',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'lunk' => 'Lunk',
            
        ],
    ],

    'tour' => [
        'title' => 'Tours',

        'actions' => [
            'index' => 'Tours',
            'create' => 'New Tour',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'announce' => 'Announce',
            'description' => 'Description',
            
        ],
    ],

    'guided-tour' => [
        'title' => 'Guided Tours',

        'actions' => [
            'index' => 'Guided Tours',
            'create' => 'New Guided Tour',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'announce' => 'Announce',
            'description' => 'Description',
            
        ],
    ],

    'place' => [
        'title' => 'Places',

        'actions' => [
            'index' => 'Places',
            'create' => 'New Place',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'announce' => 'Announce',
            'description' => 'Description',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];