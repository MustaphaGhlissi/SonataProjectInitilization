<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.manager.orm' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\ModelManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\LockInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Model\\ModelManager.php';

return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
