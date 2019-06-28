<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/autoscaling_policies.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response to a request to list autoscaling policies in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.ListAutoscalingPoliciesResponse</code>
 */
final class ListAutoscalingPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Autoscaling policies list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.AutoscalingPolicy policies = 1;</code>
     */
    private $policies;
    /**
     * Output only. This token is included in the response if there are more
     * results to fetch.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1beta2\AutoscalingPolicy[]|\Google\Protobuf\Internal\RepeatedField $policies
     *           Output only. Autoscaling policies list.
     *     @type string $next_page_token
     *           Output only. This token is included in the response if there are more
     *           results to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\AutoscalingPolicies::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Autoscaling policies list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.AutoscalingPolicy policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Output only. Autoscaling policies list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.AutoscalingPolicy policies = 1;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\AutoscalingPolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1beta2\AutoscalingPolicy::class);
        $this->policies = $arr;

        return $this;
    }

    /**
     * Output only. This token is included in the response if there are more
     * results to fetch.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Output only. This token is included in the response if there are more
     * results to fetch.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

