<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Console\Command;

use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface;
use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterfaceFactory;
use SwiftOtter\OrderExport\Api\OrderExportDetailsRepositoryInterface;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails\Collection as OrderExportCollection;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails\CollectionFactory as OrderExportCollectionFactory;

class OrderExportTest extends Command
{

    private OrderExportDetailsInterfaceFactory $orderExportDetailsFactory;
    private OrderExportDetails $orderExportDetails;
    private OrderExportCollectionFactory $orderExportDetailCollectionFactory;
    private OrderExportDetailsRepositoryInterface $orderExportDetailsRepository;

    public function __construct(
        OrderExportDetailsInterfaceFactory    $orderExportDetailsFactory,
        OrderExportDetails                    $orderExportDetails,
        OrderExportCollectionFactory          $orderExportDetailCollectionFactory,
        OrderExportDetailsRepositoryInterface $orderExportDetailsRepository,
        string                                $name = null
    )
    {
        parent::__construct($name);
        $this->orderExportDetailsFactory = $orderExportDetailsFactory;
        $this->orderExportDetails = $orderExportDetails;
        $this->orderExportDetailCollectionFactory = $orderExportDetailCollectionFactory;
        $this->orderExportDetailsRepository = $orderExportDetailsRepository;
    }

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName('order-export:test')
            ->setDescription('Test order features');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $exportDetails = $this->orderExportDetailsFactory->create();
        $this->orderExportDetails->load($exportDetails, 1);
        $output->writeln(__('Single Order Export Details'));
        $output->writeln(print_r($exportDetails->getData(), true));

        $output->writeln(__('-------------------------------------'));
        $output->writeln(__('Colllection Order Export Details'));
        $exportDetailCollection = $this->orderExportDetailCollectionFactory->create();
        foreach ($exportDetailCollection as $exportDetail) {
            $output->writeln(print_r($exportDetail->getData(), true));
        }
        $output->writeln(__('-------------------------------------'));
        $output->writeln(__('Order Export Details using repository'));
        $exportDetails = $this->orderExportDetailsRepository->getById(2);
        $output->writeln(print_r($exportDetails->getData(), true));
        return 0;
    }
}
