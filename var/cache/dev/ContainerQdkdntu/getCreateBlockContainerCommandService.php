<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\PageBundle\Command\CreateBlockContainerCommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Command\\BaseCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Command\\CreateBlockContainerCommand.php';

return $this->services['Sonata\PageBundle\Command\CreateBlockContainerCommand'] = new \Sonata\PageBundle\Command\CreateBlockContainerCommand();
