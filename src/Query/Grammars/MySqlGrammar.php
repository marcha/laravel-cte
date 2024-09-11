<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Illuminate\Database\Query\Grammars\MySqlGrammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesMySqlExpressions;

class MySqlGrammar extends Base
{
    use CompilesMySqlExpressions;
}
