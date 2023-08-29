<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrderExport extends Command
{
    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName('order-export:run')
            ->setDescription('Export order to ERP');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return 0;
    }
}
