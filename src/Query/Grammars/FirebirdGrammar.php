<?php

namespace Marcha\LaravelCte\Query\Grammars;

use HarryGulliford\Firebird\Query\Grammars\FirebirdGrammar as Base;
use Marcha\LaravelCte\Query\Grammars\Traits\CompilesFirebirdExpressions;

class FirebirdGrammar extends Base
{
    use CompilesFirebirdExpressions;
}
