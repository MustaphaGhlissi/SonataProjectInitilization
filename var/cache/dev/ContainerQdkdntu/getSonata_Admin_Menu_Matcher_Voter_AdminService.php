<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.menu.matcher.voter.admin' shared service.

include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Voter\\VoterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Menu\\Matcher\\Voter\\AdminVoter.php';

return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
