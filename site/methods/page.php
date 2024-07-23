<?php

return [
    'backLinkRotation' => function () {
        return 0;
    },
    'mode' => function () {
        return 'dark';
    },
    'backLinkTransition' => function() {
        return false;
    },
    'thumbnail' => function() {
        if($this->header()->isNotEmpty()) {
            $header = $this->header()->toObject();
            if($image = $header->background()->toFile()) {
                return $image;
            }
        } else {
            return $this->images()->first();
        }
    }

];
