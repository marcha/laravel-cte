<?php

namespace Marcha\LaravelCte\Query;

use Marcha\Firebird\Query\Builder as Base;
use Marcha\LaravelCte\Query\Traits\BuildsExpressionQueries;

class FirebirdBuilder extends Base
{
    use BuildsExpressionQueries;
}
