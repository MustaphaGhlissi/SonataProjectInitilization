<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Sonata\BlockBundle\Command\DebugBlocksCommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Command\\BaseCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Command\\DebugBlocksCommand.php';

return $this->services['Sonata\BlockBundle\Command\DebugBlocksCommand'] = new \Sonata\BlockBundle\Command\DebugBlocksCommand();
