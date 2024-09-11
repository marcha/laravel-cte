<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Marcha\LaravelCte\Query\Grammars\Traits\CompilesOracleExpressions;
use Yajra\Oci8\Query\Grammars\OracleGrammar as Base;

class OracleGrammar extends Base
{
    use CompilesOracleExpressions;
}
