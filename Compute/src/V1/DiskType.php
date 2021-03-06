<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Disk Type resource.
 * Google Compute Engine has two Disk Type resources:
 * * [Regional](/compute/docs/reference/rest/{$api_version}/regionDiskTypes) * [Zonal](https://cloud.google.com/compute/docs/reference/rest/{$api_version}/diskTypes)
 * You can choose from a variety of disk types based on your needs. For more information, read Storage options.
 * The diskTypes resource represents disk types for a zonal persistent disk. For more information, read Zonal persistent disks.
 * The regionDiskTypes resource represents disk types for a regional persistent disk. For more information, read Regional persistent disks. (== resource_for {$api_version}.diskTypes ==) (== resource_for {$api_version}.regionDiskTypes ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DiskType</code>
 */
class DiskType extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = '';
    /**
     * [Output Only] Server-defined default disk size in GB.
     *
     * Generated from protobuf field <code>string default_disk_size_gb = 2183797;</code>
     */
    private $default_disk_size_gb = '';
    /**
     * [Output Only] The deprecation status associated with this disk type.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 246703539;</code>
     */
    private $deprecated = null;
    /**
     * [Output Only] An optional description of this resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     */
    private $description = '';
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = '';
    /**
     * [Output Only] Type of the resource. Always compute#diskType for disk types.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * [Output Only] URL of the region where the disk type resides. Only applicable for regional resources. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = '';
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * [Output Only] An optional textual description of the valid disk size, such as "10GB-10TB".
     *
     * Generated from protobuf field <code>string valid_disk_size = 225527008;</code>
     */
    private $valid_disk_size = '';
    /**
     * [Output Only] URL of the zone where the disk type resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $default_disk_size_gb
     *           [Output Only] Server-defined default disk size in GB.
     *     @type \Google\Cloud\Compute\V1\DeprecationStatus $deprecated
     *           [Output Only] The deprecation status associated with this disk type.
     *     @type string $description
     *           [Output Only] An optional description of this resource.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#diskType for disk types.
     *     @type string $name
     *           [Output Only] Name of the resource.
     *     @type string $region
     *           [Output Only] URL of the region where the disk type resides. Only applicable for regional resources. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $valid_disk_size
     *           [Output Only] An optional textual description of the valid disk size, such as "10GB-10TB".
     *     @type string $zone
     *           [Output Only] URL of the zone where the disk type resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined default disk size in GB.
     *
     * Generated from protobuf field <code>string default_disk_size_gb = 2183797;</code>
     * @return string
     */
    public function getDefaultDiskSizeGb()
    {
        return $this->default_disk_size_gb;
    }

    /**
     * [Output Only] Server-defined default disk size in GB.
     *
     * Generated from protobuf field <code>string default_disk_size_gb = 2183797;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultDiskSizeGb($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_disk_size_gb = $var;

        return $this;
    }

    /**
     * [Output Only] The deprecation status associated with this disk type.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 246703539;</code>
     * @return \Google\Cloud\Compute\V1\DeprecationStatus
     */
    public function getDeprecated()
    {
        return isset($this->deprecated) ? $this->deprecated : null;
    }

    public function hasDeprecated()
    {
        return isset($this->deprecated);
    }

    public function clearDeprecated()
    {
        unset($this->deprecated);
    }

    /**
     * [Output Only] The deprecation status associated with this disk type.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 246703539;</code>
     * @param \Google\Cloud\Compute\V1\DeprecationStatus $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DeprecationStatus::class);
        $this->deprecated = $var;

        return $this;
    }

    /**
     * [Output Only] An optional description of this resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * [Output Only] An optional description of this resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#diskType for disk types.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] Type of the resource. Always compute#diskType for disk types.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the disk type resides. Only applicable for regional resources. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * [Output Only] URL of the region where the disk type resides. Only applicable for regional resources. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] An optional textual description of the valid disk size, such as "10GB-10TB".
     *
     * Generated from protobuf field <code>string valid_disk_size = 225527008;</code>
     * @return string
     */
    public function getValidDiskSize()
    {
        return $this->valid_disk_size;
    }

    /**
     * [Output Only] An optional textual description of the valid disk size, such as "10GB-10TB".
     *
     * Generated from protobuf field <code>string valid_disk_size = 225527008;</code>
     * @param string $var
     * @return $this
     */
    public function setValidDiskSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->valid_disk_size = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the zone where the disk type resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * [Output Only] URL of the zone where the disk type resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

