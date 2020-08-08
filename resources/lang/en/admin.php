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

    'producto' => [
        'title' => 'Productos',

        'actions' => [
            'index' => 'Productos',
            'create' => 'New Producto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'Precio' => 'Precio',
            'Stock' => 'Stock',
            'Categoria' => 'Categoria',
            
        ],
    ],

    'usuario' => [
        'title' => 'Usuarios',

        'actions' => [
            'index' => 'Usuarios',
            'create' => 'New Usuario',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombres' => 'Nombres',
            'Apellidos' => 'Apellidos',
            'Usuario' => 'Usuario',
            'Contraseña' => 'Contraseña',
            'Email' => 'Email',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];