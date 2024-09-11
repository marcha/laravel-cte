<?php

namespace Marcha\LaravelCte\Query\Grammars;

use SingleStore\Laravel\Query\Grammar;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesMySqlExpressions;

class SingleStoreGrammar extends Grammar
{
    use CompilesMySqlExpressions;
}
