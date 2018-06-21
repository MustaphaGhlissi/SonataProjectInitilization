<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.page.block.shared_block' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Block\\SharedBlockBlockService.php';

return $this->services['sonata.page.block.shared_block'] = new \Sonata\PageBundle\Block\SharedBlockBlockService('sonata.page.block.shared_block', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->getSonata_TemplatingService()) && false ?: '_'}, $this, ${($_ = isset($this->services['sonata.page.manager.block']) ? $this->services['sonata.page.manager.block'] : $this->load('getSonata_Page_Manager_BlockService.php')) && false ?: '_'});