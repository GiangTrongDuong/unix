<?php
// This file was auto-generated from sdk-root/src/data/bedrock-runtime/2023-09-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2023-09-30', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'bedrock-runtime', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Amazon Bedrock Runtime', 'serviceId' => 'Bedrock Runtime', 'signatureVersion' => 'v4', 'signingName' => 'bedrock', 'uid' => 'bedrock-runtime-2023-09-30', ], 'operations' => [ 'ApplyGuardrail' => [ 'name' => 'ApplyGuardrail', 'http' => [ 'method' => 'POST', 'requestUri' => '/guardrail/{guardrailIdentifier}/version/{guardrailVersion}/apply', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ApplyGuardrailRequest', ], 'output' => [ 'shape' => 'ApplyGuardrailResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'Converse' => [ 'name' => 'Converse', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/converse', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ConverseRequest', ], 'output' => [ 'shape' => 'ConverseResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ModelErrorException', ], ], ], 'ConverseStream' => [ 'name' => 'ConverseStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/converse-stream', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ConverseStreamRequest', ], 'output' => [ 'shape' => 'ConverseStreamResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ModelErrorException', ], ], ], 'InvokeModel' => [ 'name' => 'InvokeModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/invoke', 'responseCode' => 200, ], 'input' => [ 'shape' => 'InvokeModelRequest', ], 'output' => [ 'shape' => 'InvokeModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ModelErrorException', ], ], ], 'InvokeModelWithResponseStream' => [ 'name' => 'InvokeModelWithResponseStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/invoke-with-response-stream', 'responseCode' => 200, ], 'input' => [ 'shape' => 'InvokeModelWithResponseStreamRequest', ], 'output' => [ 'shape' => 'InvokeModelWithResponseStreamResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ModelStreamErrorException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ModelErrorException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AnyToolChoice' => [ 'type' => 'structure', 'members' => [], ], 'ApplyGuardrailRequest' => [ 'type' => 'structure', 'required' => [ 'guardrailIdentifier', 'guardrailVersion', 'source', 'content', ], 'members' => [ 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', 'location' => 'uri', 'locationName' => 'guardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', 'location' => 'uri', 'locationName' => 'guardrailVersion', ], 'source' => [ 'shape' => 'GuardrailContentSource', ], 'content' => [ 'shape' => 'GuardrailContentBlockList', ], ], ], 'ApplyGuardrailResponse' => [ 'type' => 'structure', 'required' => [ 'usage', 'action', 'outputs', 'assessments', ], 'members' => [ 'usage' => [ 'shape' => 'GuardrailUsage', ], 'action' => [ 'shape' => 'GuardrailAction', ], 'outputs' => [ 'shape' => 'GuardrailOutputContentList', ], 'assessments' => [ 'shape' => 'GuardrailAssessmentList', ], ], ], 'AutoToolChoice' => [ 'type' => 'structure', 'members' => [], ], 'Body' => [ 'type' => 'blob', 'max' => 25000000, 'min' => 0, 'sensitive' => true, ], 'ContentBlock' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'String', ], 'image' => [ 'shape' => 'ImageBlock', ], 'document' => [ 'shape' => 'DocumentBlock', ], 'toolUse' => [ 'shape' => 'ToolUseBlock', ], 'toolResult' => [ 'shape' => 'ToolResultBlock', ], 'guardContent' => [ 'shape' => 'GuardrailConverseContentBlock', ], ], 'union' => true, ], 'ContentBlockDelta' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'String', ], 'toolUse' => [ 'shape' => 'ToolUseBlockDelta', ], ], 'union' => true, ], 'ContentBlockDeltaEvent' => [ 'type' => 'structure', 'required' => [ 'delta', 'contentBlockIndex', ], 'members' => [ 'delta' => [ 'shape' => 'ContentBlockDelta', ], 'contentBlockIndex' => [ 'shape' => 'NonNegativeInteger', ], ], 'event' => true, ], 'ContentBlockStart' => [ 'type' => 'structure', 'members' => [ 'toolUse' => [ 'shape' => 'ToolUseBlockStart', ], ], 'union' => true, ], 'ContentBlockStartEvent' => [ 'type' => 'structure', 'required' => [ 'start', 'contentBlockIndex', ], 'members' => [ 'start' => [ 'shape' => 'ContentBlockStart', ], 'contentBlockIndex' => [ 'shape' => 'NonNegativeInteger', ], ], 'event' => true, ], 'ContentBlockStopEvent' => [ 'type' => 'structure', 'required' => [ 'contentBlockIndex', ], 'members' => [ 'contentBlockIndex' => [ 'shape' => 'NonNegativeInteger', ], ], 'event' => true, ], 'ContentBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContentBlock', ], ], 'ConversationRole' => [ 'type' => 'string', 'enum' => [ 'user', 'assistant', ], ], 'ConversationalModelId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '(arn:aws(-[^:]+)?:bedrock:[a-z0-9-]{1,20}:(([0-9]{12}:custom-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}/[a-z0-9]{12})|(:foundation-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|([0-9]{12}:provisioned-model/[a-z0-9]{12})))|([a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|(([0-9a-zA-Z][_-]?)+)', ], 'ConverseMetrics' => [ 'type' => 'structure', 'required' => [ 'latencyMs', ], 'members' => [ 'latencyMs' => [ 'shape' => 'Long', ], ], ], 'ConverseOutput' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'Message', ], ], 'union' => true, ], 'ConverseRequest' => [ 'type' => 'structure', 'required' => [ 'modelId', 'messages', ], 'members' => [ 'modelId' => [ 'shape' => 'ConversationalModelId', 'location' => 'uri', 'locationName' => 'modelId', ], 'messages' => [ 'shape' => 'Messages', ], 'system' => [ 'shape' => 'SystemContentBlocks', ], 'inferenceConfig' => [ 'shape' => 'InferenceConfiguration', ], 'toolConfig' => [ 'shape' => 'ToolConfiguration', ], 'guardrailConfig' => [ 'shape' => 'GuardrailConfiguration', ], 'additionalModelRequestFields' => [ 'shape' => 'Document', ], 'additionalModelResponseFieldPaths' => [ 'shape' => 'ConverseRequestAdditionalModelResponseFieldPathsList', ], ], ], 'ConverseRequestAdditionalModelResponseFieldPathsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConverseRequestAdditionalModelResponseFieldPathsListMemberString', ], 'max' => 10, 'min' => 0, ], 'ConverseRequestAdditionalModelResponseFieldPathsListMemberString' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ConverseResponse' => [ 'type' => 'structure', 'required' => [ 'output', 'stopReason', 'usage', 'metrics', ], 'members' => [ 'output' => [ 'shape' => 'ConverseOutput', ], 'stopReason' => [ 'shape' => 'StopReason', ], 'usage' => [ 'shape' => 'TokenUsage', ], 'metrics' => [ 'shape' => 'ConverseMetrics', ], 'additionalModelResponseFields' => [ 'shape' => 'Document', ], 'trace' => [ 'shape' => 'ConverseTrace', ], ], ], 'ConverseStreamMetadataEvent' => [ 'type' => 'structure', 'required' => [ 'usage', 'metrics', ], 'members' => [ 'usage' => [ 'shape' => 'TokenUsage', ], 'metrics' => [ 'shape' => 'ConverseStreamMetrics', ], 'trace' => [ 'shape' => 'ConverseStreamTrace', ], ], 'event' => true, ], 'ConverseStreamMetrics' => [ 'type' => 'structure', 'required' => [ 'latencyMs', ], 'members' => [ 'latencyMs' => [ 'shape' => 'Long', ], ], ], 'ConverseStreamOutput' => [ 'type' => 'structure', 'members' => [ 'messageStart' => [ 'shape' => 'MessageStartEvent', ], 'contentBlockStart' => [ 'shape' => 'ContentBlockStartEvent', ], 'contentBlockDelta' => [ 'shape' => 'ContentBlockDeltaEvent', ], 'contentBlockStop' => [ 'shape' => 'ContentBlockStopEvent', ], 'messageStop' => [ 'shape' => 'MessageStopEvent', ], 'metadata' => [ 'shape' => 'ConverseStreamMetadataEvent', ], 'internalServerException' => [ 'shape' => 'InternalServerException', ], 'modelStreamErrorException' => [ 'shape' => 'ModelStreamErrorException', ], 'validationException' => [ 'shape' => 'ValidationException', ], 'throttlingException' => [ 'shape' => 'ThrottlingException', ], 'serviceUnavailableException' => [ 'shape' => 'ServiceUnavailableException', ], ], 'eventstream' => true, ], 'ConverseStreamRequest' => [ 'type' => 'structure', 'required' => [ 'modelId', 'messages', ], 'members' => [ 'modelId' => [ 'shape' => 'ConversationalModelId', 'location' => 'uri', 'locationName' => 'modelId', ], 'messages' => [ 'shape' => 'Messages', ], 'system' => [ 'shape' => 'SystemContentBlocks', ], 'inferenceConfig' => [ 'shape' => 'InferenceConfiguration', ], 'toolConfig' => [ 'shape' => 'ToolConfiguration', ], 'guardrailConfig' => [ 'shape' => 'GuardrailStreamConfiguration', ], 'additionalModelRequestFields' => [ 'shape' => 'Document', ], 'additionalModelResponseFieldPaths' => [ 'shape' => 'ConverseStreamRequestAdditionalModelResponseFieldPathsList', ], ], ], 'ConverseStreamRequestAdditionalModelResponseFieldPathsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConverseStreamRequestAdditionalModelResponseFieldPathsListMemberString', ], 'max' => 10, 'min' => 0, ], 'ConverseStreamRequestAdditionalModelResponseFieldPathsListMemberString' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ConverseStreamResponse' => [ 'type' => 'structure', 'members' => [ 'stream' => [ 'shape' => 'ConverseStreamOutput', ], ], 'payload' => 'stream', ], 'ConverseStreamTrace' => [ 'type' => 'structure', 'members' => [ 'guardrail' => [ 'shape' => 'GuardrailTraceAssessment', ], ], ], 'ConverseTrace' => [ 'type' => 'structure', 'members' => [ 'guardrail' => [ 'shape' => 'GuardrailTraceAssessment', ], ], ], 'Document' => [ 'type' => 'structure', 'members' => [], 'document' => true, ], 'DocumentBlock' => [ 'type' => 'structure', 'required' => [ 'format', 'name', 'source', ], 'members' => [ 'format' => [ 'shape' => 'DocumentFormat', ], 'name' => [ 'shape' => 'DocumentBlockNameString', ], 'source' => [ 'shape' => 'DocumentSource', ], ], ], 'DocumentBlockNameString' => [ 'type' => 'string', 'max' => 200, 'min' => 1, ], 'DocumentFormat' => [ 'type' => 'string', 'enum' => [ 'pdf', 'csv', 'doc', 'docx', 'xls', 'xlsx', 'html', 'txt', 'md', ], ], 'DocumentSource' => [ 'type' => 'structure', 'members' => [ 'bytes' => [ 'shape' => 'DocumentSourceBytesBlob', ], ], 'union' => true, ], 'DocumentSourceBytesBlob' => [ 'type' => 'blob', 'min' => 1, ], 'GuardrailAction' => [ 'type' => 'string', 'enum' => [ 'NONE', 'GUARDRAIL_INTERVENED', ], ], 'GuardrailAssessment' => [ 'type' => 'structure', 'members' => [ 'topicPolicy' => [ 'shape' => 'GuardrailTopicPolicyAssessment', ], 'contentPolicy' => [ 'shape' => 'GuardrailContentPolicyAssessment', ], 'wordPolicy' => [ 'shape' => 'GuardrailWordPolicyAssessment', ], 'sensitiveInformationPolicy' => [ 'shape' => 'GuardrailSensitiveInformationPolicyAssessment', ], 'contextualGroundingPolicy' => [ 'shape' => 'GuardrailContextualGroundingPolicyAssessment', ], ], ], 'GuardrailAssessmentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailAssessment', ], ], 'GuardrailAssessmentListMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'GuardrailAssessmentList', ], ], 'GuardrailAssessmentMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'GuardrailAssessment', ], ], 'GuardrailConfiguration' => [ 'type' => 'structure', 'required' => [ 'guardrailIdentifier', 'guardrailVersion', ], 'members' => [ 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', ], 'trace' => [ 'shape' => 'GuardrailTrace', ], ], ], 'GuardrailContentBlock' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'GuardrailTextBlock', ], ], 'union' => true, ], 'GuardrailContentBlockList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailContentBlock', ], ], 'GuardrailContentFilter' => [ 'type' => 'structure', 'required' => [ 'type', 'confidence', 'action', ], 'members' => [ 'type' => [ 'shape' => 'GuardrailContentFilterType', ], 'confidence' => [ 'shape' => 'GuardrailContentFilterConfidence', ], 'action' => [ 'shape' => 'GuardrailContentPolicyAction', ], ], ], 'GuardrailContentFilterConfidence' => [ 'type' => 'string', 'enum' => [ 'NONE', 'LOW', 'MEDIUM', 'HIGH', ], ], 'GuardrailContentFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailContentFilter', ], ], 'GuardrailContentFilterType' => [ 'type' => 'string', 'enum' => [ 'INSULTS', 'HATE', 'SEXUAL', 'VIOLENCE', 'MISCONDUCT', 'PROMPT_ATTACK', ], ], 'GuardrailContentPolicyAction' => [ 'type' => 'string', 'enum' => [ 'BLOCKED', ], ], 'GuardrailContentPolicyAssessment' => [ 'type' => 'structure', 'required' => [ 'filters', ], 'members' => [ 'filters' => [ 'shape' => 'GuardrailContentFilterList', ], ], ], 'GuardrailContentPolicyUnitsProcessed' => [ 'type' => 'integer', 'box' => true, ], 'GuardrailContentQualifier' => [ 'type' => 'string', 'enum' => [ 'grounding_source', 'query', 'guard_content', ], ], 'GuardrailContentQualifierList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailContentQualifier', ], ], 'GuardrailContentSource' => [ 'type' => 'string', 'enum' => [ 'INPUT', 'OUTPUT', ], ], 'GuardrailContextualGroundingFilter' => [ 'type' => 'structure', 'required' => [ 'type', 'threshold', 'score', 'action', ], 'members' => [ 'type' => [ 'shape' => 'GuardrailContextualGroundingFilterType', ], 'threshold' => [ 'shape' => 'GuardrailContextualGroundingFilterThresholdDouble', ], 'score' => [ 'shape' => 'GuardrailContextualGroundingFilterScoreDouble', ], 'action' => [ 'shape' => 'GuardrailContextualGroundingPolicyAction', ], ], ], 'GuardrailContextualGroundingFilterScoreDouble' => [ 'type' => 'double', 'box' => true, 'max' => 1, 'min' => 0, ], 'GuardrailContextualGroundingFilterThresholdDouble' => [ 'type' => 'double', 'box' => true, 'max' => 1, 'min' => 0, ], 'GuardrailContextualGroundingFilterType' => [ 'type' => 'string', 'enum' => [ 'GROUNDING', 'RELEVANCE', ], ], 'GuardrailContextualGroundingFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailContextualGroundingFilter', ], ], 'GuardrailContextualGroundingPolicyAction' => [ 'type' => 'string', 'enum' => [ 'BLOCKED', 'NONE', ], ], 'GuardrailContextualGroundingPolicyAssessment' => [ 'type' => 'structure', 'members' => [ 'filters' => [ 'shape' => 'GuardrailContextualGroundingFilters', ], ], ], 'GuardrailContextualGroundingPolicyUnitsProcessed' => [ 'type' => 'integer', 'box' => true, ], 'GuardrailConverseContentBlock' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'GuardrailConverseTextBlock', ], ], 'union' => true, ], 'GuardrailConverseContentQualifier' => [ 'type' => 'string', 'enum' => [ 'grounding_source', 'query', 'guard_content', ], ], 'GuardrailConverseContentQualifierList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailConverseContentQualifier', ], ], 'GuardrailConverseTextBlock' => [ 'type' => 'structure', 'required' => [ 'text', ], 'members' => [ 'text' => [ 'shape' => 'String', ], 'qualifiers' => [ 'shape' => 'GuardrailConverseContentQualifierList', ], ], ], 'GuardrailCustomWord' => [ 'type' => 'structure', 'required' => [ 'match', 'action', ], 'members' => [ 'match' => [ 'shape' => 'String', ], 'action' => [ 'shape' => 'GuardrailWordPolicyAction', ], ], ], 'GuardrailCustomWordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailCustomWord', ], ], 'GuardrailIdentifier' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, 'pattern' => '(([a-z0-9]+)|(arn:aws(-[^:]+)?:bedrock:[a-z0-9-]{1,20}:[0-9]{12}:guardrail/[a-z0-9]+))', ], 'GuardrailManagedWord' => [ 'type' => 'structure', 'required' => [ 'match', 'type', 'action', ], 'members' => [ 'match' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'GuardrailManagedWordType', ], 'action' => [ 'shape' => 'GuardrailWordPolicyAction', ], ], ], 'GuardrailManagedWordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailManagedWord', ], ], 'GuardrailManagedWordType' => [ 'type' => 'string', 'enum' => [ 'PROFANITY', ], ], 'GuardrailOutputContent' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'GuardrailOutputText', ], ], ], 'GuardrailOutputContentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailOutputContent', ], ], 'GuardrailOutputText' => [ 'type' => 'string', ], 'GuardrailPiiEntityFilter' => [ 'type' => 'structure', 'required' => [ 'match', 'type', 'action', ], 'members' => [ 'match' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'GuardrailPiiEntityType', ], 'action' => [ 'shape' => 'GuardrailSensitiveInformationPolicyAction', ], ], ], 'GuardrailPiiEntityFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailPiiEntityFilter', ], ], 'GuardrailPiiEntityType' => [ 'type' => 'string', 'enum' => [ 'ADDRESS', 'AGE', 'AWS_ACCESS_KEY', 'AWS_SECRET_KEY', 'CA_HEALTH_NUMBER', 'CA_SOCIAL_INSURANCE_NUMBER', 'CREDIT_DEBIT_CARD_CVV', 'CREDIT_DEBIT_CARD_EXPIRY', 'CREDIT_DEBIT_CARD_NUMBER', 'DRIVER_ID', 'EMAIL', 'INTERNATIONAL_BANK_ACCOUNT_NUMBER', 'IP_ADDRESS', 'LICENSE_PLATE', 'MAC_ADDRESS', 'NAME', 'PASSWORD', 'PHONE', 'PIN', 'SWIFT_CODE', 'UK_NATIONAL_HEALTH_SERVICE_NUMBER', 'UK_NATIONAL_INSURANCE_NUMBER', 'UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER', 'URL', 'USERNAME', 'US_BANK_ACCOUNT_NUMBER', 'US_BANK_ROUTING_NUMBER', 'US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER', 'US_PASSPORT_NUMBER', 'US_SOCIAL_SECURITY_NUMBER', 'VEHICLE_IDENTIFICATION_NUMBER', ], ], 'GuardrailRegexFilter' => [ 'type' => 'structure', 'required' => [ 'action', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'match' => [ 'shape' => 'String', ], 'regex' => [ 'shape' => 'String', ], 'action' => [ 'shape' => 'GuardrailSensitiveInformationPolicyAction', ], ], ], 'GuardrailRegexFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailRegexFilter', ], ], 'GuardrailSensitiveInformationPolicyAction' => [ 'type' => 'string', 'enum' => [ 'ANONYMIZED', 'BLOCKED', ], ], 'GuardrailSensitiveInformationPolicyAssessment' => [ 'type' => 'structure', 'required' => [ 'piiEntities', 'regexes', ], 'members' => [ 'piiEntities' => [ 'shape' => 'GuardrailPiiEntityFilterList', ], 'regexes' => [ 'shape' => 'GuardrailRegexFilterList', ], ], ], 'GuardrailSensitiveInformationPolicyFreeUnitsProcessed' => [ 'type' => 'integer', 'box' => true, ], 'GuardrailSensitiveInformationPolicyUnitsProcessed' => [ 'type' => 'integer', 'box' => true, ], 'GuardrailStreamConfiguration' => [ 'type' => 'structure', 'required' => [ 'guardrailIdentifier', 'guardrailVersion', ], 'members' => [ 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', ], 'trace' => [ 'shape' => 'GuardrailTrace', ], 'streamProcessingMode' => [ 'shape' => 'GuardrailStreamProcessingMode', ], ], ], 'GuardrailStreamProcessingMode' => [ 'type' => 'string', 'enum' => [ 'sync', 'async', ], ], 'GuardrailTextBlock' => [ 'type' => 'structure', 'required' => [ 'text', ], 'members' => [ 'text' => [ 'shape' => 'String', ], 'qualifiers' => [ 'shape' => 'GuardrailContentQualifierList', ], ], ], 'GuardrailTopic' => [ 'type' => 'structure', 'required' => [ 'name', 'type', 'action', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'GuardrailTopicType', ], 'action' => [ 'shape' => 'GuardrailTopicPolicyAction', ], ], ], 'GuardrailTopicList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailTopic', ], ], 'GuardrailTopicPolicyAction' => [ 'type' => 'string', 'enum' => [ 'BLOCKED', ], ], 'GuardrailTopicPolicyAssessment' => [ 'type' => 'structure', 'required' => [ 'topics', ], 'members' => [ 'topics' => [ 'shape' => 'GuardrailTopicList', ], ], ], 'GuardrailTopicPolicyUnitsProcessed' => [ 'type' => 'integer', 'box' => true, ], 'GuardrailTopicType' => [ 'type' => 'string', 'enum' => [ 'DENY', ], ], 'GuardrailTrace' => [ 'type' => 'string', 'enum' => [ 'enabled', 'disabled', ], ], 'GuardrailTraceAssessment' => [ 'type' => 'structure', 'members' => [ 'modelOutput' => [ 'shape' => 'ModelOutputs', ], 'inputAssessment' => [ 'shape' => 'GuardrailAssessmentMap', ], 'outputAssessments' => [ 'shape' => 'GuardrailAssessmentListMap', ], ], ], 'GuardrailUsage' => [ 'type' => 'structure', 'required' => [ 'topicPolicyUnits', 'contentPolicyUnits', 'wordPolicyUnits', 'sensitiveInformationPolicyUnits', 'sensitiveInformationPolicyFreeUnits', 'contextualGroundingPolicyUnits', ], 'members' => [ 'topicPolicyUnits' => [ 'shape' => 'GuardrailTopicPolicyUnitsProcessed', ], 'contentPolicyUnits' => [ 'shape' => 'GuardrailContentPolicyUnitsProcessed', ], 'wordPolicyUnits' => [ 'shape' => 'GuardrailWordPolicyUnitsProcessed', ], 'sensitiveInformationPolicyUnits' => [ 'shape' => 'GuardrailSensitiveInformationPolicyUnitsProcessed', ], 'sensitiveInformationPolicyFreeUnits' => [ 'shape' => 'GuardrailSensitiveInformationPolicyFreeUnitsProcessed', ], 'contextualGroundingPolicyUnits' => [ 'shape' => 'GuardrailContextualGroundingPolicyUnitsProcessed', ], ], ], 'GuardrailVersion' => [ 'type' => 'string', 'pattern' => '(([1-9][0-9]{0,7})|(DRAFT))', ], 'GuardrailWordPolicyAction' => [ 'type' => 'string', 'enum' => [ 'BLOCKED', ], ], 'GuardrailWordPolicyAssessment' => [ 'type' => 'structure', 'required' => [ 'customWords', 'managedWordLists', ], 'members' => [ 'customWords' => [ 'shape' => 'GuardrailCustomWordList', ], 'managedWordLists' => [ 'shape' => 'GuardrailManagedWordList', ], ], ], 'GuardrailWordPolicyUnitsProcessed' => [ 'type' => 'integer', 'box' => true, ], 'ImageBlock' => [ 'type' => 'structure', 'required' => [ 'format', 'source', ], 'members' => [ 'format' => [ 'shape' => 'ImageFormat', ], 'source' => [ 'shape' => 'ImageSource', ], ], ], 'ImageFormat' => [ 'type' => 'string', 'enum' => [ 'png', 'jpeg', 'gif', 'webp', ], ], 'ImageSource' => [ 'type' => 'structure', 'members' => [ 'bytes' => [ 'shape' => 'ImageSourceBytesBlob', ], ], 'union' => true, ], 'ImageSourceBytesBlob' => [ 'type' => 'blob', 'min' => 1, ], 'InferenceConfiguration' => [ 'type' => 'structure', 'members' => [ 'maxTokens' => [ 'shape' => 'InferenceConfigurationMaxTokensInteger', ], 'temperature' => [ 'shape' => 'InferenceConfigurationTemperatureFloat', ], 'topP' => [ 'shape' => 'InferenceConfigurationTopPFloat', ], 'stopSequences' => [ 'shape' => 'InferenceConfigurationStopSequencesList', ], ], ], 'InferenceConfigurationMaxTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 1, ], 'InferenceConfigurationStopSequencesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 4, 'min' => 0, ], 'InferenceConfigurationTemperatureFloat' => [ 'type' => 'float', 'box' => true, 'max' => 1, 'min' => 0, ], 'InferenceConfigurationTopPFloat' => [ 'type' => 'float', 'box' => true, 'max' => 1, 'min' => 0, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvokeModelIdentifier' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '(arn:aws(-[^:]+)?:bedrock:[a-z0-9-]{1,20}:(([0-9]{12}:custom-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}/[a-z0-9]{12})|(:foundation-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|([0-9]{12}:provisioned-model/[a-z0-9]{12})))|([a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|(([0-9a-zA-Z][_-]?)+)', ], 'InvokeModelRequest' => [ 'type' => 'structure', 'required' => [ 'body', 'modelId', ], 'members' => [ 'body' => [ 'shape' => 'Body', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Content-Type', ], 'accept' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Accept', ], 'modelId' => [ 'shape' => 'InvokeModelIdentifier', 'location' => 'uri', 'locationName' => 'modelId', ], 'trace' => [ 'shape' => 'Trace', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Trace', ], 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailVersion', ], ], 'payload' => 'body', ], 'InvokeModelResponse' => [ 'type' => 'structure', 'required' => [ 'body', 'contentType', ], 'members' => [ 'body' => [ 'shape' => 'Body', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Content-Type', ], ], 'payload' => 'body', ], 'InvokeModelWithResponseStreamRequest' => [ 'type' => 'structure', 'required' => [ 'body', 'modelId', ], 'members' => [ 'body' => [ 'shape' => 'Body', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Content-Type', ], 'accept' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Accept', ], 'modelId' => [ 'shape' => 'InvokeModelIdentifier', 'location' => 'uri', 'locationName' => 'modelId', ], 'trace' => [ 'shape' => 'Trace', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Trace', ], 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailVersion', ], ], 'payload' => 'body', ], 'InvokeModelWithResponseStreamResponse' => [ 'type' => 'structure', 'required' => [ 'body', 'contentType', ], 'members' => [ 'body' => [ 'shape' => 'ResponseStream', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Content-Type', ], ], 'payload' => 'body', ], 'Long' => [ 'type' => 'long', 'box' => true, ], 'Message' => [ 'type' => 'structure', 'required' => [ 'role', 'content', ], 'members' => [ 'role' => [ 'shape' => 'ConversationRole', ], 'content' => [ 'shape' => 'ContentBlocks', ], ], ], 'MessageStartEvent' => [ 'type' => 'structure', 'required' => [ 'role', ], 'members' => [ 'role' => [ 'shape' => 'ConversationRole', ], ], 'event' => true, ], 'MessageStopEvent' => [ 'type' => 'structure', 'required' => [ 'stopReason', ], 'members' => [ 'stopReason' => [ 'shape' => 'StopReason', ], 'additionalModelResponseFields' => [ 'shape' => 'Document', ], ], 'event' => true, ], 'Messages' => [ 'type' => 'list', 'member' => [ 'shape' => 'Message', ], ], 'MimeType' => [ 'type' => 'string', ], 'ModelErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], 'originalStatusCode' => [ 'shape' => 'StatusCode', ], 'resourceName' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 424, 'senderFault' => true, ], 'exception' => true, ], 'ModelNotReadyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'ModelOutputs' => [ 'type' => 'list', 'member' => [ 'shape' => 'GuardrailOutputText', ], ], 'ModelStreamErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], 'originalStatusCode' => [ 'shape' => 'StatusCode', ], 'originalMessage' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 424, 'senderFault' => true, ], 'exception' => true, ], 'ModelTimeoutException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 408, 'senderFault' => true, ], 'exception' => true, ], 'NonBlankString' => [ 'type' => 'string', 'pattern' => '[\\s\\S]*', ], 'NonEmptyString' => [ 'type' => 'string', 'min' => 1, ], 'NonNegativeInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'PartBody' => [ 'type' => 'blob', 'max' => 1000000, 'min' => 0, 'sensitive' => true, ], 'PayloadPart' => [ 'type' => 'structure', 'members' => [ 'bytes' => [ 'shape' => 'PartBody', ], ], 'event' => true, 'sensitive' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResponseStream' => [ 'type' => 'structure', 'members' => [ 'chunk' => [ 'shape' => 'PayloadPart', ], 'internalServerException' => [ 'shape' => 'InternalServerException', ], 'modelStreamErrorException' => [ 'shape' => 'ModelStreamErrorException', ], 'validationException' => [ 'shape' => 'ValidationException', ], 'throttlingException' => [ 'shape' => 'ThrottlingException', ], 'modelTimeoutException' => [ 'shape' => 'ModelTimeoutException', ], 'serviceUnavailableException' => [ 'shape' => 'ServiceUnavailableException', ], ], 'eventstream' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, 'fault' => true, ], 'SpecificToolChoice' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'ToolName', ], ], ], 'StatusCode' => [ 'type' => 'integer', 'box' => true, 'max' => 599, 'min' => 100, ], 'StopReason' => [ 'type' => 'string', 'enum' => [ 'end_turn', 'tool_use', 'max_tokens', 'stop_sequence', 'guardrail_intervened', 'content_filtered', ], ], 'String' => [ 'type' => 'string', ], 'SystemContentBlock' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'NonEmptyString', ], 'guardContent' => [ 'shape' => 'GuardrailConverseContentBlock', ], ], 'union' => true, ], 'SystemContentBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SystemContentBlock', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'TokenUsage' => [ 'type' => 'structure', 'required' => [ 'inputTokens', 'outputTokens', 'totalTokens', ], 'members' => [ 'inputTokens' => [ 'shape' => 'TokenUsageInputTokensInteger', ], 'outputTokens' => [ 'shape' => 'TokenUsageOutputTokensInteger', ], 'totalTokens' => [ 'shape' => 'TokenUsageTotalTokensInteger', ], ], ], 'TokenUsageInputTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'TokenUsageOutputTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'TokenUsageTotalTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'Tool' => [ 'type' => 'structure', 'members' => [ 'toolSpec' => [ 'shape' => 'ToolSpecification', ], ], 'union' => true, ], 'ToolChoice' => [ 'type' => 'structure', 'members' => [ 'auto' => [ 'shape' => 'AutoToolChoice', ], 'any' => [ 'shape' => 'AnyToolChoice', ], 'tool' => [ 'shape' => 'SpecificToolChoice', ], ], 'union' => true, ], 'ToolConfiguration' => [ 'type' => 'structure', 'required' => [ 'tools', ], 'members' => [ 'tools' => [ 'shape' => 'ToolConfigurationToolsList', ], 'toolChoice' => [ 'shape' => 'ToolChoice', ], ], ], 'ToolConfigurationToolsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tool', ], 'min' => 1, ], 'ToolInputSchema' => [ 'type' => 'structure', 'members' => [ 'json' => [ 'shape' => 'Document', ], ], 'union' => true, ], 'ToolName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z][a-zA-Z0-9_]*', ], 'ToolResultBlock' => [ 'type' => 'structure', 'required' => [ 'toolUseId', 'content', ], 'members' => [ 'toolUseId' => [ 'shape' => 'ToolUseId', ], 'content' => [ 'shape' => 'ToolResultContentBlocks', ], 'status' => [ 'shape' => 'ToolResultStatus', ], ], ], 'ToolResultContentBlock' => [ 'type' => 'structure', 'members' => [ 'json' => [ 'shape' => 'Document', ], 'text' => [ 'shape' => 'String', ], 'image' => [ 'shape' => 'ImageBlock', ], 'document' => [ 'shape' => 'DocumentBlock', ], ], 'union' => true, ], 'ToolResultContentBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ToolResultContentBlock', ], ], 'ToolResultStatus' => [ 'type' => 'string', 'enum' => [ 'success', 'error', ], ], 'ToolSpecification' => [ 'type' => 'structure', 'required' => [ 'name', 'inputSchema', ], 'members' => [ 'name' => [ 'shape' => 'ToolName', ], 'description' => [ 'shape' => 'NonEmptyString', ], 'inputSchema' => [ 'shape' => 'ToolInputSchema', ], ], ], 'ToolUseBlock' => [ 'type' => 'structure', 'required' => [ 'toolUseId', 'name', 'input', ], 'members' => [ 'toolUseId' => [ 'shape' => 'ToolUseId', ], 'name' => [ 'shape' => 'ToolName', ], 'input' => [ 'shape' => 'Document', ], ], ], 'ToolUseBlockDelta' => [ 'type' => 'structure', 'required' => [ 'input', ], 'members' => [ 'input' => [ 'shape' => 'String', ], ], ], 'ToolUseBlockStart' => [ 'type' => 'structure', 'required' => [ 'toolUseId', 'name', ], 'members' => [ 'toolUseId' => [ 'shape' => 'ToolUseId', ], 'name' => [ 'shape' => 'ToolName', ], ], ], 'ToolUseId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9_-]+', ], 'Trace' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
