<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Action\OrderDataCollector;

use Magento\Sales\Api\Data\OrderInterface;
use SwiftOtter\OrderExport\Api\OrderDataCollectorInterface;
use SwiftOtter\OrderExport\Model\HeaderData;

class OrderHeaderData implements OrderDataCollectorInterface
{
    public function collect(OrderInterface $order, HeaderData $headerData): array
    {
        $output = [
            'order' => '00001'
        ];

        return $output;
    }
}
