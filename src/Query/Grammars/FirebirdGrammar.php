<?php

namespace Marcha\LaravelCte\Query\Grammars;

use Marcha\Firebird\Query\Grammars\Firebird25Grammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesFirebirdExpressions;

class FirebirdGrammar extends Base implements ExpressionGrammar
{
    use CompilesFirebirdExpressions;
}
