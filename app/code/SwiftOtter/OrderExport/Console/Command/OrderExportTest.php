<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Console\Command;

use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterface;
use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsInterfaceFactory;
use SwiftOtter\OrderExport\Model\ResourceModel\OrderExportDetails;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrderExportTest extends Command
{

    private OrderExportDetailsInterfaceFactory $orderExportDetailsFactory;
    private OrderExportDetails $orderExportDetails;

    public function __construct(
        OrderExportDetailsInterfaceFactory $orderExportDetailsFactory,
        OrderExportDetails                 $orderExportDetails,
        string                             $name = null
    )
    {
        parent::__construct($name);
        $this->orderExportDetailsFactory = $orderExportDetailsFactory;
        $this->orderExportDetails = $orderExportDetails;
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

        $output->writeln(print_r($exportDetails->getData(), true));
        return 0;
    }
}
