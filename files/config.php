<?php
//var_dump(password_hash('test123', PASSWORD_BCRYPT));
//var_dump(password_hash('tok219', PASSWORD_BCRYPT));


return [
    'baseDir' => __DIR__ . '/storage',
    'webRout' => 'files/storage',
    'users' => [
    'admin123' => '$2y$10$uetnPoefetfmddgFgezmMuGvIlJZ8yVvEcWroOcnQevz1ckSKBWAi',
    'admin12' => '$2y$10$B1r482x4ZIaSOjvOrrzkXeGln498oDMZClQYuGv/j1tyZ5PLnMbsS',
    ],

    'db' => [
        'host' => 'db',
        'user' => 'andy_user',
        'password' => 'andy_pwd',
        'db' => 'andy_db',
        ],
 ];

