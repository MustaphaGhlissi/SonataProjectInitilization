<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\CacheBundle\Command\CacheFlushAllCommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\cache-bundle\\src\\Command\\BaseCacheCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\cache-bundle\\src\\Command\\CacheFlushAllCommand.php';

return $this->services['Sonata\CacheBundle\Command\CacheFlushAllCommand'] = new \Sonata\CacheBundle\Command\CacheFlushAllCommand();
