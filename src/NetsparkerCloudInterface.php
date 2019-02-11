<?php

namespace Montross50\NetsparkerCloud;

interface NetsparkerCloudInterface
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\AccountLicenseApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function accountLicense(string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\UserHealthCheckApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function accountMe(string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\AgentGroupApiDeleteModel $model the model
     * @param string                                                         $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function agentGroupsDelete(\Montross50\NetsparkerCloud\SDK\Model\AgentGroupApiDeleteModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\AgentGroupsListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function agentGroupsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\AgentGroupApiNewModel $model the new agent group model
     * @param string                                                      $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\AgentGroupModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function agentGroupsNew(\Montross50\NetsparkerCloud\SDK\Model\AgentGroupApiNewModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\AgentGroupApiUpdateModel $model
     * @param string                                                         $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\AgentGroupModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function agentGroupsUpdate(\Montross50\NetsparkerCloud\SDK\Model\AgentGroupApiUpdateModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\DeleteScanNotificationApiModel $model the new scan notification model
     * @param string                                                               $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\NotificationsDeleteBadRequestException
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\NotificationsDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsDelete(\Montross50\NetsparkerCloud\SDK\Model\DeleteScanNotificationApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsGet(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var string   $event           The notification event.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsGetPriorities(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewScanNotificationApiModel $model the new scan notification model
     * @param string                                                            $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsNew(\Montross50\NetsparkerCloud\SDK\Model\NewScanNotificationApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NotificationPriorityPair[] $priorities the notification priority pairs
     * @param string                                                           $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\NotificationsSetPrioritiesBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsSetPriorities(array $priorities, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\UpdateScanNotificationApiModel $model the new scan notification model
     * @param string                                                               $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function notificationsUpdate(\Montross50\NetsparkerCloud\SDK\Model\UpdateScanNotificationApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $name  the scan policy name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScanPoliciesDeleteBadRequestException
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScanPoliciesDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scanPoliciesDelete(string $name, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var string   $name            The scan policy name.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanPolicySettingApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanPoliciesFind(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the identifier of scan policy
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanPolicySettingApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanPoliciesGet(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanPolicyListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanPoliciesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewScanPolicySettingModel $model the model
     * @param string                                                          $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanPolicySettingApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanPoliciesNew(\Montross50\NetsparkerCloud\SDK\Model\NewScanPolicySettingModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\UpdateScanPolicySettingModel $model the model
     * @param string                                                             $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanPolicySettingApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanPoliciesUpdate(\Montross50\NetsparkerCloud\SDK\Model\UpdateScanPolicySettingModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param mixed  $profileId the scan profile's ID
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scanProfilesDelete(string $profileId, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the identifier of scan profiles
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanProfilesGet(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanProfilesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel $model the ScanProfileSettingApiModel model
     * @param string                                                        $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanProfilesNew(\Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel $model the model
     * @param string                                                        $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scanProfilesUpdate(\Montross50\NetsparkerCloud\SDK\Model\SaveScanProfileApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param mixed  $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansCancel(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var bool     $excludeIgnoreds If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be
     * @var string   $id              gets or sets the scan identifier
     * @var string   $reportName      Gets or sets report name. Report name also keeps report type in it.
     * @var string   $type            Gets or sets the report type.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansCustomReportBadRequestException
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansCustomReportNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansCustomReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $ids   the identifiers of scans
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansDelete(array $ids, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansDetail(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var string   $scanId          The scan id
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansDownloadScanFile(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\IncrementalApiModel $model Contains data that is required to create an incremental scan. Base scan should be in completed
     * @param string                                                    $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansIncremental(\Montross50\NetsparkerCloud\SDK\Model\IncrementalApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var string   $scanTaskState   The state of ScanTask {Netsparker.Cloud.Core.Models.ScanTaskState}&gt;
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansListByState(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var string   $websiteUrl      the website URL
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansListByWebsite(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScheduledScanListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansListScheduled(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewScanTaskApiModel $model contains data that is required to create a new scan
     * @param string                                                    $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansNew(\Montross50\NetsparkerCloud\SDK\Model\NewScanTaskApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param mixed  $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansNewFromScan(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewGroupScanApiModel $model contains data that is required to create a new group scan
     * @param string                                                     $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansNewGroupScan(\Montross50\NetsparkerCloud\SDK\Model\NewGroupScanApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewScanTaskWithProfileApiModel $model contains data that is required to create a new scan
     * @param string                                                               $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansNewWithProfile(\Montross50\NetsparkerCloud\SDK\Model\NewScanTaskWithProfileApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param mixed  $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansPause(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters     {
     *
     * @var string   $contentFormat       Gets or sets the content format. This parameter can only be used for vulnerabilities XML and JSON report.
     * @var bool     $excludeResponseData If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be
     * @var string   $format              Gets or sets the report format.
     * @var string   $id                  gets or sets the scan identifier
     * @var string   $type                Gets or sets the report type.
     * }
     *
     * @param string $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansReportBadRequestException
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansReportNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansReport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\VulnerabilityModel[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansResult(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param mixed  $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansResume(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\BaseScanApiModel $model Contains data that is required to create a retest scan. Base scan should be in completed state.
     * @param string                                                 $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ScanTaskModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansRetest(\Montross50\NetsparkerCloud\SDK\Model\BaseScanApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewScheduledScanApiModel $model contains data that required to create a scheduled scan
     * @param string                                                         $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledScanModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansSchedule(\Montross50\NetsparkerCloud\SDK\Model\NewScheduledScanApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewScheduledIncrementalScanApiModel $model contains data that required to create a scheduled scan
     * @param string                                                                    $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledScanModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansScheduleIncremental(\Montross50\NetsparkerCloud\SDK\Model\NewScheduledIncrementalScanApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\ApiScanStatusModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansStatus(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param mixed  $id    the identifier of scan
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansUnscheduleNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function scansUnschedule(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledScanApiModel $model contains data that is required to update a scheduled scan
     * @param string                                                            $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledScanApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansUpdateScheduled(\Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledScanApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledIncrementalScanApiModel $model contains data that is required to update a scheduled scan
     * @param string                                                                       $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledScanApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansUpdateScheduledIncremental(\Montross50\NetsparkerCloud\SDK\Model\UpdateScheduledIncrementalScanApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\FormAuthenticationVerificationApiModel $model contains form authentication settings
     * @param string                                                                       $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\AuthVerificationApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function scansVerifyFormAuth(\Montross50\NetsparkerCloud\SDK\Model\FormAuthenticationVerificationApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\VulnerabilityTemplate[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function vulnerabilityList(string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\DeleteWebsiteGroupApiModel $model the model
     * @param string                                                           $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function websiteGroupsDelete(\Montross50\NetsparkerCloud\SDK\Model\DeleteWebsiteGroupApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websiteGroupsGet(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page size
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteGroupListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function websiteGroupsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewWebsiteGroupApiModel $model the model
     * @param string                                                        $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteGroupApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websiteGroupsNew(\Montross50\NetsparkerCloud\SDK\Model\NewWebsiteGroupApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\UpdateWebsiteGroupApiModel $model the model
     * @param string                                                           $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteGroupApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websiteGroupsUpdate(\Montross50\NetsparkerCloud\SDK\Model\UpdateWebsiteGroupApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\DeleteWebsiteApiModel $model the model
     * @param string                                                      $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function websitesDelete(\Montross50\NetsparkerCloud\SDK\Model\DeleteWebsiteApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $id    the website id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websitesGet(string $id, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var int      $page            the page index
     * @var int      $pageSize        The page size. Page size can be any value between 1 and 200.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteListApiResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function websitesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\NewWebsiteApiModel $model the model
     * @param string                                                   $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websitesNew(\Montross50\NetsparkerCloud\SDK\Model\NewWebsiteApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param string $websiteUrl the website URL
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\SendVerificationEmailModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websitesSendVerificationEmail(string $websiteUrl, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\StartVerificationApiModel $model the model
     * @param string                                                          $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\StartVerificationResult|\Psr\Http\Message\ResponseInterface|null
     */
    public function websitesStartVerification(\Montross50\NetsparkerCloud\SDK\Model\StartVerificationApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\UpdateWebsiteApiModel $model the model
     * @param string                                                      $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Montross50\NetsparkerCloud\SDK\Model\WebsiteApiModel|\Psr\Http\Message\ResponseInterface|null
     */
    public function websitesUpdate(\Montross50\NetsparkerCloud\SDK\Model\UpdateWebsiteApiModel $model, string $fetch = self::FETCH_OBJECT);

    /**
     * @param array  $queryParameters {
     *
     * @var string   $websiteUrl      The website URL.
     * }
     *
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\WebsitesVerificationFileNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function websitesVerificationFile(array $queryParameters = [], string $fetch = self::FETCH_OBJECT);

    /**
     * @param \Montross50\NetsparkerCloud\SDK\Model\VerifyApiModel $model the model
     * @param string                                               $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function websitesVerify(\Montross50\NetsparkerCloud\SDK\Model\VerifyApiModel $model, string $fetch = self::FETCH_OBJECT);
}
