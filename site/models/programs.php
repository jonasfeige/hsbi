<?php

class ProgramsPage extends Page
{

    public function backLinkUrl()
    {
        return kirby()->site()->url();
    }

    public function backLinkRotation() {
        return '90';
    }
}
