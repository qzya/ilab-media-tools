<?php

namespace MediaCloud\Vendor\Aws\DevOpsGuru;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon DevOps Guru** service.
 * @method \MediaCloud\Vendor\Aws\Result addNotificationChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addNotificationChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAccountHealth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAccountHealthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAccountOverview(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAccountOverviewAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAnomaly(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAnomalyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeFeedback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeFeedbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInsight(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInsightAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeOrganizationHealth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeOrganizationHealthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeOrganizationOverview(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeOrganizationOverviewAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeOrganizationResourceCollectionHealth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeOrganizationResourceCollectionHealthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResourceCollectionHealth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourceCollectionHealthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeServiceIntegration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeServiceIntegrationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCostEstimation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCostEstimationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourceCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourceCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnomaliesForInsight(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnomaliesForInsightAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInsights(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInsightsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listNotificationChannels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listNotificationChannelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listOrganizationInsights(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listOrganizationInsightsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRecommendations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putFeedback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeNotificationChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeNotificationChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchInsights(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchInsightsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchOrganizationInsights(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchOrganizationInsightsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startCostEstimation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startCostEstimationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResourceCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResourceCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateServiceIntegration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateServiceIntegrationAsync(array $args = [])
 */
class DevOpsGuruClient extends AwsClient {}