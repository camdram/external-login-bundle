<?php
namespace Acts\ExternalLoginBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;

interface ExternalUserProviderInterface extends UserProviderInterface
{

    public function loadUserByServiceAndUsername($service, $username);

    public function persistUser($userinfo, $service, $access_token);

}