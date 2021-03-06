<?php

namespace Doctrine\Tests\DBAL\Driver\IBMDB2;

use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;
use Doctrine\Tests\DbalTestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * @requires extension ibm_db2
 */
class DB2ConnectionTest extends DbalTestCase
{
    /**
     * The ibm_db2 driver connection mock under test.
     *
     * @var DB2Connection&MockObject
     */
    private $connectionMock;

    protected function setUp(): void
    {
        parent::setUp();

        $this->connectionMock = $this->getMockBuilder(DB2Connection::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    public function testDoesNotRequireQueryForServerVersion(): void
    {
        self::assertFalse($this->connectionMock->requiresQueryForServerVersion());
    }
}
