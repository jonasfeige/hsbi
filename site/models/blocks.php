<?php

class BlocksPage extends Page
{

    public function mode() {
        return 'light';
    }

    public function backLinkUrl()
    {
        return $this->parent()->url() . '?slide=' . $this->indexOf($this->siblings());
    }
    public function backLinkTransition() {
        return 'fromSubpage';
    }
}
