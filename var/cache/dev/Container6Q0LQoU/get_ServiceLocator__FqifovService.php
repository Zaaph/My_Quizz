<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..Fqifov' shared service.

return $this->privates['.service_locator..Fqifov'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
    return ($this->services['session'] ?? $this->load('getSessionService.php'));
}, 'user' => function (): \App\Entity\User {
    return ($this->privates['.errored..service_locator..Fqifov.App\Entity\User'] ?? $this->load('getUserService.php'));
}));
