<?php
namespace CGB\Relax5order\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ActivityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5order\Domain\Model\Activity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5order\Domain\Model\Activity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
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
    public function getItemsReturnsInitialValueForItem()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getItems()
        );
    }

    /**
     * @test
     */
    public function setItemsForObjectStorageContainingItemSetsItems()
    {
        $item = new \CGB\Relax5order\Domain\Model\Item();
        $objectStorageHoldingExactlyOneItems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneItems->attach($item);
        $this->subject->setItems($objectStorageHoldingExactlyOneItems);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneItems,
            'items',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addItemToObjectStorageHoldingItems()
    {
        $item = new \CGB\Relax5order\Domain\Model\Item();
        $itemsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $itemsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($item));
        $this->inject($this->subject, 'items', $itemsObjectStorageMock);

        $this->subject->addItem($item);
    }

    /**
     * @test
     */
    public function removeItemFromObjectStorageHoldingItems()
    {
        $item = new \CGB\Relax5order\Domain\Model\Item();
        $itemsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $itemsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($item));
        $this->inject($this->subject, 'items', $itemsObjectStorageMock);

        $this->subject->removeItem($item);
    }
}
