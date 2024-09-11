<?php

namespace Marcha\LaravelCte\Connections;

use Illuminate\Database\SqlServerConnection as Base;

class SqlServerConnection extends Base
{
    use CreatesQueryBuilder;
}
