<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.notification.consumer.metadata' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\notification-bundle\\src\\Consumer\\Metadata.php';

return $this->services['sonata.notification.consumer.metadata'] = new \Sonata\NotificationBundle\Consumer\Metadata(array('sonata.page.create_snapshots' => array(0 => 'sonata.page.notification.create_snapshots'), 'sonata.page.create_snapshot' => array(0 => 'sonata.page.notification.create_snapshot'), 'sonata.page.cleanup_snapshots' => array(0 => 'sonata.page.notification.cleanup_snapshots'), 'sonata.page.cleanup_snapshot' => array(0 => 'sonata.page.notification.cleanup_snapshot'), 'mailer' => array(0 => 'sonata.notification.consumer.swift_mailer'), 'logger' => array(0 => 'sonata.notification.consumer.logger')));
