<?php
/**
 * Created by PhpStorm.
 * User: T0139828
 * Date: 21/01/2015
 * Time: 14:02
 */

namespace CE\UserBundle\Controller;

use FOS\UserBundle\Controller\GroupController as BaseController;
use FOS\UserBundle\Event\GetResponseGroupEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Parser;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Event\FilterGroupResponseEvent;

class GroupController extends BaseController
{
    /**
     * @return array la liste des nom des groupes définis dans le security.yml
     */
    static function getRoleNames()
    {
        $pathToSecurity = __DIR__ . '/../../../..' . '/app/config/security.yml';
        $yaml = new Parser();
        $rolesArray = $yaml->parse(file_get_contents($pathToSecurity));
        $arrayKeys = array();
        foreach ($rolesArray['security']['role_hierarchy'] as $key => $value)
        {
            //never allow assigning super admin
            if ($key != 'ROLE_SUPER_ADMIN')
                $arrayKeys[$key] = GroupController::convertRoleToLabel($key);
            //skip values that are arrays --- roles with multiple sub-roles
            if (!is_array($value))
                if ($value != 'ROLE_SUPER_ADMIN')
                    $arrayKeys[$value] = GroupController::convertRoleToLabel($value);
        }
        //sort for display purposes
        asort($arrayKeys);
        return $arrayKeys;
    }

    /**
     * Converti un role en un label
     * @param $role
     * @return string le label correspondant au role
     */
    static private function convertRoleToLabel($role)
    {
        $roleDisplay = str_replace('ROLE_', '', $role);
        $roleDisplay = str_replace('_', ' ', $roleDisplay);
        return ucwords(strtolower($roleDisplay));
    }
}