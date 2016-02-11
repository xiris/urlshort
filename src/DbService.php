<?php

/**
 * Source code file for DbService.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class DbService
{
    private $shortening;

    public function persist(Shortening $shortening)
    {
        $this->shortening = $shortening;
        $this->save();
    }

    private function save()
    {
        return true;
    }
}
