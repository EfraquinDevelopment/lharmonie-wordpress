<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/travel_asset_suggestion_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [TravelAssetSuggestionService.SuggestTravelAssets][google.ads.googleads.v16.services.TravelAssetSuggestionService.SuggestTravelAssets].
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.SuggestTravelAssetsResponse</code>
 */
class SuggestTravelAssetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Asset suggestions for each place ID submitted in the request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.services.HotelAssetSuggestion hotel_asset_suggestions = 1;</code>
     */
    private $hotel_asset_suggestions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V16\Services\HotelAssetSuggestion>|\Google\Protobuf\Internal\RepeatedField $hotel_asset_suggestions
     *           Asset suggestions for each place ID submitted in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\TravelAssetSuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Asset suggestions for each place ID submitted in the request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.services.HotelAssetSuggestion hotel_asset_suggestions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHotelAssetSuggestions()
    {
        return $this->hotel_asset_suggestions;
    }

    /**
     * Asset suggestions for each place ID submitted in the request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.services.HotelAssetSuggestion hotel_asset_suggestions = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V16\Services\HotelAssetSuggestion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHotelAssetSuggestions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Services\HotelAssetSuggestion::class);
        $this->hotel_asset_suggestions = $arr;

        return $this;
    }

}

