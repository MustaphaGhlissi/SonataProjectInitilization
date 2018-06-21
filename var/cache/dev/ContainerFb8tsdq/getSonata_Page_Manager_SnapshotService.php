<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.page.manager.snapshot' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Model\\SnapshotManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Entity\\SnapshotManager.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Model\\SnapshotPageProxyFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Model\\SnapshotPageProxyFactory.php';

return $this->services['sonata.page.manager.snapshot'] = new \Sonata\PageBundle\Entity\SnapshotManager('Application\\Sonata\\PageBundle\\Entity\\Snapshot', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, '', ${($_ = isset($this->services['sonata.page.proxy.snapshot.factory']) ? $this->services['sonata.page.proxy.snapshot.factory'] : $this->services['sonata.page.proxy.snapshot.factory'] = new \Sonata\PageBundle\Model\SnapshotPageProxyFactory('Sonata\\PageBundle\\Model\\SnapshotPageProxy')) && false ?: '_'});
