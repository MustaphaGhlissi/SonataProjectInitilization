<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.page.form.page_type_choice' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\page-bundle\\src\\Form\\Type\\PageTypeChoiceType.php';

return $this->services['sonata.page.form.page_type_choice'] = new \Sonata\PageBundle\Form\Type\PageTypeChoiceType(${($_ = isset($this->services['sonata.page.page_service_manager']) ? $this->services['sonata.page.page_service_manager'] : $this->getSonata_Page_PageServiceManagerService()) && false ?: '_'});
