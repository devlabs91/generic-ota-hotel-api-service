<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FaultcodeEnum EnumType
 * @subpackage Enumerations
 */
class FaultcodeEnum
{
    /**
     * Constant for value 'wsse:UnsupportedSecurityToken'
     * @return string 'wsse:UnsupportedSecurityToken'
     */
    const VALUE_WSSE_UNSUPPORTED_SECURITY_TOKEN = 'wsse:UnsupportedSecurityToken';
    /**
     * Constant for value 'wsse:UnsupportedAlgorithm'
     * @return string 'wsse:UnsupportedAlgorithm'
     */
    const VALUE_WSSE_UNSUPPORTED_ALGORITHM = 'wsse:UnsupportedAlgorithm';
    /**
     * Constant for value 'wsse:InvalidSecurity'
     * @return string 'wsse:InvalidSecurity'
     */
    const VALUE_WSSE_INVALID_SECURITY = 'wsse:InvalidSecurity';
    /**
     * Constant for value 'wsse:InvalidSecurityToken'
     * @return string 'wsse:InvalidSecurityToken'
     */
    const VALUE_WSSE_INVALID_SECURITY_TOKEN = 'wsse:InvalidSecurityToken';
    /**
     * Constant for value 'wsse:FailedAuthentication'
     * @return string 'wsse:FailedAuthentication'
     */
    const VALUE_WSSE_FAILED_AUTHENTICATION = 'wsse:FailedAuthentication';
    /**
     * Constant for value 'wsse:FailedCheck'
     * @return string 'wsse:FailedCheck'
     */
    const VALUE_WSSE_FAILED_CHECK = 'wsse:FailedCheck';
    /**
     * Constant for value 'wsse:SecurityTokenUnavailable'
     * @return string 'wsse:SecurityTokenUnavailable'
     */
    const VALUE_WSSE_SECURITY_TOKEN_UNAVAILABLE = 'wsse:SecurityTokenUnavailable';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_WSSE_UNSUPPORTED_SECURITY_TOKEN
     * @uses self::VALUE_WSSE_UNSUPPORTED_ALGORITHM
     * @uses self::VALUE_WSSE_INVALID_SECURITY
     * @uses self::VALUE_WSSE_INVALID_SECURITY_TOKEN
     * @uses self::VALUE_WSSE_FAILED_AUTHENTICATION
     * @uses self::VALUE_WSSE_FAILED_CHECK
     * @uses self::VALUE_WSSE_SECURITY_TOKEN_UNAVAILABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WSSE_UNSUPPORTED_SECURITY_TOKEN,
            self::VALUE_WSSE_UNSUPPORTED_ALGORITHM,
            self::VALUE_WSSE_INVALID_SECURITY,
            self::VALUE_WSSE_INVALID_SECURITY_TOKEN,
            self::VALUE_WSSE_FAILED_AUTHENTICATION,
            self::VALUE_WSSE_FAILED_CHECK,
            self::VALUE_WSSE_SECURITY_TOKEN_UNAVAILABLE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
