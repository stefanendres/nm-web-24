<?php

use Kirby\Cms\Page;

class PostPage extends Page
{
  public function isReadable(): bool
  {
    if ($this->author_id()->isEmpty()){
      return true; // needs to return true so the author_id can be set once without restriction
    } else {
      if ($this->author_id() == $this->kirby()->user()->id() || $this->kirby()->user()->isAdmin()) {
        // make PostPage readable if user is same-author or admin
        return true;
      }
      return false;
    }
  }
}

?>