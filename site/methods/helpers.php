<?php

function buildSrcset(array $customOptions = [])
{
    $defaultOptions = [
        'preset' => 'default',
        'format' => 'jpg',
        'quality' => 90
    ];

    $options = A::merge($defaultOptions, $customOptions);

    $presets = [
        'default-' . $options['format'] => [
            '768w' => ['width' => 768, 'quality' => $options['quality'], 'format' => $options['format']],
            '1024w' => ['width' => 1024, 'quality' => $options['quality'], 'format' => $options['format']],
        ],
        'landscape-' . $options['format'] => [
            '768w' => ['width' => 768, 'quality' => $options['quality'], 'format' => $options['format']],
            '1024w' => ['width' => 1024, 'quality' => $options['quality'], 'format' => $options['format']],
            '1280w' => ['width' => 1280, 'quality' => $options['quality'], 'format' => $options['format']],
        ],
        'portrait-' . $options['format'] => [
            '640w' => ['width' => 320, 'quality' => $options['quality'], 'format' => $options['format']],
            '768w' => ['width' => 560, 'quality' => $options['quality'], 'format' => $options['format']],
            '1024w' => ['width' => 720, 'quality' => $options['quality'], 'format' => $options['format']],
            '1280w' => ['width' => 960, 'quality' => $options['quality'], 'format' => $options['format']],
        ],
        'thumbnail-' . $options['format'] => [
            '480w' => ['width' => 320, 'quality' => $options['quality'], 'format' => $options['format']],
            '640w' => ['width' => 480, 'quality' => $options['quality'], 'format' => $options['format']],
        ],
        'book-' . $options['format'] => [
            '480w' => ['width' => 480, 'quality' => $options['quality'], 'format' => $options['format']],
            '640w' => ['width' => 640, 'quality' => $options['quality'], 'format' => $options['format']],
            '768w' => ['width' => 768, 'quality' => $options['quality'], 'format' => $options['format']],
        ],
    ];

    return $presets[$options['preset'] . '-' . $options['format']];
};
