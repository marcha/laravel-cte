<?php

namespace Marcha\LaravelCte\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Marcha\LaravelCte\Eloquent\QueriesExpressions;

class User extends Model
{
    use QueriesExpressions;

    public $incrementing = false;
}
