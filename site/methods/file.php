<?php

return [
    'getAspectRatio' => function () {
        if ($this->type() === 'image') {
            return $this->height() / ($this->width() / 100) . '%';
        }
        return;
    },
    'getOrientation' => function () {
        $orientation = $this->orientation();
        if ($orientation == 'square') {
            $orientation = 'portrait';
        }
        return $orientation;
    },
    'getUploaded' => function () {
        return date("d.m.Y, H:i", $this->uploaded()->value()) . ' Uhr';
    }
];
