<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.seo.block.facebook.send_button' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\seo-bundle\\src\\Block\\Social\\BaseFacebookSocialPluginsBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\seo-bundle\\src\\Block\\Social\\FacebookSendButtonBlockService.php';

return $this->services['sonata.seo.block.facebook.send_button'] = new \Sonata\SeoBundle\Block\Social\FacebookSendButtonBlockService('sonata.seo.block.facebook.send_button', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->getSonata_TemplatingService()) && false ?: '_'});
