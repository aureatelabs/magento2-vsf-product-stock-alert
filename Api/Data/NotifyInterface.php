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
namespace Aureatelabs\StockAlert\Api\Data;

/**
 * Interface NotifyInterface
 * @api
 * @package Aureatelabs\StockAlert\Api\Data
 */
interface NotifyInterface
{
    /**#@+
     * Constants defined for keys of  data array
     */
    const CUSTOMER_ID   = 'customer_id';
    const PRODUCT_ID    = 'product_id';
    const STORE_CODE    = 'store_code';
    /**#@-*/

    /**
     * Get Customer ID
     *
     * @return int|null
     */
    public function getCustomerId();

    /**
     * Get Product ID
     *
     * @return int|null
     */
    public function getProductId();

    /**
     * Get Store Code
     *
     * @return string|null
     */
    public function getStoreCode();

    /**
     * Set Customer ID
     *
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId);

    /**
     * Set Customer ID
     *
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId);

    /**
     * Set store code
     *
     * @param string $storeCode
     * @return $this
     */
    public function setStoreCode($storeCode);
}
