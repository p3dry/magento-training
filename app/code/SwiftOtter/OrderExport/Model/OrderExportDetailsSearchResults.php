<?php
declare(strict_types=1);

namespace SwiftOtter\OrderExport\Model;

use Magento\Framework\Api\SearchResults;
use SwiftOtter\OrderExport\Api\Data\OrderExportDetailsSearchResultsInterface;

class OrderExportDetailsSearchResults extends SearchResults implements OrderExportDetailsSearchResultsInterface
{

}
