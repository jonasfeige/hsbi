<?php

class HsbiPage extends Page {

    public function backLinkUrl()
    {
        return kirby()->site()->url();
    }

    public function backLinkRotation() {
        return -90;
    }

    public function mode() {
        return 'light';
    }

}
