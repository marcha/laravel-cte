<?php

namespace Marcha\LaravelCte\Query;

use SingleStore\Laravel\Query\SingleStoreQueryBuilder;
use Marcha\LaravelCte\Query\Traits\BuildsExpressionQueries;

class SingleStoreBuilder extends SingleStoreQueryBuilder
{
    use BuildsExpressionQueries;
}
