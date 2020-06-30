<?php
/**
 * Aureate Labs Pvt Ltd.
 *
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please contact us https://aureatelabs.com/contact-us.
 *
 * @category   Aureatelabs
 * @package    Aureatelabs_StockAlert
 * @author     Aureate Labs Team
 * @copyright  Copyright (c) 2019 Aureate Labs. ( https://aureatelabs.com )
 */
namespace Aureatelabs\StockAlert\Model\Api;

/**
 * Class Notify
 * @package Aureatelabs\Catalog\Model\Api
 */
class Notify implements \Aureatelabs\StockAlert\Api\Data\NotifyInterface
{
    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var string
     */
    private $storeCode;

    /**
     * Get Customer ID
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Get Product ID
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Get Store Code
     *
     * @return string|null
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * Set Customer ID
     *
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = (int) $customerId;
        return $this;
    }

    /**
     * Set Customer ID
     *
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = (int) $productId;
        return $this;
    }

    /**
     * Set store code
     *
     * @param string $storeCode
     * @return $this
     */
    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;
        return $this;
    }
}
