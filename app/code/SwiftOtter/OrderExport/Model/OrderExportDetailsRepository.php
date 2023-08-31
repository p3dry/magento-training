<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use SwiftOtter\OrderExport\Api\OrderExportDetailsRepositoryInterface;
use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails as OrderExportDetailsResource;
use SwiftOtter\OrderExport\Model\OrderExportDetails;
use SwiftOtter\OrderExport\Model\OrderExportDetailsFactory;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails\Collection as OrderExportDetailsCollection;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails\CollectionFactory as OrderExportDetailsCollectionFactory;

class OrderExportDetailsRepository implements OrderExportDetailsRepositoryInterface
{
    /** @var OrderExportDetails */
    private $exportDetailsResource;
    /** @var OrderExportDetailsFactory */
    private $exportDetailsFactory;
    /** @var OrderExportDetailsCollectionFactory */
    private $exportDetailsCollectionFactory;
    /** @var CollectionProcessorInterface */
    private $collectionProcessor;

    /**
     * @param OrderExportDetailsResource $exportDetailsResource
     * @param \SwiftOtter\OrderExport\Model\OrderExportDetailsFactory $exportDetailsFactory
     * @param OrderExportDetailsCollectionFactory $exportDetailsCollectionFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        OrderExportDetailsResource $exportDetailsResource,
        OrderExportDetailsFactory $exportDetailsFactory,
        OrderExportDetailsCollectionFactory $exportDetailsCollectionFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->exportDetailsResource = $exportDetailsResource;
        $this->exportDetailsFactory = $exportDetailsFactory;
        $this->exportDetailsCollectionFactory = $exportDetailsCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * {@inheritdoc}
     */
    public function save(OrderExportDetailsInterface $exportDetails) : OrderExportDetailsInterface
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getById(int $detailsId): OrderExportDetailsInterface
    {

    }

    /**
     * {@inheritdoc}
     */
    public function delete(OrderExportDetailsInterface $exportDetails): bool
    {

    }

    /**
     * {@inheritdoc}
     */
    public function deleteById(int $detailsId): bool
    {

    }
}
