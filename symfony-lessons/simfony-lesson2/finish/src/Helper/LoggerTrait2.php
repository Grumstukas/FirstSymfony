<?php
namespace App\Helper;

use Psr\Log\LoggerInterface;

trait LoggerTrait2
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    private function logInfo(string $message, array $context = [])
    {
        if ($this->logger) {
            $this->logger->info($message, $context);
        }
    }
}
