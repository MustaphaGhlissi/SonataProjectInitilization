<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.page.notification.cleanup_snapshots' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\notification-bundle\\src\\Consumer\\ConsumerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Consumer\\CleanupSnapshotsConsumer.php';

$a = ${($_ = isset($this->services['sonata.notification.backend.runtime']) ? $this->services['sonata.notification.backend.runtime'] : $this->load('getSonata_Notification_Backend_RuntimeService.php')) && false ?: '_'};

return $this->services['sonata.page.notification.cleanup_snapshots'] = new \Sonata\PageBundle\Consumer\CleanupSnapshotsConsumer($a, $a, ${($_ = isset($this->services['sonata.page.manager.page']) ? $this->services['sonata.page.manager.page'] : $this->load('getSonata_Page_Manager_PageService.php')) && false ?: '_'});