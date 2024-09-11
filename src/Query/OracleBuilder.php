<?php

namespace Marcha\LaravelCte\Query;

use Marcha\LaravelCte\Query\Traits\BuildsExpressionQueries;
use Yajra\Oci8\Query\OracleBuilder as Base;

class OracleBuilder extends Base
{
    use BuildsExpressionQueries;
}
