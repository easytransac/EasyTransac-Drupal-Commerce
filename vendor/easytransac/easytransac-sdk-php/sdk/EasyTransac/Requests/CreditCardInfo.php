<?php

namespace EasyTransac\Requests;

use EasyTransac\Entities\Entity;

/**
 * API function /payment/cardinfos, get info from a credit card
 * URL: https://www.easytransac.com/fr/documentation#tag/API-Payment/paths/~1api~1payment~1cardinfos/post
 * @copyright EasyTransac
 */
class CreditCardInfo extends Request
{
    /** @object:CreditCardInfo **/
    protected $response;

    /**
     * Calls the API function
     * @param Entity $entity
     * @return \EasyTransac\Responses\StandardResponse
     */
    public function execute(Entity $entity)
    {
        return $this->call('/payment/cardinfos', $entity);
    }
}
