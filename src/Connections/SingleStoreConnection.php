<?php

namespace Marcha\LaravelCte\Connections;

use SingleStore\Laravel\Connect\Connection as Base;
use Marcha\LaravelCte\Query\SingleStoreBuilder;

class SingleStoreConnection extends Base
{
    /** @inheritDoc */
    public function query()
    {
        return new SingleStoreBuilder($this);
    }
}
