<?php

namespace Marcha\LaravelCte\Query\Grammars\Traits;

use Illuminate\Database\Query\Builder;

trait CompilesFirebirdExpressions
{
    use CompilesExpressions;

    /**
     * Compile an insert statement using a subquery into SQL.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @param list<string|\Illuminate\Database\Query\Expression<*>> $columns
     * @param string $sql
     * @return string
     */
    public function compileInsertUsing(Builder $query, array $columns, string $sql)
    {
        /** @var \Marcha\LaravelCte\Query\FirebirdBuilder $query */

        $insert = "insert into {$this->wrapTable($query->from)} ({$this->columnize($columns)}) ";

        return "$insert{$this->compileExpressions($query, $query->expressions)} $sql";
    }
}
