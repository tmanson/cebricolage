<?php
/**
 * Created by PhpStorm.
 * User: T0139828
 * Date: 21/01/2015
 * Time: 14:02
 */

namespace CE\UserBundle\Controller;

use FOS\UserBundle\Controller\GroupController as BaseController;
use Symfony\Component\Yaml\Parser;

class GroupController extends BaseController
{
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

    static private function convertRoleToLabel($role)
    {
        $roleDisplay = str_replace('ROLE_', '', $role);
        $roleDisplay = str_replace('_', ' ', $roleDisplay);
        return ucwords(strtolower($roleDisplay));
    }
}