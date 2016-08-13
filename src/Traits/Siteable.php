<?php

namespace Inspheric\Sites\Traits;

use Inspheric\Sites\Site;

trait Siteable
{
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
