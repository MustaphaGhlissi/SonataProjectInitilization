<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.cache.orm.event_subscriber.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\EventSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\cache\\src\\Invalidation\\DoctrineORMListener.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\cache-bundle\\src\\Invalidation\\DoctrineORMListener.php';

return $this->services['sonata.cache.orm.event_subscriber.default'] = new \Sonata\CacheBundle\Invalidation\DoctrineORMListener(${($_ = isset($this->services['sonata.cache.model_identifier']) ? $this->services['sonata.cache.model_identifier'] : $this->services['sonata.cache.model_identifier'] = new \Sonata\Cache\Invalidation\ModelCollectionIdentifiers(array())) && false ?: '_'}, array('sonata.page.cache.js_sync' => ${($_ = isset($this->services['sonata.page.cache.js_sync']) ? $this->services['sonata.page.cache.js_sync'] : $this->getSonata_Page_Cache_JsSyncService()) && false ?: '_'}, 'sonata.page.cache.js_async' => ${($_ = isset($this->services['sonata.page.cache.js_async']) ? $this->services['sonata.page.cache.js_async'] : $this->getSonata_Page_Cache_JsAsyncService()) && false ?: '_'}, 'sonata.cache.noop' => ${($_ = isset($this->services['sonata.cache.noop']) ? $this->services['sonata.cache.noop'] : $this->services['sonata.cache.noop'] = new \Sonata\Cache\Adapter\Cache\NoopCache()) && false ?: '_'}));
