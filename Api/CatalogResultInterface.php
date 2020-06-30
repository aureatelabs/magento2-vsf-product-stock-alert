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
namespace Aureatelabs\StockAlert\Api;

/**
 * Catalog result interface.
 * @api
 */
interface CatalogResultInterface
{
    /**
     * Get response code.
     *
     * @return int/null
     */
    public function getCode();

    /**
     * Set response code.
     *
     * @param int $code
     * @return int
     */
    public function setCode($code);

    /**
     * Get response message.
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Set response message.
     *
     * @param string $message
     * @return string
     */
    public function setMessage($message);

    /**
     * Get result data.
     *
     * @return mixed|null
     */
    public function getResult();

    /**
     * Set result data.
     *
     * @param mixed $result
     * @return mixed
     */
    public function setResult($result);
}
