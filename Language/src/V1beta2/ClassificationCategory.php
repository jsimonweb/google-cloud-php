<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a category returned from the text classifier.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.ClassificationCategory</code>
 */
final class ClassificationCategory extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the category representing the document.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The classifier's confidence of the category. Number represents how certain
     * the classifier is that this category represents the given text.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the category representing the document.
     *     @type float $confidence
     *           The classifier's confidence of the category. Number represents how certain
     *           the classifier is that this category represents the given text.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the category representing the document.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the category representing the document.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The classifier's confidence of the category. Number represents how certain
     * the classifier is that this category represents the given text.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The classifier's confidence of the category. Number represents how certain
     * the classifier is that this category represents the given text.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

