<?php

namespace Marcha\LaravelCte\Eloquent;

use Marcha\LaravelCte\Query\Builder;
use Marcha\LaravelCte\Query\FirebirdBuilder;
use Marcha\LaravelCte\Query\OracleBuilder;
use Marcha\LaravelCte\Query\SingleStoreBuilder;

trait QueriesExpressions
{
    /**
     * Get a new query builder instance for the connection.
     *
     * @return \Marcha\LaravelCte\Query\Builder
     */
    protected function newBaseQueryBuilder()
    {
        $connection = $this->getConnection();

        return match ($connection->getDriverName()) {
            'oracle' => new OracleBuilder($connection),
            'singlestore' => new SingleStoreBuilder($connection),
            'firebird' => new FirebirdBuilder($connection),
            default => new Builder($connection),
        };
    }
}
