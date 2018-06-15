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
 * OrderDetails
 */
class OrderDetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Package
     *
     * @var int
     */
    protected $package = 0;

    /**
     * Pieces
     *
     * @var int
     */
    protected $pieces = 0;

    /**
     * Pieces Total
     *
     * @var int
     */
    protected $piecesTotal = 0;

    /**
     * Amount
     *
     * @var float
     */
    protected $amount = 0.0;

    /**
     * Price Per Item
     *
     * @var float
     */
    protected $pricePerItem = 0.0;

    /**
     * PriceTotal
     *
     * @var float
     */
    protected $priceTotal = 0.0;

    /**
     * Status
     *
     * @var int
     */
    protected $status = 0;

    /**
     * Tax Percent Per Item
     *
     * @var float
     */
    protected $taxPercentPerItem = 0.0;

    /**
     * Tax Per Item
     *
     * @var float
     */
    protected $taxPerItem = 0.0;

    /**
     * Item
     *
     * @var \CGB\Relax5order\Domain\Model\Item
     */
    protected $item = null;

    /**
     * Returns the package
     *
     * @return int $package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets the package
     *
     * @param int $package
     * @return void
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * Returns the pieces
     *
     * @return int $pieces
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets the pieces
     *
     * @param int $pieces
     * @return void
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }

    /**
     * Returns the piecesTotal
     *
     * @return int $piecesTotal
     */
    public function getPiecesTotal()
    {
        return $this->piecesTotal;
    }

    /**
     * Sets the piecesTotal
     *
     * @param int $piecesTotal
     * @return void
     */
    public function setPiecesTotal($piecesTotal)
    {
        $this->piecesTotal = $piecesTotal;
    }

    /**
     * Returns the amount
     *
     * @return float $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the amount
     *
     * @param float $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns the pricePerItem
     *
     * @return float $pricePerItem
     */
    public function getPricePerItem()
    {
        return $this->pricePerItem;
    }

    /**
     * Sets the pricePerItem
     *
     * @param float $pricePerItem
     * @return void
     */
    public function setPricePerItem($pricePerItem)
    {
        $this->pricePerItem = $pricePerItem;
    }

    /**
     * Returns the priceTotal
     *
     * @return float $priceTotal
     */
    public function getPriceTotal()
    {
        return $this->priceTotal;
    }

    /**
     * Sets the priceTotal
     *
     * @param float $priceTotal
     * @return void
     */
    public function setPriceTotal($priceTotal)
    {
        $this->priceTotal = $priceTotal;
    }

    /**
     * Returns the status
     *
     * @return int $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param int $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Returns the taxPercentPerItem
     *
     * @return float $taxPercentPerItem
     */
    public function getTaxPercentPerItem()
    {
        return $this->taxPercentPerItem;
    }

    /**
     * Sets the taxPercentPerItem
     *
     * @param float $taxPercentPerItem
     * @return void
     */
    public function setTaxPercentPerItem($taxPercentPerItem)
    {
        $this->taxPercentPerItem = $taxPercentPerItem;
    }

    /**
     * Returns the taxPerItem
     *
     * @return float $taxPerItem
     */
    public function getTaxPerItem()
    {
        return $this->taxPerItem;
    }

    /**
     * Sets the taxPerItem
     *
     * @param float $taxPerItem
     * @return void
     */
    public function setTaxPerItem($taxPerItem)
    {
        $this->taxPerItem = $taxPerItem;
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
