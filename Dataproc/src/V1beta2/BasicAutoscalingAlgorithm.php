<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/autoscaling_policies.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Basic algorithm for autoscaling.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.BasicAutoscalingAlgorithm</code>
 */
final class BasicAutoscalingAlgorithm extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. YARN autoscaling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.BasicYarnAutoscalingConfig yarn_config = 1;</code>
     */
    private $yarn_config = null;
    /**
     * Optional. Duration between scaling events. A scaling period starts after
     * the update operation from the previous event has completed.
     * Bounds: [2m, 1d]. Default: 2m.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cooldown_period = 2;</code>
     */
    private $cooldown_period = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1beta2\BasicYarnAutoscalingConfig $yarn_config
     *           Required. YARN autoscaling configuration.
     *     @type \Google\Protobuf\Duration $cooldown_period
     *           Optional. Duration between scaling events. A scaling period starts after
     *           the update operation from the previous event has completed.
     *           Bounds: [2m, 1d]. Default: 2m.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\AutoscalingPolicies::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. YARN autoscaling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.BasicYarnAutoscalingConfig yarn_config = 1;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\BasicYarnAutoscalingConfig
     */
    public function getYarnConfig()
    {
        return $this->yarn_config;
    }

    /**
     * Required. YARN autoscaling configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.BasicYarnAutoscalingConfig yarn_config = 1;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\BasicYarnAutoscalingConfig $var
     * @return $this
     */
    public function setYarnConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\BasicYarnAutoscalingConfig::class);
        $this->yarn_config = $var;

        return $this;
    }

    /**
     * Optional. Duration between scaling events. A scaling period starts after
     * the update operation from the previous event has completed.
     * Bounds: [2m, 1d]. Default: 2m.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cooldown_period = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getCooldownPeriod()
    {
        return $this->cooldown_period;
    }

    /**
     * Optional. Duration between scaling events. A scaling period starts after
     * the update operation from the previous event has completed.
     * Bounds: [2m, 1d]. Default: 2m.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cooldown_period = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCooldownPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->cooldown_period = $var;

        return $this;
    }

}

