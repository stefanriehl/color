<?php

use Spatie\Color\Hex;

dataset('colors', [
    [
        '#ffc107', // HEX
        'rgb(255,193,7)', // RGB
        'hsla(45,100%,51%,1)', // HSLA
    ],
    [
        '#dc3545', // HEX
        'rgb(220,53,69)', // RGB
        'hsla(354,70%,54%,1)', // HSLA
    ],
    [
        '#532952', // HEX
        'rgb(83,41,82)', // RGB
        'hsla(301,34%,24%,1)', // HSLA
    ],
    [
        '#512952', // HEX
        'rgb(81,41,82)', // RGB
        'hsla(299,33%,24%,1)', // HSLA
    ],
    [
        '#faffff', // HEX
        'rgb(250,255,255)', // RGB
        'hsla(180,100%,99%,1)', // HSLA
    ],
    [
        '#feffff', // HEX
        'rgb(254,255,255)', // RGB
        'hsla(180,100%,100%,1)', // HSLA
    ],
    [
        '#fefeff', // HEX
        'rgb(254,254,255)', // RGB
        'hsla(240,100%,100%,1)', // HSLA
    ],
    [
        '#fefefd', // HEX
        'rgb(254,254,253)', // RGB
        'hsla(60,33%,99%,1)', // HSLA
    ],
    [
        '#040504', // HEX
        'rgb(4,5,4)', // RGB
        'hsla(120,11%,2%,1)', // HSLA
    ],
    [
        '#000000', // HEX
        'rgb(0,0,0)', // RGB
        'hsla(0,0%,0%,1)', // HSLA
    ],
    [
        '#808080', // HEX
        'rgb(128,128,128)', // RGB
        'hsla(0,0%,50%,1)', // HSLA
    ],
    [
        '#ffffff', // HEX
        'rgb(255,255,255)', // RGB
        'hsla(0,0%,100%,1)', // HSLA
    ],
]);

dataset('contrast_colors', [
    [Hex::fromString('#ffffff'), Hex::fromString('#ffffff'), 1.0],
    [Hex::fromString('#ffffff'), Hex::fromString('#000000'), 21.0],
    [Hex::fromString('#000000'), Hex::fromString('#000000'), 1.0],
    [Hex::fromString('#faebd7'), Hex::fromString('#8a2be2'), 5.0],
    [Hex::fromString('#ff1493'), Hex::fromString('#cd5c5c'), 1.0],
    [Hex::fromString('#f0fff0'), Hex::fromString('#191970'), 15.0],
]);
