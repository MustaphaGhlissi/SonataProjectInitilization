<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.seo.event.breadcrumb' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\seo-bundle\\src\\Event\\BreadcrumbListener.php';

$this->services['sonata.seo.event.breadcrumb'] = $instance = new \Sonata\SeoBundle\Event\BreadcrumbListener();

$instance->addBlockService('sonata.page.block.breadcrumb', ${($_ = isset($this->services['sonata.page.block.breadcrumb']) ? $this->services['sonata.page.block.breadcrumb'] : $this->load('getSonata_Page_Block_BreadcrumbService.php')) && false ?: '_'});
$instance->addBlockService('sonata.seo.block.breadcrumb.homepage', ${($_ = isset($this->services['sonata.seo.block.breadcrumb.homepage']) ? $this->services['sonata.seo.block.breadcrumb.homepage'] : $this->load('getSonata_Seo_Block_Breadcrumb_HomepageService.php')) && false ?: '_'});

return $instance;
