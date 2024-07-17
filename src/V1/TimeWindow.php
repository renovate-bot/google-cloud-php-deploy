<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time window within which actions are restricted.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.TimeWindow</code>
 */
class TimeWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_zone = '';
    /**
     * Required. Range within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Range ranges = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ranges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $time_zone
     *           Required. The time zone in IANA format [IANA Time Zone
     *           Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *     @type array<\Google\Cloud\Deploy\V1\Range>|\Google\Protobuf\Internal\RepeatedField $ranges
     *           Required. Range within which actions are restricted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Required. The time zone in IANA format [IANA Time Zone
     * Database](https://www.iana.org/time-zones) (e.g. America/New_York).
     *
     * Generated from protobuf field <code>string time_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Required. Range within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Range ranges = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * Required. Range within which actions are restricted.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Range ranges = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Deploy\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\Range::class);
        $this->ranges = $arr;

        return $this;
    }

}

