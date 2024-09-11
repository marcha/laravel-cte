<?php

namespace Marcha\LaravelCte\Connections;

use Illuminate\Database\SQLiteConnection as Base;

class SQLiteConnection extends Base
{
    use CreatesQueryBuilder;
}
