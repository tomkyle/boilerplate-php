<?php
namespace tests;

use Psr;
use Laminas;

trait LoggerTrait
{
    use Psr\Log\LoggerAwareTrait;

    /**
     * PSR Loglevel
     * @var int
     */
    public $loglevel = Laminas\Log\Logger::ALERT;


    /**
     * Output stream name
     * @var string
     */
    public $log_stream = 'php://output';


    /**
     * @return \Psr\Log\LoggerInterface
     */
    protected function getLogger() : Psr\Log\LoggerInterface
    {
        if ($this->logger) {
            return $this->logger;
        }

        $this->setLogger($this->createLaminasLogger());
        return $this->logger;
    }

    /**
     * @return \Laminas\Log\PsrLoggerAdapter
     */
    protected function createLaminasLogger() : Laminas\Log\PsrLoggerAdapter
    {
        $loglevel = ($GLOBALS['LAMINAS_LOGLEVEL'] ?? $this->loglevel) ?: $this->loglevel;
        $filter = new Laminas\Log\Filter\Priority( $loglevel );

        $writer = new Laminas\Log\Writer\Stream($this->log_stream);
        $writer->addFilter($filter);

        $laminasLogLogger = new Laminas\Log\Logger;
        $laminasLogLogger->addWriter($writer);

        return new Laminas\Log\PsrLoggerAdapter($laminasLogLogger);
    }
}
