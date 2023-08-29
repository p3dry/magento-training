<?php

namespace SwiftOtter\OrderExport\Action\OrderDataCollector;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\Data\OrderItemInterface;
use SwiftOtter\OrderExport\Action\GetOrderExportItems;
use SwiftOtter\OrderExport\Api\OrderDataCollectorInterface;
use SwiftOtter\OrderExport\Model\HeaderData;

class OrderItemData implements OrderDataCollectorInterface
{
    /** @var GetOrderExportItems  */
    private GetOrderExportItems $getOrderExportItems;

    public function __construct(
        GetOrderExportItems $getOrderExportItems
    ) {
        $this->getOrderExportItems = $getOrderExportItems;
    }

    public function collect(OrderInterface $order, HeaderData $headerData): array
    {
        $items = [];
        $orderItems = $this->getOrderExportItems->execute($order);
        foreach ($orderItems as $orderItem) {
            $items[] = $this->transform($orderItem);
        }
        return [
            'items' => $items
        ];
    }

    /**
     * @return array{
     *     sku: string,
     *     qty: float|null,
     *     item_price: float|null,
     *     item_cost: float|null,
     *     total: float|null
     * }
     */
    private function transform(OrderItemInterface $orderItem): array
    {
        return [
            'sku' => $orderItem->getSku(),
            'qty' => $orderItem->getQtyOrdered(),
            'item_price' => $orderItem->getBasePrice(),
            'item_cost' => $orderItem->getBaseCost(),
            'total' => $orderItem->getBaseRowTotal(),
            'type' => $orderItem->getProductType(),
        ];
    }

}
