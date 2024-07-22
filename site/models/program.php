<?php

class ProgramPage extends Page
{

    public function backLinkUrl()
    {
        return $this->parent()->url();
    }
}
