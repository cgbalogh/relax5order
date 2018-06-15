<?php
namespace CGB\Relax5order\Domain\Model;

/***
 *
 * This file is part of the "relax5order" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * Package
 */
class Package extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Size
     *
     * @var int
     */
    protected $size = 0;

    /**
     * Activity
     *
     * @var \CGB\Relax5order\Domain\Model\Activity
     */
    protected $activity = null;

    /**
     * item
     *
     * @var \CGB\Relax5order\Domain\Model\Item
     */
    protected $item = null;

    /**
     * Returns the size
     *
     * @return int $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the size
     *
     * @param int $size
     * @return void
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Returns the activity
     *
     * @return \CGB\Relax5order\Domain\Model\Activity $activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets the activity
     *
     * @param \CGB\Relax5order\Domain\Model\Activity $activity
     * @return void
     */
    public function setActivity(\CGB\Relax5order\Domain\Model\Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Returns the item
     *
     * @return \CGB\Relax5order\Domain\Model\Item $item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets the item
     *
     * @param \CGB\Relax5order\Domain\Model\Item $item
     * @return void
     */
    public function setItem(\CGB\Relax5order\Domain\Model\Item $item)
    {
        $this->item = $item;
    }
}
