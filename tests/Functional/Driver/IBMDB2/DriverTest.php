<?php

namespace Doctrine\DBAL\Tests\Functional\Driver\IBMDB2;

use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\IBMDB2\Driver;
use Doctrine\DBAL\Tests\Functional\Driver\AbstractDriverTest;

use function extension_loaded;

class DriverTest extends AbstractDriverTest
{
    protected function setUp(): void
    {
        if (! extension_loaded('ibm_db2')) {
            self::markTestSkipped('ibm_db2 is not installed.');
        }

        parent::setUp();

        if ($this->connection->getDriver() instanceof Driver) {
            return;
        }

        self::markTestSkipped('ibm_db2 only test.');
    }

    public function testConnectsWithoutDatabaseNameParameter(): void
    {
        self::markTestSkipped('IBM DB2 does not support connecting without database name.');
    }

    public function testReturnsDatabaseNameWithoutDatabaseNameParameter(): void
    {
        self::markTestSkipped('IBM DB2 does not support connecting without database name.');
    }

    protected function createDriver(): DriverInterface
    {
        return new Driver();
    }
}
