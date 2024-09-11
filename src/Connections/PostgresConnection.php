<?php

namespace Marcha\LaravelCte\Connections;

use Illuminate\Database\PostgresConnection as Base;

class PostgresConnection extends Base
{
    use CreatesQueryBuilder;
}
