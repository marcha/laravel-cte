<?php

namespace Marcha\LaravelCte\Connections;

use Illuminate\Database\MariaDbConnection as Base;

class MariaDbConnection extends Base
{
    use CreatesQueryBuilder;
}
