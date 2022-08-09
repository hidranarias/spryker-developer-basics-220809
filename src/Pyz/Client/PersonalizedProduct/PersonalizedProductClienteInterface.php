<?php

namespace Pyz\Client\PersonalizedProduct;

interface PersonalizedProductClienteInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function getPersonalizedProducts(int $limit);
}
