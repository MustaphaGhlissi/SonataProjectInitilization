<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.object.manipulator.acl.admin' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Util\\AdminObjectAclManipulator.php';

return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}, 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
