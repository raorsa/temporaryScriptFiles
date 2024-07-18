<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    //url from js files
    'path' => 'temp-scripts',
    //Raorsa\RWFileCache
    // config values
    //     [
    //        'gzipCompression' => true,
    //        'cacheDirectory' => '/tmp/rwFileCacheStorage/',
    //        'fileExtension' => 'cache',
    //    ];
    'cache' => [
        'cacheDirectory' => '/tmp/TemporaryScriptFiles/'
    ],
    // life of cache files
    'max_time_life' => 1800 //in seconds
];