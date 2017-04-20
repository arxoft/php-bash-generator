<?php 
require('lib/core.php');

_hashbang();
_input('name', 'Hey ' . _user() . ', Type your name here: ');
_echo('Hello $name.');

_input('gender','What is your gender? '); 
_if('$gender == "m"',
    $true = function() {
        _input('car','So Dude, What is your favorite ride? ');
    }, 
    $false = function() {
        _input('food','Ahaa, what is that you can not wait to eat?');
    }
);

_output('script.sh');