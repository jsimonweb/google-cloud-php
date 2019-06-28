<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The syntax analysis request message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.AnalyzeSyntaxRequest</code>
 */
final class AnalyzeSyntaxRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Document document = 1;</code>
     */
    private $document = null;
    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     */
    private $encoding_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1beta2\Document $document
     *           Input document.
     *     @type int $encoding_type
     *           The encoding type used by the API to calculate offsets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Document document = 1;</code>
     * @return \Google\Cloud\Language\V1beta2\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Document document = 1;</code>
     * @param \Google\Cloud\Language\V1beta2\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

