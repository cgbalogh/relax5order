<?php
namespace CGB\Relax5order\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class PackageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5order\Domain\Model\Package
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5order\Domain\Model\Package();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSizeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSize()
        );
    }

    /**
     * @test
     */
    public function setSizeForIntSetsSize()
    {
        $this->subject->setSize(12);

        self::assertAttributeEquals(
            12,
            'size',
            $this->subject
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
