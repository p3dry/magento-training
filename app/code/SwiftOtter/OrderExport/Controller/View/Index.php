<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Controller\View;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface, HttpGetActionInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        die('Hello world');
    }
}
