<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * Incident Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class Incident implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Incident';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'threshold' => 'double',
        'status' => 'string',
        'started_at' => 'string',
        'severity' => 'string',
        'sample_size_unit' => 'string',
        'sample_size' => 'int',
        'resolved_at' => 'string',
        'notifications' => '\MuxPhp\Models\IncidentNotification[]',
        'notification_rules' => '\MuxPhp\Models\IncidentNotificationRule[]',
        'measurement' => 'string',
        'measured_value_on_close' => 'double',
        'measured_value' => 'double',
        'incident_key' => 'string',
        'impact' => 'string',
        'id' => 'string',
        'error_description' => 'string',
        'description' => 'string',
        'breakdowns' => '\MuxPhp\Models\IncidentBreakdown[]',
        'affected_views_per_hour_on_open' => 'int',
        'affected_views_per_hour' => 'int',
        'affected_views' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'threshold' => 'double',
        'status' => null,
        'started_at' => null,
        'severity' => null,
        'sample_size_unit' => null,
        'sample_size' => 'int64',
        'resolved_at' => null,
        'notifications' => null,
        'notification_rules' => null,
        'measurement' => null,
        'measured_value_on_close' => 'double',
        'measured_value' => 'double',
        'incident_key' => null,
        'impact' => null,
        'id' => null,
        'error_description' => null,
        'description' => null,
        'breakdowns' => null,
        'affected_views_per_hour_on_open' => 'int64',
        'affected_views_per_hour' => 'int64',
        'affected_views' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'threshold' => 'threshold',
        'status' => 'status',
        'started_at' => 'started_at',
        'severity' => 'severity',
        'sample_size_unit' => 'sample_size_unit',
        'sample_size' => 'sample_size',
        'resolved_at' => 'resolved_at',
        'notifications' => 'notifications',
        'notification_rules' => 'notification_rules',
        'measurement' => 'measurement',
        'measured_value_on_close' => 'measured_value_on_close',
        'measured_value' => 'measured_value',
        'incident_key' => 'incident_key',
        'impact' => 'impact',
        'id' => 'id',
        'error_description' => 'error_description',
        'description' => 'description',
        'breakdowns' => 'breakdowns',
        'affected_views_per_hour_on_open' => 'affected_views_per_hour_on_open',
        'affected_views_per_hour' => 'affected_views_per_hour',
        'affected_views' => 'affected_views'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'threshold' => 'setThreshold',
        'status' => 'setStatus',
        'started_at' => 'setStartedAt',
        'severity' => 'setSeverity',
        'sample_size_unit' => 'setSampleSizeUnit',
        'sample_size' => 'setSampleSize',
        'resolved_at' => 'setResolvedAt',
        'notifications' => 'setNotifications',
        'notification_rules' => 'setNotificationRules',
        'measurement' => 'setMeasurement',
        'measured_value_on_close' => 'setMeasuredValueOnClose',
        'measured_value' => 'setMeasuredValue',
        'incident_key' => 'setIncidentKey',
        'impact' => 'setImpact',
        'id' => 'setId',
        'error_description' => 'setErrorDescription',
        'description' => 'setDescription',
        'breakdowns' => 'setBreakdowns',
        'affected_views_per_hour_on_open' => 'setAffectedViewsPerHourOnOpen',
        'affected_views_per_hour' => 'setAffectedViewsPerHour',
        'affected_views' => 'setAffectedViews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'threshold' => 'getThreshold',
        'status' => 'getStatus',
        'started_at' => 'getStartedAt',
        'severity' => 'getSeverity',
        'sample_size_unit' => 'getSampleSizeUnit',
        'sample_size' => 'getSampleSize',
        'resolved_at' => 'getResolvedAt',
        'notifications' => 'getNotifications',
        'notification_rules' => 'getNotificationRules',
        'measurement' => 'getMeasurement',
        'measured_value_on_close' => 'getMeasuredValueOnClose',
        'measured_value' => 'getMeasuredValue',
        'incident_key' => 'getIncidentKey',
        'impact' => 'getImpact',
        'id' => 'getId',
        'error_description' => 'getErrorDescription',
        'description' => 'getDescription',
        'breakdowns' => 'getBreakdowns',
        'affected_views_per_hour_on_open' => 'getAffectedViewsPerHourOnOpen',
        'affected_views_per_hour' => 'getAffectedViewsPerHour',
        'affected_views' => 'getAffectedViews'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['sample_size_unit'] = isset($data['sample_size_unit']) ? $data['sample_size_unit'] : null;
        $this->container['sample_size'] = isset($data['sample_size']) ? $data['sample_size'] : null;
        $this->container['resolved_at'] = isset($data['resolved_at']) ? $data['resolved_at'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['notification_rules'] = isset($data['notification_rules']) ? $data['notification_rules'] : null;
        $this->container['measurement'] = isset($data['measurement']) ? $data['measurement'] : null;
        $this->container['measured_value_on_close'] = isset($data['measured_value_on_close']) ? $data['measured_value_on_close'] : null;
        $this->container['measured_value'] = isset($data['measured_value']) ? $data['measured_value'] : null;
        $this->container['incident_key'] = isset($data['incident_key']) ? $data['incident_key'] : null;
        $this->container['impact'] = isset($data['impact']) ? $data['impact'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['error_description'] = isset($data['error_description']) ? $data['error_description'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['breakdowns'] = isset($data['breakdowns']) ? $data['breakdowns'] : null;
        $this->container['affected_views_per_hour_on_open'] = isset($data['affected_views_per_hour_on_open']) ? $data['affected_views_per_hour_on_open'] : null;
        $this->container['affected_views_per_hour'] = isset($data['affected_views_per_hour']) ? $data['affected_views_per_hour'] : null;
        $this->container['affected_views'] = isset($data['affected_views']) ? $data['affected_views'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets threshold
     *
     * @return double|null
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param double|null $threshold threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return string|null
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string|null $started_at started_at
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets sample_size_unit
     *
     * @return string|null
     */
    public function getSampleSizeUnit()
    {
        return $this->container['sample_size_unit'];
    }

    /**
     * Sets sample_size_unit
     *
     * @param string|null $sample_size_unit sample_size_unit
     *
     * @return $this
     */
    public function setSampleSizeUnit($sample_size_unit)
    {
        $this->container['sample_size_unit'] = $sample_size_unit;

        return $this;
    }

    /**
     * Gets sample_size
     *
     * @return int|null
     */
    public function getSampleSize()
    {
        return $this->container['sample_size'];
    }

    /**
     * Sets sample_size
     *
     * @param int|null $sample_size sample_size
     *
     * @return $this
     */
    public function setSampleSize($sample_size)
    {
        $this->container['sample_size'] = $sample_size;

        return $this;
    }

    /**
     * Gets resolved_at
     *
     * @return string|null
     */
    public function getResolvedAt()
    {
        return $this->container['resolved_at'];
    }

    /**
     * Sets resolved_at
     *
     * @param string|null $resolved_at resolved_at
     *
     * @return $this
     */
    public function setResolvedAt($resolved_at)
    {
        $this->container['resolved_at'] = $resolved_at;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \MuxPhp\Models\IncidentNotification[]|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \MuxPhp\Models\IncidentNotification[]|null $notifications notifications
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets notification_rules
     *
     * @return \MuxPhp\Models\IncidentNotificationRule[]|null
     */
    public function getNotificationRules()
    {
        return $this->container['notification_rules'];
    }

    /**
     * Sets notification_rules
     *
     * @param \MuxPhp\Models\IncidentNotificationRule[]|null $notification_rules notification_rules
     *
     * @return $this
     */
    public function setNotificationRules($notification_rules)
    {
        $this->container['notification_rules'] = $notification_rules;

        return $this;
    }

    /**
     * Gets measurement
     *
     * @return string|null
     */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement
     *
     * @param string|null $measurement measurement
     *
     * @return $this
     */
    public function setMeasurement($measurement)
    {
        $this->container['measurement'] = $measurement;

        return $this;
    }

    /**
     * Gets measured_value_on_close
     *
     * @return double|null
     */
    public function getMeasuredValueOnClose()
    {
        return $this->container['measured_value_on_close'];
    }

    /**
     * Sets measured_value_on_close
     *
     * @param double|null $measured_value_on_close measured_value_on_close
     *
     * @return $this
     */
    public function setMeasuredValueOnClose($measured_value_on_close)
    {
        $this->container['measured_value_on_close'] = $measured_value_on_close;

        return $this;
    }

    /**
     * Gets measured_value
     *
     * @return double|null
     */
    public function getMeasuredValue()
    {
        return $this->container['measured_value'];
    }

    /**
     * Sets measured_value
     *
     * @param double|null $measured_value measured_value
     *
     * @return $this
     */
    public function setMeasuredValue($measured_value)
    {
        $this->container['measured_value'] = $measured_value;

        return $this;
    }

    /**
     * Gets incident_key
     *
     * @return string|null
     */
    public function getIncidentKey()
    {
        return $this->container['incident_key'];
    }

    /**
     * Sets incident_key
     *
     * @param string|null $incident_key incident_key
     *
     * @return $this
     */
    public function setIncidentKey($incident_key)
    {
        $this->container['incident_key'] = $incident_key;

        return $this;
    }

    /**
     * Gets impact
     *
     * @return string|null
     */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
     * Sets impact
     *
     * @param string|null $impact impact
     *
     * @return $this
     */
    public function setImpact($impact)
    {
        $this->container['impact'] = $impact;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets error_description
     *
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->container['error_description'];
    }

    /**
     * Sets error_description
     *
     * @param string|null $error_description error_description
     *
     * @return $this
     */
    public function setErrorDescription($error_description)
    {
        $this->container['error_description'] = $error_description;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets breakdowns
     *
     * @return \MuxPhp\Models\IncidentBreakdown[]|null
     */
    public function getBreakdowns()
    {
        return $this->container['breakdowns'];
    }

    /**
     * Sets breakdowns
     *
     * @param \MuxPhp\Models\IncidentBreakdown[]|null $breakdowns breakdowns
     *
     * @return $this
     */
    public function setBreakdowns($breakdowns)
    {
        $this->container['breakdowns'] = $breakdowns;

        return $this;
    }

    /**
     * Gets affected_views_per_hour_on_open
     *
     * @return int|null
     */
    public function getAffectedViewsPerHourOnOpen()
    {
        return $this->container['affected_views_per_hour_on_open'];
    }

    /**
     * Sets affected_views_per_hour_on_open
     *
     * @param int|null $affected_views_per_hour_on_open affected_views_per_hour_on_open
     *
     * @return $this
     */
    public function setAffectedViewsPerHourOnOpen($affected_views_per_hour_on_open)
    {
        $this->container['affected_views_per_hour_on_open'] = $affected_views_per_hour_on_open;

        return $this;
    }

    /**
     * Gets affected_views_per_hour
     *
     * @return int|null
     */
    public function getAffectedViewsPerHour()
    {
        return $this->container['affected_views_per_hour'];
    }

    /**
     * Sets affected_views_per_hour
     *
     * @param int|null $affected_views_per_hour affected_views_per_hour
     *
     * @return $this
     */
    public function setAffectedViewsPerHour($affected_views_per_hour)
    {
        $this->container['affected_views_per_hour'] = $affected_views_per_hour;

        return $this;
    }

    /**
     * Gets affected_views
     *
     * @return int|null
     */
    public function getAffectedViews()
    {
        return $this->container['affected_views'];
    }

    /**
     * Sets affected_views
     *
     * @param int|null $affected_views affected_views
     *
     * @return $this
     */
    public function setAffectedViews($affected_views)
    {
        $this->container['affected_views'] = $affected_views;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


