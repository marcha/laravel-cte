<?php

namespace Marcha\LaravelCte\Query;

use SingleStore\Laravel\Query\Builder;
use Marcha\LaravelCte\Query\Traits\BuildsExpressionQueries;

class SingleStoreBuilder extends Builder
{
    use BuildsExpressionQueries;
}
