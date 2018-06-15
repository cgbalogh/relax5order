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
 * Order Header
 */
class OrderHeader extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Id
     *
     * @var string
     * @validate NotEmpty
     */
    protected $id = '';

    /**
     * Total
     *
     * @var float
     */
    protected $total = 0.0;

    /**
     * Tax Percent
     *
     * @var float
     */
    protected $taxPercent = 0.0;

    /**
     * Tax
     *
     * @var float
     */
    protected $tax = 0.0;

    /**
     * Total With Tax
     *
     * @var float
     */
    protected $totalWithTax = 0.0;

    /**
     * Activity
     *
     * @var \CGB\Relax5order\Domain\Model\Activity
     */
    protected $activity = null;

    /**
     * Order Details
     *
     * @var \CGB\Relax5order\Domain\Model\OrderDetails
     */
    protected $orderDetails = null;

    /**
     * Owner
     *
     * @var \CGB\Relax5core\Domain\Model\Owner
     * @lazy
     */
    protected $owner = null;

    /**
     * Person
     *
     * @var \CGB\Relax5core\Domain\Model\Person
     * @lazy
     */
    protected $person = null;

    /**
     * Company
     *
     * @var \CGB\Relax5core\Domain\Model\Company
     * @lazy
     */
    protected $company = null;

    /**
     * Address
     *
     * @var \CGB\Relax5core\Domain\Model\Address
     */
    protected $address = null;

    /**
     * Returns the id
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param string $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the total
     *
     * @return float $total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets the total
     *
     * @param float $total
     * @return void
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * Returns the taxPercent
     *
     * @return float $taxPercent
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    /**
     * Sets the taxPercent
     *
     * @param float $taxPercent
     * @return void
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;
    }

    /**
     * Returns the tax
     *
     * @return float $tax
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets the tax
     *
     * @param float $tax
     * @return void
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * Returns the totalWithTax
     *
     * @return float $totalWithTax
     */
    public function getTotalWithTax()
    {
        return $this->totalWithTax;
    }

    /**
     * Sets the totalWithTax
     *
     * @param float $totalWithTax
     * @return void
     */
    public function setTotalWithTax($totalWithTax)
    {
        $this->totalWithTax = $totalWithTax;
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
     * Returns the orderDetails
     *
     * @return \CGB\Relax5order\Domain\Model\OrderDetails $orderDetails
     */
    public function getOrderDetails()
    {
        return $this->orderDetails;
    }

    /**
     * Sets the orderDetails
     *
     * @param \CGB\Relax5order\Domain\Model\OrderDetails $orderDetails
     * @return void
     */
    public function setOrderDetails(\CGB\Relax5order\Domain\Model\OrderDetails $orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    /**
     * Returns the owner
     *
     * @return \CGB\Relax5core\Domain\Model\Owner $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the owner
     *
     * @param \CGB\Relax5core\Domain\Model\Owner $owner
     * @return void
     */
    public function setOwner(\CGB\Relax5core\Domain\Model\Owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Returns the person
     *
     * @return \CGB\Relax5core\Domain\Model\Person $person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets the person
     *
     * @param \CGB\Relax5core\Domain\Model\Person $person
     * @return void
     */
    public function setPerson(\CGB\Relax5core\Domain\Model\Person $person)
    {
        $this->person = $person;
    }

    /**
     * Returns the company
     *
     * @return \CGB\Relax5core\Domain\Model\Company $company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets the company
     *
     * @param \CGB\Relax5core\Domain\Model\Company $company
     * @return void
     */
    public function setCompany(\CGB\Relax5core\Domain\Model\Company $company)
    {
        $this->company = $company;
    }

    /**
     * Returns the address
     *
     * @return \CGB\Relax5core\Domain\Model\Address $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param \CGB\Relax5core\Domain\Model\Address $address
     * @return void
     */
    public function setAddress(\CGB\Relax5core\Domain\Model\Address $address)
    {
        $this->address = $address;
    }
}
