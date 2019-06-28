<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2\AnnotateTextRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All available features for sentiment, syntax, and semantic analysis.
 * Setting each one to true will enable that specific analysis for the input.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.AnnotateTextRequest.Features</code>
 */
final class Features extends \Google\Protobuf\Internal\Message
{
    /**
     * Extract syntax information.
     *
     * Generated from protobuf field <code>bool extract_syntax = 1;</code>
     */
    private $extract_syntax = false;
    /**
     * Extract entities.
     *
     * Generated from protobuf field <code>bool extract_entities = 2;</code>
     */
    private $extract_entities = false;
    /**
     * Extract document-level sentiment.
     *
     * Generated from protobuf field <code>bool extract_document_sentiment = 3;</code>
     */
    private $extract_document_sentiment = false;
    /**
     * Extract entities and their associated sentiment.
     *
     * Generated from protobuf field <code>bool extract_entity_sentiment = 4;</code>
     */
    private $extract_entity_sentiment = false;
    /**
     * Classify the full document into categories.
     *
     * Generated from protobuf field <code>bool classify_text = 6;</code>
     */
    private $classify_text = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $extract_syntax
     *           Extract syntax information.
     *     @type bool $extract_entities
     *           Extract entities.
     *     @type bool $extract_document_sentiment
     *           Extract document-level sentiment.
     *     @type bool $extract_entity_sentiment
     *           Extract entities and their associated sentiment.
     *     @type bool $classify_text
     *           Classify the full document into categories.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Extract syntax information.
     *
     * Generated from protobuf field <code>bool extract_syntax = 1;</code>
     * @return bool
     */
    public function getExtractSyntax()
    {
        return $this->extract_syntax;
    }

    /**
     * Extract syntax information.
     *
     * Generated from protobuf field <code>bool extract_syntax = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtractSyntax($var)
    {
        GPBUtil::checkBool($var);
        $this->extract_syntax = $var;

        return $this;
    }

    /**
     * Extract entities.
     *
     * Generated from protobuf field <code>bool extract_entities = 2;</code>
     * @return bool
     */
    public function getExtractEntities()
    {
        return $this->extract_entities;
    }

    /**
     * Extract entities.
     *
     * Generated from protobuf field <code>bool extract_entities = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtractEntities($var)
    {
        GPBUtil::checkBool($var);
        $this->extract_entities = $var;

        return $this;
    }

    /**
     * Extract document-level sentiment.
     *
     * Generated from protobuf field <code>bool extract_document_sentiment = 3;</code>
     * @return bool
     */
    public function getExtractDocumentSentiment()
    {
        return $this->extract_document_sentiment;
    }

    /**
     * Extract document-level sentiment.
     *
     * Generated from protobuf field <code>bool extract_document_sentiment = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtractDocumentSentiment($var)
    {
        GPBUtil::checkBool($var);
        $this->extract_document_sentiment = $var;

        return $this;
    }

    /**
     * Extract entities and their associated sentiment.
     *
     * Generated from protobuf field <code>bool extract_entity_sentiment = 4;</code>
     * @return bool
     */
    public function getExtractEntitySentiment()
    {
        return $this->extract_entity_sentiment;
    }

    /**
     * Extract entities and their associated sentiment.
     *
     * Generated from protobuf field <code>bool extract_entity_sentiment = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtractEntitySentiment($var)
    {
        GPBUtil::checkBool($var);
        $this->extract_entity_sentiment = $var;

        return $this;
    }

    /**
     * Classify the full document into categories.
     *
     * Generated from protobuf field <code>bool classify_text = 6;</code>
     * @return bool
     */
    public function getClassifyText()
    {
        return $this->classify_text;
    }

    /**
     * Classify the full document into categories.
     *
     * Generated from protobuf field <code>bool classify_text = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setClassifyText($var)
    {
        GPBUtil::checkBool($var);
        $this->classify_text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Features::class, \Google\Cloud\Language\V1beta2\AnnotateTextRequest_Features::class);

