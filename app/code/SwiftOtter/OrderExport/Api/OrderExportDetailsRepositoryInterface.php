<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface;
use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsSearchResultsInterface;

interface OrderExportDetailsRepositoryInterface
{
    /**
     * @param \SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface $exportDetails
     * @return \SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface
     */
    public function save(OrderExportDetailsInterface $exportDetails): OrderExportDetailsInterface;

    /**
     * @param int $detailsId
     * @return \SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface
     */
    public function getById(int $detailsId): OrderExportDetailsInterface;

    /**
     * @param \SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface $exportDetails
     * @return bool
     */
    public function delete(OrderExportDetailsInterface $exportDetails): bool;

    /**
     * @param int $detailsId
     * @return bool
     */
    public function deleteById(int $detailsId): bool;
}
