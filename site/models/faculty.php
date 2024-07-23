<?php

class FacultyPage extends Page
{

    public function mode()
    {
        return 'dark';
    }

    public function backLinkUrl()
    {
        return $this->parent()->url() . '#' . $this->slug();
    }

    public function backLinkTransition()
    {
        return 'fromFaculty';
    }
}
