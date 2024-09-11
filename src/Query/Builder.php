<?php

namespace Marcha\LaravelCte\Query;

use Illuminate\Database\Query\Builder as Base;
use Marcha\LaravelCte\Query\Traits\BuildsExpressionQueries;

class Builder extends Base
{
    use BuildsExpressionQueries;
}
