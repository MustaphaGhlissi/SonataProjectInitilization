<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.menu.matcher.voter.active' shared service.

include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Voter\\VoterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Menu\\Matcher\\Voter\\ActiveVoter.php';

return $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter();
