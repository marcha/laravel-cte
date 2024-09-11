<?php

namespace Marcha\LaravelCte\Connectors;

use Illuminate\Database\Connection;
use Illuminate\Database\Connectors\ConnectionFactory as Base;
use InvalidArgumentException;
use Marcha\LaravelCte\Connections\FirebirdConnection;
use Marcha\LaravelCte\Connections\MariaDbConnection;
use Marcha\LaravelCte\Connections\MySqlConnection;
use Marcha\LaravelCte\Connections\PostgresConnection;
use Marcha\LaravelCte\Connections\SQLiteConnection;
use Marcha\LaravelCte\Connections\SingleStoreConnection;
use Marcha\LaravelCte\Connections\SqlServerConnection;

class ConnectionFactory extends Base
{
    /**
     * Create a new connection instance.
     *
     * @param string $driver
     * @param \PDO|\Closure $connection
     * @param string $database
     * @param string $prefix
     * @param array $config
     * @return \Illuminate\Database\Connection
     *
     * @throws \InvalidArgumentException
     */
    protected function createConnection($driver, $connection, $database, $prefix = '', array $config = [])
    {
        $resolver = Connection::getResolver($driver);

        if (!in_array($driver, ['singlestore']) && $resolver) {
            return $resolver($connection, $database, $prefix, $config); // @codeCoverageIgnore
        }

        return match ($driver) {
            'mysql' => new MySqlConnection($connection, $database, $prefix, $config),
            'mariadb' => new MariaDbConnection($connection, $database, $prefix, $config),
            'pgsql' => new PostgresConnection($connection, $database, $prefix, $config),
            'sqlite' => new SQLiteConnection($connection, $database, $prefix, $config),
            'sqlsrv' => new SqlServerConnection($connection, $database, $prefix, $config),
            'singlestore' => new SingleStoreConnection($connection, $database, $prefix, $config),
            'firebird' => new FirebirdConnection($connection, $database, $prefix, $config),
            default => throw new InvalidArgumentException("Unsupported driver [{$driver}]"),
        };
    }
}
