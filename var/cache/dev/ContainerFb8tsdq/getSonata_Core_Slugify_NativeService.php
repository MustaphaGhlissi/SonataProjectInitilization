<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.slugify.native' shared service.

@trigger_error('The "sonata.core.slugify.native" service is deprecated since 2.3 and will be removed in 4.0.', E_USER_DEPRECATED);

return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
