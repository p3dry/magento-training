<?php

namespace SwiftOtter\OrderExport\Action\OrderDataCollector;

use Magento\Sales\Api\Data\OrderInterface;
use SwiftOtter\OrderExport\Api\OrderDataCollectorInterface;
use SwiftOtter\OrderExport\Model\HeaderData;

class OrderItemData implements OrderDataCollectorInterface
{
    public function collect(OrderInterface $order, HeaderData $headerData): array
    {
        return [
            'items' => [
                [
                    'sku' => 'AB-1',
                    'qty' => 1,
                    'item_price' => 5,
                    'item_cost' => 3,
                    'total' => 5
                ],
                [
                    'sku' => 'AB-2',
                    'qty' => 2,
                    'item_price' => 10,
                    'item_cost' => 5,
                    'total' => 20
                ]
            ]
        ];
    }
}
