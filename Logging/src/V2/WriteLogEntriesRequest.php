<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to WriteLogEntries.
 *
 * Generated from protobuf message <code>google.logging.v2.WriteLogEntriesRequest</code>
 */
final class WriteLogEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A default log resource name that is assigned to all log entries
     * in `entries` that do not specify a value for `log_name`:
     *     "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *     "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *     "folders/[FOLDER_ID]/logs/[LOG_ID]"
     * `[LOG_ID]` must be URL-encoded. For example:
     *     "projects/my-project-id/logs/syslog"
     *     "organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"
     * The permission <code>logging.logEntries.create</code> is needed on each
     * project, organization, billing account, or folder that is receiving
     * new log entries, whether the resource is specified in
     * <code>logName</code> or in an individual log entry.
     *
     * Generated from protobuf field <code>string log_name = 1;</code>
     */
    private $log_name = '';
    /**
     * Optional. A default monitored resource object that is assigned to all log
     * entries in `entries` that do not specify a value for `resource`. Example:
     *     { "type": "gce_instance",
     *       "labels": {
     *         "zone": "us-central1-a", "instance_id": "00000000000000000000" }}
     * See [LogEntry][google.logging.v2.LogEntry].
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 2;</code>
     */
    private $resource = null;
    /**
     * Optional. Default labels that are added to the `labels` field of all log
     * entries in `entries`. If a log entry already has a label with the same key
     * as a label in this parameter, then the log entry's label is not changed.
     * See [LogEntry][google.logging.v2.LogEntry].
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     */
    private $labels;
    /**
     * Required. The log entries to send to Logging. The order of log
     * entries in this list does not matter. Values supplied in this method's
     * `log_name`, `resource`, and `labels` fields are copied into those log
     * entries in this list that do not include values for their corresponding
     * fields. For more information, see the
     * [LogEntry][google.logging.v2.LogEntry] type.
     * If the `timestamp` or `insert_id` fields are missing in log entries, then
     * this method supplies the current time or a unique identifier, respectively.
     * The supplied values are chosen so that, among the log entries that did not
     * supply their own values, the entries earlier in the list will sort before
     * the entries later in the list. See the `entries.list` method.
     * Log entries with timestamps that are more than the
     * [logs retention period](/logging/quota-policy) in the past or more than
     * 24 hours in the future will not be available when calling `entries.list`.
     * However, those log entries can still be exported with
     * [LogSinks](/logging/docs/api/tasks/exporting-logs).
     * To improve throughput and to avoid exceeding the
     * [quota limit](/logging/quota-policy) for calls to `entries.write`,
     * you should try to include several log entries in this list,
     * rather than calling this method for each individual log entry.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogEntry entries = 4;</code>
     */
    private $entries;
    /**
     * Optional. Whether valid entries should be written even if some other
     * entries fail due to INVALID_ARGUMENT or PERMISSION_DENIED errors. If any
     * entry is not written, then the response status is the error associated
     * with one of the failed entries and the response includes error details
     * keyed by the entries' zero-based index in the `entries.write` method.
     *
     * Generated from protobuf field <code>bool partial_success = 5;</code>
     */
    private $partial_success = false;
    /**
     * Optional. If true, the request should expect normal response, but the
     * entries won't be persisted nor exported. Useful for checking whether the
     * logging API endpoints are working properly before sending valuable data.
     *
     * Generated from protobuf field <code>bool dry_run = 6;</code>
     */
    private $dry_run = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $log_name
     *           Optional. A default log resource name that is assigned to all log entries
     *           in `entries` that do not specify a value for `log_name`:
     *               "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *               "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *               "folders/[FOLDER_ID]/logs/[LOG_ID]"
     *           `[LOG_ID]` must be URL-encoded. For example:
     *               "projects/my-project-id/logs/syslog"
     *               "organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"
     *           The permission <code>logging.logEntries.create</code> is needed on each
     *           project, organization, billing account, or folder that is receiving
     *           new log entries, whether the resource is specified in
     *           <code>logName</code> or in an individual log entry.
     *     @type \Google\Api\MonitoredResource $resource
     *           Optional. A default monitored resource object that is assigned to all log
     *           entries in `entries` that do not specify a value for `resource`. Example:
     *               { "type": "gce_instance",
     *                 "labels": {
     *                   "zone": "us-central1-a", "instance_id": "00000000000000000000" }}
     *           See [LogEntry][google.logging.v2.LogEntry].
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Default labels that are added to the `labels` field of all log
     *           entries in `entries`. If a log entry already has a label with the same key
     *           as a label in this parameter, then the log entry's label is not changed.
     *           See [LogEntry][google.logging.v2.LogEntry].
     *     @type \Google\Cloud\Logging\V2\LogEntry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           Required. The log entries to send to Logging. The order of log
     *           entries in this list does not matter. Values supplied in this method's
     *           `log_name`, `resource`, and `labels` fields are copied into those log
     *           entries in this list that do not include values for their corresponding
     *           fields. For more information, see the
     *           [LogEntry][google.logging.v2.LogEntry] type.
     *           If the `timestamp` or `insert_id` fields are missing in log entries, then
     *           this method supplies the current time or a unique identifier, respectively.
     *           The supplied values are chosen so that, among the log entries that did not
     *           supply their own values, the entries earlier in the list will sort before
     *           the entries later in the list. See the `entries.list` method.
     *           Log entries with timestamps that are more than the
     *           [logs retention period](/logging/quota-policy) in the past or more than
     *           24 hours in the future will not be available when calling `entries.list`.
     *           However, those log entries can still be exported with
     *           [LogSinks](/logging/docs/api/tasks/exporting-logs).
     *           To improve throughput and to avoid exceeding the
     *           [quota limit](/logging/quota-policy) for calls to `entries.write`,
     *           you should try to include several log entries in this list,
     *           rather than calling this method for each individual log entry.
     *     @type bool $partial_success
     *           Optional. Whether valid entries should be written even if some other
     *           entries fail due to INVALID_ARGUMENT or PERMISSION_DENIED errors. If any
     *           entry is not written, then the response status is the error associated
     *           with one of the failed entries and the response includes error details
     *           keyed by the entries' zero-based index in the `entries.write` method.
     *     @type bool $dry_run
     *           Optional. If true, the request should expect normal response, but the
     *           entries won't be persisted nor exported. Useful for checking whether the
     *           logging API endpoints are working properly before sending valuable data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A default log resource name that is assigned to all log entries
     * in `entries` that do not specify a value for `log_name`:
     *     "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *     "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *     "folders/[FOLDER_ID]/logs/[LOG_ID]"
     * `[LOG_ID]` must be URL-encoded. For example:
     *     "projects/my-project-id/logs/syslog"
     *     "organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"
     * The permission <code>logging.logEntries.create</code> is needed on each
     * project, organization, billing account, or folder that is receiving
     * new log entries, whether the resource is specified in
     * <code>logName</code> or in an individual log entry.
     *
     * Generated from protobuf field <code>string log_name = 1;</code>
     * @return string
     */
    public function getLogName()
    {
        return $this->log_name;
    }

    /**
     * Optional. A default log resource name that is assigned to all log entries
     * in `entries` that do not specify a value for `log_name`:
     *     "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *     "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *     "folders/[FOLDER_ID]/logs/[LOG_ID]"
     * `[LOG_ID]` must be URL-encoded. For example:
     *     "projects/my-project-id/logs/syslog"
     *     "organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"
     * The permission <code>logging.logEntries.create</code> is needed on each
     * project, organization, billing account, or folder that is receiving
     * new log entries, whether the resource is specified in
     * <code>logName</code> or in an individual log entry.
     *
     * Generated from protobuf field <code>string log_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLogName($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_name = $var;

        return $this;
    }

    /**
     * Optional. A default monitored resource object that is assigned to all log
     * entries in `entries` that do not specify a value for `resource`. Example:
     *     { "type": "gce_instance",
     *       "labels": {
     *         "zone": "us-central1-a", "instance_id": "00000000000000000000" }}
     * See [LogEntry][google.logging.v2.LogEntry].
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 2;</code>
     * @return \Google\Api\MonitoredResource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Optional. A default monitored resource object that is assigned to all log
     * entries in `entries` that do not specify a value for `resource`. Example:
     *     { "type": "gce_instance",
     *       "labels": {
     *         "zone": "us-central1-a", "instance_id": "00000000000000000000" }}
     * See [LogEntry][google.logging.v2.LogEntry].
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 2;</code>
     * @param \Google\Api\MonitoredResource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MonitoredResource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * Optional. Default labels that are added to the `labels` field of all log
     * entries in `entries`. If a log entry already has a label with the same key
     * as a label in this parameter, then the log entry's label is not changed.
     * See [LogEntry][google.logging.v2.LogEntry].
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Default labels that are added to the `labels` field of all log
     * entries in `entries`. If a log entry already has a label with the same key
     * as a label in this parameter, then the log entry's label is not changed.
     * See [LogEntry][google.logging.v2.LogEntry].
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. The log entries to send to Logging. The order of log
     * entries in this list does not matter. Values supplied in this method's
     * `log_name`, `resource`, and `labels` fields are copied into those log
     * entries in this list that do not include values for their corresponding
     * fields. For more information, see the
     * [LogEntry][google.logging.v2.LogEntry] type.
     * If the `timestamp` or `insert_id` fields are missing in log entries, then
     * this method supplies the current time or a unique identifier, respectively.
     * The supplied values are chosen so that, among the log entries that did not
     * supply their own values, the entries earlier in the list will sort before
     * the entries later in the list. See the `entries.list` method.
     * Log entries with timestamps that are more than the
     * [logs retention period](/logging/quota-policy) in the past or more than
     * 24 hours in the future will not be available when calling `entries.list`.
     * However, those log entries can still be exported with
     * [LogSinks](/logging/docs/api/tasks/exporting-logs).
     * To improve throughput and to avoid exceeding the
     * [quota limit](/logging/quota-policy) for calls to `entries.write`,
     * you should try to include several log entries in this list,
     * rather than calling this method for each individual log entry.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogEntry entries = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Required. The log entries to send to Logging. The order of log
     * entries in this list does not matter. Values supplied in this method's
     * `log_name`, `resource`, and `labels` fields are copied into those log
     * entries in this list that do not include values for their corresponding
     * fields. For more information, see the
     * [LogEntry][google.logging.v2.LogEntry] type.
     * If the `timestamp` or `insert_id` fields are missing in log entries, then
     * this method supplies the current time or a unique identifier, respectively.
     * The supplied values are chosen so that, among the log entries that did not
     * supply their own values, the entries earlier in the list will sort before
     * the entries later in the list. See the `entries.list` method.
     * Log entries with timestamps that are more than the
     * [logs retention period](/logging/quota-policy) in the past or more than
     * 24 hours in the future will not be available when calling `entries.list`.
     * However, those log entries can still be exported with
     * [LogSinks](/logging/docs/api/tasks/exporting-logs).
     * To improve throughput and to avoid exceeding the
     * [quota limit](/logging/quota-policy) for calls to `entries.write`,
     * you should try to include several log entries in this list,
     * rather than calling this method for each individual log entry.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogEntry entries = 4;</code>
     * @param \Google\Cloud\Logging\V2\LogEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Logging\V2\LogEntry::class);
        $this->entries = $arr;

        return $this;
    }

    /**
     * Optional. Whether valid entries should be written even if some other
     * entries fail due to INVALID_ARGUMENT or PERMISSION_DENIED errors. If any
     * entry is not written, then the response status is the error associated
     * with one of the failed entries and the response includes error details
     * keyed by the entries' zero-based index in the `entries.write` method.
     *
     * Generated from protobuf field <code>bool partial_success = 5;</code>
     * @return bool
     */
    public function getPartialSuccess()
    {
        return $this->partial_success;
    }

    /**
     * Optional. Whether valid entries should be written even if some other
     * entries fail due to INVALID_ARGUMENT or PERMISSION_DENIED errors. If any
     * entry is not written, then the response status is the error associated
     * with one of the failed entries and the response includes error details
     * keyed by the entries' zero-based index in the `entries.write` method.
     *
     * Generated from protobuf field <code>bool partial_success = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPartialSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->partial_success = $var;

        return $this;
    }

    /**
     * Optional. If true, the request should expect normal response, but the
     * entries won't be persisted nor exported. Useful for checking whether the
     * logging API endpoints are working properly before sending valuable data.
     *
     * Generated from protobuf field <code>bool dry_run = 6;</code>
     * @return bool
     */
    public function getDryRun()
    {
        return $this->dry_run;
    }

    /**
     * Optional. If true, the request should expect normal response, but the
     * entries won't be persisted nor exported. Useful for checking whether the
     * logging API endpoints are working properly before sending valuable data.
     *
     * Generated from protobuf field <code>bool dry_run = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDryRun($var)
    {
        GPBUtil::checkBool($var);
        $this->dry_run = $var;

        return $this;
    }

}

