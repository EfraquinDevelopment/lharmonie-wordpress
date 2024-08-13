<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/call_to_action_type.proto

namespace Google\Ads\GoogleAds\V16\Enums\CallToActionTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible types of call to action.
 *
 * Protobuf type <code>google.ads.googleads.v16.enums.CallToActionTypeEnum.CallToActionType</code>
 */
class CallToActionType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The call to action type is learn more.
     *
     * Generated from protobuf enum <code>LEARN_MORE = 2;</code>
     */
    const LEARN_MORE = 2;
    /**
     * The call to action type is get quote.
     *
     * Generated from protobuf enum <code>GET_QUOTE = 3;</code>
     */
    const GET_QUOTE = 3;
    /**
     * The call to action type is apply now.
     *
     * Generated from protobuf enum <code>APPLY_NOW = 4;</code>
     */
    const APPLY_NOW = 4;
    /**
     * The call to action type is sign up.
     *
     * Generated from protobuf enum <code>SIGN_UP = 5;</code>
     */
    const SIGN_UP = 5;
    /**
     * The call to action type is contact us.
     *
     * Generated from protobuf enum <code>CONTACT_US = 6;</code>
     */
    const CONTACT_US = 6;
    /**
     * The call to action type is subscribe.
     *
     * Generated from protobuf enum <code>SUBSCRIBE = 7;</code>
     */
    const SUBSCRIBE = 7;
    /**
     * The call to action type is download.
     *
     * Generated from protobuf enum <code>DOWNLOAD = 8;</code>
     */
    const DOWNLOAD = 8;
    /**
     * The call to action type is book now.
     *
     * Generated from protobuf enum <code>BOOK_NOW = 9;</code>
     */
    const BOOK_NOW = 9;
    /**
     * The call to action type is shop now.
     *
     * Generated from protobuf enum <code>SHOP_NOW = 10;</code>
     */
    const SHOP_NOW = 10;
    /**
     * The call to action type is buy now.
     *
     * Generated from protobuf enum <code>BUY_NOW = 11;</code>
     */
    const BUY_NOW = 11;
    /**
     * The call to action type is donate now.
     *
     * Generated from protobuf enum <code>DONATE_NOW = 12;</code>
     */
    const DONATE_NOW = 12;
    /**
     * The call to action type is order now.
     *
     * Generated from protobuf enum <code>ORDER_NOW = 13;</code>
     */
    const ORDER_NOW = 13;
    /**
     * The call to action type is play now.
     *
     * Generated from protobuf enum <code>PLAY_NOW = 14;</code>
     */
    const PLAY_NOW = 14;
    /**
     * The call to action type is see more.
     *
     * Generated from protobuf enum <code>SEE_MORE = 15;</code>
     */
    const SEE_MORE = 15;
    /**
     * The call to action type is start now.
     *
     * Generated from protobuf enum <code>START_NOW = 16;</code>
     */
    const START_NOW = 16;
    /**
     * The call to action type is visit site.
     *
     * Generated from protobuf enum <code>VISIT_SITE = 17;</code>
     */
    const VISIT_SITE = 17;
    /**
     * The call to action type is watch now.
     *
     * Generated from protobuf enum <code>WATCH_NOW = 18;</code>
     */
    const WATCH_NOW = 18;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LEARN_MORE => 'LEARN_MORE',
        self::GET_QUOTE => 'GET_QUOTE',
        self::APPLY_NOW => 'APPLY_NOW',
        self::SIGN_UP => 'SIGN_UP',
        self::CONTACT_US => 'CONTACT_US',
        self::SUBSCRIBE => 'SUBSCRIBE',
        self::DOWNLOAD => 'DOWNLOAD',
        self::BOOK_NOW => 'BOOK_NOW',
        self::SHOP_NOW => 'SHOP_NOW',
        self::BUY_NOW => 'BUY_NOW',
        self::DONATE_NOW => 'DONATE_NOW',
        self::ORDER_NOW => 'ORDER_NOW',
        self::PLAY_NOW => 'PLAY_NOW',
        self::SEE_MORE => 'SEE_MORE',
        self::START_NOW => 'START_NOW',
        self::VISIT_SITE => 'VISIT_SITE',
        self::WATCH_NOW => 'WATCH_NOW',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CallToActionType::class, \Google\Ads\GoogleAds\V16\Enums\CallToActionTypeEnum_CallToActionType::class);

