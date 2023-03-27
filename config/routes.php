<?php

$routes = array(
    //Generique
    // Nom de la page , nom du controller, nom de la methode
    array('home', 'default', 'index'),
    array('contact', 'default', 'contact'),

    //Blog
    array('blog', 'blog', 'listing'),
    array('article', 'blog', 'show', ['id']),
    array('add-article', 'blog', 'add'),
    array('delete-article', 'blog', 'delete', ['id']),
    array('edit-article', 'blog', 'edit', ['id']),

    //Register
    array('register', 'register', 'add'),

);
