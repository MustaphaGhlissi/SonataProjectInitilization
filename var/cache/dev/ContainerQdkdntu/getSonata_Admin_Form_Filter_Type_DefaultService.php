<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.form.filter.type.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DefaultType.php';

return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
