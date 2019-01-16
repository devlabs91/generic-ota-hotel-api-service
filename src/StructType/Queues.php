<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Queues StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for queue information.
 * @subpackage Structs
 */
class Queues extends AbstractStructBase
{
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Queue[]
     */
    public $Queue;
    /**
     * Constructor method for Queues
     * @uses Queues::setQueue()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queue[] $queue
     */
    public function __construct(array $queue = array())
    {
        $this
            ->setQueue($queue);
    }
    /**
     * Get Queue value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue[]|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queue[] $queue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queues
     */
    public function setQueue(array $queue = array())
    {
        foreach ($queue as $queuesQueueItem) {
            // validation for constraint: itemType
            if (!$queuesQueueItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Queue) {
                throw new \InvalidArgumentException(sprintf('The Queue property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Queue, "%s" given', is_object($queuesQueueItem) ? get_class($queuesQueueItem) : gettype($queuesQueueItem)), __LINE__);
            }
        }
        $this->Queue = $queue;
        return $this;
    }
    /**
     * Add item to Queue value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queue $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queues
     */
    public function addToQueue(\Devlabs91\GenericOtaHotelApiService\StructType\Queue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Queue) {
            throw new \InvalidArgumentException(sprintf('The Queue property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Queue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Queue[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queues
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
