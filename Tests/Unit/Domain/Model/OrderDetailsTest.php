<?php
namespace CGB\Relax5order\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderDetailsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5order\Domain\Model\OrderDetails
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5order\Domain\Model\OrderDetails();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPackageReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPackage()
        );
    }

    /**
     * @test
     */
    public function setPackageForIntSetsPackage()
    {
        $this->subject->setPackage(12);

        self::assertAttributeEquals(
            12,
            'package',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPiecesReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPieces()
        );
    }

    /**
     * @test
     */
    public function setPiecesForIntSetsPieces()
    {
        $this->subject->setPieces(12);

        self::assertAttributeEquals(
            12,
            'pieces',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPiecesTotalReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPiecesTotal()
        );
    }

    /**
     * @test
     */
    public function setPiecesTotalForIntSetsPiecesTotal()
    {
        $this->subject->setPiecesTotal(12);

        self::assertAttributeEquals(
            12,
            'piecesTotal',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAmountReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getAmount()
        );
    }

    /**
     * @test
     */
    public function setAmountForFloatSetsAmount()
    {
        $this->subject->setAmount(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'amount',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getPricePerItemReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPricePerItem()
        );
    }

    /**
     * @test
     */
    public function setPricePerItemForFloatSetsPricePerItem()
    {
        $this->subject->setPricePerItem(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'pricePerItem',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getPriceTotalReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPriceTotal()
        );
    }

    /**
     * @test
     */
    public function setPriceTotalForFloatSetsPriceTotal()
    {
        $this->subject->setPriceTotal(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'priceTotal',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForIntSetsStatus()
    {
        $this->subject->setStatus(12);

        self::assertAttributeEquals(
            12,
            'status',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTaxPercentPerItemReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTaxPercentPerItem()
        );
    }

    /**
     * @test
     */
    public function setTaxPercentPerItemForFloatSetsTaxPercentPerItem()
    {
        $this->subject->setTaxPercentPerItem(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'taxPercentPerItem',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getTaxPerItemReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTaxPerItem()
        );
    }

    /**
     * @test
     */
    public function setTaxPerItemForFloatSetsTaxPerItem()
    {
        $this->subject->setTaxPerItem(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'taxPerItem',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getItemReturnsInitialValueForItem()
    {
        self::assertEquals(
            null,
            $this->subject->getItem()
        );
    }

    /**
     * @test
     */
    public function setItemForItemSetsItem()
    {
        $itemFixture = new \CGB\Relax5order\Domain\Model\Item();
        $this->subject->setItem($itemFixture);

        self::assertAttributeEquals(
            $itemFixture,
            'item',
            $this->subject
        );
    }
}
