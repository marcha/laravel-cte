<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Illuminate\Database\Query\Grammars\PostgresGrammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesPostgresExpressions;

class PostgresGrammar extends Base
{
    use CompilesPostgresExpressions;
}
