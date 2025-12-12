<?php

namespace Marcha\LaravelCte\Connections;

use Marcha\LaravelCte\Query\Builder;

trait CreatesQueryBuilder
{
    /** @inheritDoc */
    public function query()
    {
        return new Builder($this);
    }
}
