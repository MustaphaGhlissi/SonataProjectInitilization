<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.renderer.list' shared service.

include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\Renderer.php';
include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\RendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\ListRenderer.php';

return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->getKnpMenu_MatcherService()) && false ?: '_'}, array(), 'UTF-8');
