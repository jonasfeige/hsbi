<?php

class ProgramPage extends Page
{

    public function backLinkUrl()
    {
        return $this->parent()->url() . '?slide=' . $this->indexOf($this->siblings());
    }
}
