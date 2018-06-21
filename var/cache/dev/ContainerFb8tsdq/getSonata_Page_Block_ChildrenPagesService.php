<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.page.block.children_pages' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Block\\ChildrenPagesBlockService.php';

return $this->services['sonata.page.block.children_pages'] = new \Sonata\PageBundle\Block\ChildrenPagesBlockService('sonata.page.block.children_pages', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->getSonata_TemplatingService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.page.site.selector.host']) ? $this->services['sonata.page.site.selector.host'] : $this->getSonata_Page_Site_Selector_HostService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.page.cms_manager_selector']) ? $this->services['sonata.page.cms_manager_selector'] : $this->services['sonata.page.cms_manager_selector'] = new \Sonata\PageBundle\CmsManager\CmsManagerSelector($this)) && false ?: '_'});
