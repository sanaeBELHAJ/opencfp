<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'wouterj_eloquent.initializer' shared service.

return $this->services['wouterj_eloquent.initializer'] = new \WouterJ\EloquentBundle\EventListener\EloquentInitializer(${($_ = isset($this->services['wouterj_eloquent']) ? $this->services['wouterj_eloquent'] : $this->load(__DIR__.'/getWouterjEloquentService.php')) && false ?: '_'}, 'default');