<?php
namespace CGB\Relax5order\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderHeaderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5order\Domain\Model\OrderHeader
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5order\Domain\Model\OrderHeader();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForStringSetsId()
    {
        $this->subject->setId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTotalReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTotal()
        );
    }

    /**
     * @test
     */
    public function setTotalForFloatSetsTotal()
    {
        $this->subject->setTotal(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'total',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getTaxPercentReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTaxPercent()
        );
    }

    /**
     * @test
     */
    public function setTaxPercentForFloatSetsTaxPercent()
    {
        $this->subject->setTaxPercent(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'taxPercent',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getTaxReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTax()
        );
    }

    /**
     * @test
     */
    public function setTaxForFloatSetsTax()
    {
        $this->subject->setTax(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'tax',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getTotalWithTaxReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTotalWithTax()
        );
    }

    /**
     * @test
     */
    public function setTotalWithTaxForFloatSetsTotalWithTax()
    {
        $this->subject->setTotalWithTax(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'totalWithTax',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getActivityReturnsInitialValueForActivity()
    {
        self::assertEquals(
            null,
            $this->subject->getActivity()
        );
    }

    /**
     * @test
     */
    public function setActivityForActivitySetsActivity()
    {
        $activityFixture = new \CGB\Relax5order\Domain\Model\Activity();
        $this->subject->setActivity($activityFixture);

        self::assertAttributeEquals(
            $activityFixture,
            'activity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderDetailsReturnsInitialValueForOrderDetails()
    {
        self::assertEquals(
            null,
            $this->subject->getOrderDetails()
        );
    }

    /**
     * @test
     */
    public function setOrderDetailsForOrderDetailsSetsOrderDetails()
    {
        $orderDetailsFixture = new \CGB\Relax5order\Domain\Model\OrderDetails();
        $this->subject->setOrderDetails($orderDetailsFixture);

        self::assertAttributeEquals(
            $orderDetailsFixture,
            'orderDetails',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOwnerReturnsInitialValueForOwner()
    {
    }

    /**
     * @test
     */
    public function setOwnerForOwnerSetsOwner()
    {
    }

    /**
     * @test
     */
    public function getPersonReturnsInitialValueForPerson()
    {
    }

    /**
     * @test
     */
    public function setPersonForPersonSetsPerson()
    {
    }

    /**
     * @test
     */
    public function getCompanyReturnsInitialValueForCompany()
    {
    }

    /**
     * @test
     */
    public function setCompanyForCompanySetsCompany()
    {
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForAddress()
    {
    }

    /**
     * @test
     */
    public function setAddressForAddressSetsAddress()
    {
    }
}
