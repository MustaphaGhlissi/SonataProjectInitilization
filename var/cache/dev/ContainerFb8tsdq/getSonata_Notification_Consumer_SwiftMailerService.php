<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.notification.consumer.swift_mailer' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\notification-bundle\\src\\Consumer\\ConsumerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\notification-bundle\\src\\Consumer\\SwiftMailerConsumer.php';

return $this->services['sonata.notification.consumer.swift_mailer'] = new \Sonata\NotificationBundle\Consumer\SwiftMailerConsumer(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'});
