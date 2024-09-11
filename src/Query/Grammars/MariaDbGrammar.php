<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Illuminate\Database\Query\Grammars\MariaDbGrammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesMySqlExpressions;

class MariaDbGrammar extends Base
{
    use CompilesMySqlExpressions;
}
