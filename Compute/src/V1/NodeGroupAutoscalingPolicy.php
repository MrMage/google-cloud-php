<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupAutoscalingPolicy</code>
 */
class NodeGroupAutoscalingPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum number of nodes that the group should have. Must be set if autoscaling is enabled. Maximum value allowed is 100.
     *
     * Generated from protobuf field <code>int32 max_nodes = 29327382;</code>
     */
    private $max_nodes = 0;
    /**
     * The minimum number of nodes that the group should have.
     *
     * Generated from protobuf field <code>int32 min_nodes = 264935044;</code>
     */
    private $min_nodes = 0;
    /**
     * The autoscaling mode. Set to one of: ON, OFF, or ONLY_SCALE_OUT. For more information, see  Autoscaler modes.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode mode = 3357091;</code>
     */
    private $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_nodes
     *           The maximum number of nodes that the group should have. Must be set if autoscaling is enabled. Maximum value allowed is 100.
     *     @type int $min_nodes
     *           The minimum number of nodes that the group should have.
     *     @type int $mode
     *           The autoscaling mode. Set to one of: ON, OFF, or ONLY_SCALE_OUT. For more information, see  Autoscaler modes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum number of nodes that the group should have. Must be set if autoscaling is enabled. Maximum value allowed is 100.
     *
     * Generated from protobuf field <code>int32 max_nodes = 29327382;</code>
     * @return int
     */
    public function getMaxNodes()
    {
        return $this->max_nodes;
    }

    /**
     * The maximum number of nodes that the group should have. Must be set if autoscaling is enabled. Maximum value allowed is 100.
     *
     * Generated from protobuf field <code>int32 max_nodes = 29327382;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_nodes = $var;

        return $this;
    }

    /**
     * The minimum number of nodes that the group should have.
     *
     * Generated from protobuf field <code>int32 min_nodes = 264935044;</code>
     * @return int
     */
    public function getMinNodes()
    {
        return $this->min_nodes;
    }

    /**
     * The minimum number of nodes that the group should have.
     *
     * Generated from protobuf field <code>int32 min_nodes = 264935044;</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_nodes = $var;

        return $this;
    }

    /**
     * The autoscaling mode. Set to one of: ON, OFF, or ONLY_SCALE_OUT. For more information, see  Autoscaler modes.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode mode = 3357091;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The autoscaling mode. Set to one of: ON, OFF, or ONLY_SCALE_OUT. For more information, see  Autoscaler modes.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode mode = 3357091;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy\Mode::class);
        $this->mode = $var;

        return $this;
    }

}

