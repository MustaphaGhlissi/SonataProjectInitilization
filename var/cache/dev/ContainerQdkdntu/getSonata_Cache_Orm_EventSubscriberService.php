<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.cache.orm.event_subscriber' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\EventSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\cache-bundle\\src\\Invalidation\\DoctrineORMListenerContainerAware.php';

return $this->services['sonata.cache.orm.event_subscriber'] = new \Sonata\CacheBundle\Invalidation\DoctrineORMListenerContainerAware($this, 'sonata.cache.orm.event_subscriber.default');
