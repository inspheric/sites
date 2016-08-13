<?php

namespace Inspheric\Sites\Providers;

use Inspheric\Support\Providers\PackageServiceProvider;
use Inspheric\Sites\Site;

class SitesServiceProvider extends PackageServiceProvider
{
    protected $name = 'sites';

    protected $namespace = 'Inspheric\Sites\Http\Controllers';

    public function bindRoutes()
    {
        $this->bindModel('sites', Site::class);
    }

}
