<?php

namespace Marcha\LaravelCte\Query;

use HarryGulliford\Firebird\Query\Builder as Base;
use Marcha\LaravelCte\Query\Traits\BuildsExpressionQueries;

class FirebirdBuilder extends Base
{
    use BuildsExpressionQueries;
}
