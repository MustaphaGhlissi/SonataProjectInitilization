<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.notification.dispatcher' shared service.

$this->services['sonata.notification.dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

$instance->addListener('sonata.page.create_snapshots', array(0 => function () {
    return ${($_ = isset($this->services['sonata.page.notification.create_snapshots']) ? $this->services['sonata.page.notification.create_snapshots'] : $this->load('getSonata_Page_Notification_CreateSnapshotsService.php')) && false ?: '_'};
}, 1 => 'process'), 0);
$instance->addListener('sonata.page.create_snapshot', array(0 => function () {
    return ${($_ = isset($this->services['sonata.page.notification.create_snapshot']) ? $this->services['sonata.page.notification.create_snapshot'] : $this->load('getSonata_Page_Notification_CreateSnapshotService.php')) && false ?: '_'};
}, 1 => 'process'), 0);
$instance->addListener('sonata.page.cleanup_snapshots', array(0 => function () {
    return ${($_ = isset($this->services['sonata.page.notification.cleanup_snapshots']) ? $this->services['sonata.page.notification.cleanup_snapshots'] : $this->load('getSonata_Page_Notification_CleanupSnapshotsService.php')) && false ?: '_'};
}, 1 => 'process'), 0);
$instance->addListener('sonata.page.cleanup_snapshot', array(0 => function () {
    return ${($_ = isset($this->services['sonata.page.notification.cleanup_snapshot']) ? $this->services['sonata.page.notification.cleanup_snapshot'] : $this->load('getSonata_Page_Notification_CleanupSnapshotService.php')) && false ?: '_'};
}, 1 => 'process'), 0);
$instance->addListener('mailer', array(0 => function () {
    return ${($_ = isset($this->services['sonata.notification.consumer.swift_mailer']) ? $this->services['sonata.notification.consumer.swift_mailer'] : $this->load('getSonata_Notification_Consumer_SwiftMailerService.php')) && false ?: '_'};
}, 1 => 'process'), 0);
$instance->addListener('logger', array(0 => function () {
    return ${($_ = isset($this->services['sonata.notification.consumer.logger']) ? $this->services['sonata.notification.consumer.logger'] : $this->load('getSonata_Notification_Consumer_LoggerService.php')) && false ?: '_'};
}, 1 => 'process'), 0);

return $instance;
