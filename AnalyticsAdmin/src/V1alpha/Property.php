<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a Google Analytics GA4 property.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this property.
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Time when the entity was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time when entity payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Immutable. Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}
     * Example: "accounts/100"
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $parent = '';
    /**
     * Required. Human-readable display name for this property.
     * The max allowed display name length is 100 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Industry associated with this property
     * Example: AUTOMOTIVE, FOOD_AND_DRINK
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.IndustryCategory industry_category = 6;</code>
     */
    private $industry_category = 0;
    /**
     * Reporting Time Zone, used as the day boundary for reports, regardless of
     * where the data originates. If the time zone honors DST, Analytics will
     * automatically adjust for the changes.
     * NOTE: Changing the time zone only affects data going forward, and is not
     * applied retroactively.
     * Format: https://www.iana.org/time-zones
     * Example: "America/Los_Angeles"
     *
     * Generated from protobuf field <code>string time_zone = 7;</code>
     */
    private $time_zone = '';
    /**
     * The currency type used in reports involving monetary values.
     * Format: https://en.wikipedia.org/wiki/ISO_4217
     * Examples: "USD", "EUR", "JPY"
     *
     * Generated from protobuf field <code>string currency_code = 8;</code>
     */
    private $currency_code = '';
    /**
     * Output only. Indicates whether this Property is soft-deleted or not.
     * Deleted properties are excluded from List results unless specifically
     * requested.
     *
     * Generated from protobuf field <code>bool deleted = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deleted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this property.
     *           Format: properties/{property_id}
     *           Example: "properties/1000"
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the entity was originally created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when entity payload fields were last updated.
     *     @type string $parent
     *           Immutable. Resource name of this property's logical parent.
     *           Note: The Property-Moving UI can be used to change the parent.
     *           Format: accounts/{account}
     *           Example: "accounts/100"
     *     @type string $display_name
     *           Required. Human-readable display name for this property.
     *           The max allowed display name length is 100 UTF-16 code units.
     *     @type int $industry_category
     *           Industry associated with this property
     *           Example: AUTOMOTIVE, FOOD_AND_DRINK
     *     @type string $time_zone
     *           Reporting Time Zone, used as the day boundary for reports, regardless of
     *           where the data originates. If the time zone honors DST, Analytics will
     *           automatically adjust for the changes.
     *           NOTE: Changing the time zone only affects data going forward, and is not
     *           applied retroactively.
     *           Format: https://www.iana.org/time-zones
     *           Example: "America/Los_Angeles"
     *     @type string $currency_code
     *           The currency type used in reports involving monetary values.
     *           Format: https://en.wikipedia.org/wiki/ISO_4217
     *           Examples: "USD", "EUR", "JPY"
     *     @type bool $deleted
     *           Output only. Indicates whether this Property is soft-deleted or not.
     *           Deleted properties are excluded from List results unless specifically
     *           requested.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this property.
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this property.
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the entity was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the entity was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when entity payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when entity payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Immutable. Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}
     * Example: "accounts/100"
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Immutable. Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}
     * Example: "accounts/100"
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Human-readable display name for this property.
     * The max allowed display name length is 100 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name for this property.
     * The max allowed display name length is 100 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Industry associated with this property
     * Example: AUTOMOTIVE, FOOD_AND_DRINK
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.IndustryCategory industry_category = 6;</code>
     * @return int
     */
    public function getIndustryCategory()
    {
        return $this->industry_category;
    }

    /**
     * Industry associated with this property
     * Example: AUTOMOTIVE, FOOD_AND_DRINK
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.IndustryCategory industry_category = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setIndustryCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\IndustryCategory::class);
        $this->industry_category = $var;

        return $this;
    }

    /**
     * Reporting Time Zone, used as the day boundary for reports, regardless of
     * where the data originates. If the time zone honors DST, Analytics will
     * automatically adjust for the changes.
     * NOTE: Changing the time zone only affects data going forward, and is not
     * applied retroactively.
     * Format: https://www.iana.org/time-zones
     * Example: "America/Los_Angeles"
     *
     * Generated from protobuf field <code>string time_zone = 7;</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Reporting Time Zone, used as the day boundary for reports, regardless of
     * where the data originates. If the time zone honors DST, Analytics will
     * automatically adjust for the changes.
     * NOTE: Changing the time zone only affects data going forward, and is not
     * applied retroactively.
     * Format: https://www.iana.org/time-zones
     * Example: "America/Los_Angeles"
     *
     * Generated from protobuf field <code>string time_zone = 7;</code>
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
     * The currency type used in reports involving monetary values.
     * Format: https://en.wikipedia.org/wiki/ISO_4217
     * Examples: "USD", "EUR", "JPY"
     *
     * Generated from protobuf field <code>string currency_code = 8;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The currency type used in reports involving monetary values.
     * Format: https://en.wikipedia.org/wiki/ISO_4217
     * Examples: "USD", "EUR", "JPY"
     *
     * Generated from protobuf field <code>string currency_code = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether this Property is soft-deleted or not.
     * Deleted properties are excluded from List results unless specifically
     * requested.
     *
     * Generated from protobuf field <code>bool deleted = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Output only. Indicates whether this Property is soft-deleted or not.
     * Deleted properties are excluded from List results unless specifically
     * requested.
     *
     * Generated from protobuf field <code>bool deleted = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

}

