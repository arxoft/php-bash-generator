<?php 
$_statements = [];
function _a($command) { // Append
    global $_statements;
    $_statements[] = $command;
}

function _statements() {
    global $_statements;
    return $_statements;
}

function _hashbang() {
    _a('#!/bin/bash');
}

function _input($var, $text) { 
    _echo($text); 
    _a('read ' . $var);
}

function _echo($str) {
    _a('echo "' . addslashes($str) . '"');
}

function _output($file = 'bash.sh') { 
    if(file_exists($file)) unlink($file);
    $handle = fopen($file, "a");
    foreach(_statements() as $statement) { 
        fwrite($handle, $statement . "\n");
    }
}

function _user() {
    return '$USER';
}

function _if($criteria, $true, $false='') {
    $criteria = str_replace('<','-lt', $criteria);
    _a('if [ ' . $criteria . ' ]; then ');
    _a($true());
    if($false) {
        _a('else');
        _a($false());
    }
    _a('fi');
}