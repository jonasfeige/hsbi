<?php

return [
    'debug' => true,
    'panel' => [
        'language' => 'de'
    ],
    'bvdputte.fingerprint.parameter' => true,
    'hooks' => [
        'file.create:after' => function (Kirby\Cms\File $file) {
            try {
                $file->update([
                    'uploaded' => time()
                ]);
            } catch (Exception $e) {
                throw $e;
            }
        }
    ]
];
