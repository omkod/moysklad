<?php
namespace MoySklad\Util\Serializer;

use JMS\Serializer\Serializer;

class MixedDeserializeHandler
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param $visitor
     * @param mixed $value
     * @param array $type
     * @return array|mixed
     */
    public function __invoke($visitor, $value, array $type)
    {
        $this->serializer = SerializerInstance::getInstance();

        return $this->serializer->deserialize(json_encode($value), gettype($value), 'json');
    }
}
