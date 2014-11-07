<?php

namespace CE\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CEUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
