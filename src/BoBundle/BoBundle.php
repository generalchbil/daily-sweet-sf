<?php

namespace BoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
