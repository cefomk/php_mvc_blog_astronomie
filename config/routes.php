<?php

$routes = array(
    //Generique
    array('home','default','index'),
    array('contact','default','contact'),

    //Blog
    array('blog','blog','listing'),
    array('article','blog','show',['id']),
    array('add-article','blog','add'),


    
);









