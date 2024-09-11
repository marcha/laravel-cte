<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Illuminate\Database\Query\Grammars\SQLiteGrammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesSQLiteExpressions;

class SQLiteGrammar extends Base
{
    use CompilesSQLiteExpressions;
}
