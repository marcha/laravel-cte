<?php

namespace Marcha\LaravelCte\Connections;

use Marcha\LaravelCte\Query\FirebirdBuilder;
use Marcha\Firebird\Connection as Base;

class FirebirdConnection extends Base
{
    /**
     * Get a new query builder instance.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function query()
    {
        return new FirebirdBuilder($this);
    }
}
