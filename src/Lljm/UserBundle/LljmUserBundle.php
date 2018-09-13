<?php

namespace Lljm\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LljmUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
