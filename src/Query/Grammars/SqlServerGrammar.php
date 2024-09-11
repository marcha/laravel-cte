<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Illuminate\Database\Query\Grammars\SqlServerGrammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesSqlServerExpressions;

class SqlServerGrammar extends Base
{
    use CompilesSqlServerExpressions;
}
