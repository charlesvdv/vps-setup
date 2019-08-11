<?php

$CONFIG = array(
    'objectstore' => array(
        'class' => '\\OC\\Files\\ObjectStore\\S3',
        'arguments' => array(
            'bucket' => 'nextcloud',
            'autocreate' => false,
            'key' => getenv('MINIO_ACCESS_KEY'),
            'secret' => getenv('MINIO_ACCESS_KEY'),
            'hostname' => 'b2-gateway',
            'port' => 9000,
            'use_ssl' => false,
            'use_path_style' => true,
        ),
    ),
);