<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.exception.renderer.throw' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\RendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\MonkeyThrowRenderer.php';

return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();