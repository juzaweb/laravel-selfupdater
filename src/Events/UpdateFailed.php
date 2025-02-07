<?php

namespace Codedge\Updater\Events;

use Codedge\Updater\Models\Release;

class UpdateFailed
{
    protected Release $release;

    public function __construct(Release $release)
    {
        $this->release = $release;
    }
}
