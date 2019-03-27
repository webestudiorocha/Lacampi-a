<?php
// This file was auto-generated from sdk-root/src/data/workspaces/2015-04-08/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-04-08', 'endpointPrefix' => 'workspaces', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon WorkSpaces', 'serviceId' => 'WorkSpaces', 'signatureVersion' => 'v4', 'targetPrefix' => 'WorkspacesService', 'uid' => 'workspaces-2015-04-08', ], 'operations' => [ 'AssociateIpGroups' => [ 'name' => 'AssociateIpGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateIpGroupsRequest', ], 'output' => [ 'shape' => 'AssociateIpGroupsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'OperationNotSupportedException', ], ], ], 'AuthorizeIpRules' => [ 'name' => 'AuthorizeIpRules', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AuthorizeIpRulesRequest', ], 'output' => [ 'shape' => 'AuthorizeIpRulesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateIpGroup' => [ 'name' => 'CreateIpGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateIpGroupRequest', ], 'output' => [ 'shape' => 'CreateIpGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ResourceCreationFailedException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateTags' => [ 'name' => 'CreateTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateTagsRequest', ], 'output' => [ 'shape' => 'CreateTagsResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceLimitExceededException', ], ], ], 'CreateWorkspaces' => [ 'name' => 'CreateWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateWorkspacesRequest', ], 'output' => [ 'shape' => 'CreateWorkspacesResult', ], 'errors' => [ [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DeleteIpGroup' => [ 'name' => 'DeleteIpGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteIpGroupRequest', ], 'output' => [ 'shape' => 'DeleteIpGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceAssociatedException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteTags' => [ 'name' => 'DeleteTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTagsRequest', ], 'output' => [ 'shape' => 'DeleteTagsResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DeleteWorkspaceImage' => [ 'name' => 'DeleteWorkspaceImage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteWorkspaceImageRequest', ], 'output' => [ 'shape' => 'DeleteWorkspaceImageResult', ], 'errors' => [ [ 'shape' => 'ResourceAssociatedException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeAccount' => [ 'name' => 'DescribeAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAccountRequest', ], 'output' => [ 'shape' => 'DescribeAccountResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeAccountModifications' => [ 'name' => 'DescribeAccountModifications', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAccountModificationsRequest', ], 'output' => [ 'shape' => 'DescribeAccountModificationsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeClientProperties' => [ 'name' => 'DescribeClientProperties', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeClientPropertiesRequest', ], 'output' => [ 'shape' => 'DescribeClientPropertiesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeIpGroups' => [ 'name' => 'DescribeIpGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeIpGroupsRequest', ], 'output' => [ 'shape' => 'DescribeIpGroupsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeTags' => [ 'name' => 'DescribeTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeTagsRequest', ], 'output' => [ 'shape' => 'DescribeTagsResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeWorkspaceBundles' => [ 'name' => 'DescribeWorkspaceBundles', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspaceBundlesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceBundlesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DescribeWorkspaceDirectories' => [ 'name' => 'DescribeWorkspaceDirectories', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspaceDirectoriesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceDirectoriesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DescribeWorkspaceImages' => [ 'name' => 'DescribeWorkspaceImages', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspaceImagesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceImagesResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeWorkspaces' => [ 'name' => 'DescribeWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspacesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspacesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceUnavailableException', ], ], ], 'DescribeWorkspacesConnectionStatus' => [ 'name' => 'DescribeWorkspacesConnectionStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspacesConnectionStatusRequest', ], 'output' => [ 'shape' => 'DescribeWorkspacesConnectionStatusResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DisassociateIpGroups' => [ 'name' => 'DisassociateIpGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateIpGroupsRequest', ], 'output' => [ 'shape' => 'DisassociateIpGroupsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ImportWorkspaceImage' => [ 'name' => 'ImportWorkspaceImage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ImportWorkspaceImageRequest', ], 'output' => [ 'shape' => 'ImportWorkspaceImageResult', ], 'errors' => [ [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'OperationNotSupportedException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListAvailableManagementCidrRanges' => [ 'name' => 'ListAvailableManagementCidrRanges', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAvailableManagementCidrRangesRequest', ], 'output' => [ 'shape' => 'ListAvailableManagementCidrRangesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ModifyAccount' => [ 'name' => 'ModifyAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ModifyAccountRequest', ], 'output' => [ 'shape' => 'ModifyAccountResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'ResourceUnavailableException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ModifyClientProperties' => [ 'name' => 'ModifyClientProperties', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ModifyClientPropertiesRequest', ], 'output' => [ 'shape' => 'ModifyClientPropertiesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ModifyWorkspaceProperties' => [ 'name' => 'ModifyWorkspaceProperties', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ModifyWorkspacePropertiesRequest', ], 'output' => [ 'shape' => 'ModifyWorkspacePropertiesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'OperationInProgressException', ], [ 'shape' => 'UnsupportedWorkspaceConfigurationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceUnavailableException', ], ], ], 'ModifyWorkspaceState' => [ 'name' => 'ModifyWorkspaceState', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ModifyWorkspaceStateRequest', ], 'output' => [ 'shape' => 'ModifyWorkspaceStateResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'RebootWorkspaces' => [ 'name' => 'RebootWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RebootWorkspacesRequest', ], 'output' => [ 'shape' => 'RebootWorkspacesResult', ], ], 'RebuildWorkspaces' => [ 'name' => 'RebuildWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RebuildWorkspacesRequest', ], 'output' => [ 'shape' => 'RebuildWorkspacesResult', ], ], 'RevokeIpRules' => [ 'name' => 'RevokeIpRules', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RevokeIpRulesRequest', ], 'output' => [ 'shape' => 'RevokeIpRulesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'StartWorkspaces' => [ 'name' => 'StartWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartWorkspacesRequest', ], 'output' => [ 'shape' => 'StartWorkspacesResult', ], ], 'StopWorkspaces' => [ 'name' => 'StopWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopWorkspacesRequest', ], 'output' => [ 'shape' => 'StopWorkspacesResult', ], ], 'TerminateWorkspaces' => [ 'name' => 'TerminateWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TerminateWorkspacesRequest', ], 'output' => [ 'shape' => 'TerminateWorkspacesResult', ], ], 'UpdateRulesOfIpGroup' => [ 'name' => 'UpdateRulesOfIpGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateRulesOfIpGroupRequest', ], 'output' => [ 'shape' => 'UpdateRulesOfIpGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'AccessDeniedException', ], ], ], ], 'shapes' => [ 'ARN' => [ 'type' => 'string', 'pattern' => '^arn:aws:[A-Za-z0-9][A-za-z0-9_/.-]{0,62}:[A-za-z0-9_/.-]{0,63}:[A-za-z0-9_/.-]{0,63}:[A-Za-z0-9][A-za-z0-9_/.-]{0,127}$', ], 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'AccountModification' => [ 'type' => 'structure', 'members' => [ 'ModificationState' => [ 'shape' => 'DedicatedTenancyModificationStateEnum', ], 'DedicatedTenancySupport' => [ 'shape' => 'DedicatedTenancySupportResultEnum', ], 'DedicatedTenancyManagementCidrRange' => [ 'shape' => 'DedicatedTenancyManagementCidrRange', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'ErrorCode' => [ 'shape' => 'WorkspaceErrorCode', ], 'ErrorMessage' => [ 'shape' => 'Description', ], ], ], 'AccountModificationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountModification', ], ], 'Alias' => [ 'type' => 'string', ], 'AssociateIpGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'GroupIds', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'GroupIds' => [ 'shape' => 'IpGroupIdList', ], ], ], 'AssociateIpGroupsResult' => [ 'type' => 'structure', 'members' => [], ], 'AuthorizeIpRulesRequest' => [ 'type' => 'structure', 'required' => [ 'GroupId', 'UserRules', ], 'members' => [ 'GroupId' => [ 'shape' => 'IpGroupId', ], 'UserRules' => [ 'shape' => 'IpRuleList', ], ], ], 'AuthorizeIpRulesResult' => [ 'type' => 'structure', 'members' => [], ], 'BooleanObject' => [ 'type' => 'boolean', ], 'BundleId' => [ 'type' => 'string', 'pattern' => '^wsb-[0-9a-z]{8,63}$', ], 'BundleIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BundleId', ], 'max' => 25, 'min' => 1, ], 'BundleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceBundle', ], ], 'BundleOwner' => [ 'type' => 'string', ], 'ClientProperties' => [ 'type' => 'structure', 'members' => [ 'ReconnectEnabled' => [ 'shape' => 'ReconnectEnum', ], ], ], 'ClientPropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClientPropertiesResult', ], ], 'ClientPropertiesResult' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'NonEmptyString', ], 'ClientProperties' => [ 'shape' => 'ClientProperties', ], ], ], 'Compute' => [ 'type' => 'string', 'enum' => [ 'VALUE', 'STANDARD', 'PERFORMANCE', 'POWER', 'GRAPHICS', 'POWERPRO', 'GRAPHICSPRO', ], ], 'ComputeType' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'Compute', ], ], ], 'ComputerName' => [ 'type' => 'string', ], 'ConnectionState' => [ 'type' => 'string', 'enum' => [ 'CONNECTED', 'DISCONNECTED', 'UNKNOWN', ], ], 'CreateIpGroupRequest' => [ 'type' => 'structure', 'required' => [ 'GroupName', ], 'members' => [ 'GroupName' => [ 'shape' => 'IpGroupName', ], 'GroupDesc' => [ 'shape' => 'IpGroupDesc', ], 'UserRules' => [ 'shape' => 'IpRuleList', ], ], ], 'CreateIpGroupResult' => [ 'type' => 'structure', 'members' => [ 'GroupId' => [ 'shape' => 'IpGroupId', ], ], ], 'CreateTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', 'Tags', ], 'members' => [ 'ResourceId' => [ 'shape' => 'NonEmptyString', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateTagsResult' => [ 'type' => 'structure', 'members' => [], ], 'CreateWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'Workspaces', ], 'members' => [ 'Workspaces' => [ 'shape' => 'WorkspaceRequestList', ], ], ], 'CreateWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedCreateWorkspaceRequests', ], 'PendingRequests' => [ 'shape' => 'WorkspaceList', ], ], ], 'DedicatedTenancyCidrRangeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DedicatedTenancyManagementCidrRange', ], ], 'DedicatedTenancyManagementCidrRange' => [ 'type' => 'string', 'pattern' => '(^([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.0\\.0)(\\/(16$))$', ], 'DedicatedTenancyModificationStateEnum' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'COMPLETED', 'FAILED', ], ], 'DedicatedTenancySupportEnum' => [ 'type' => 'string', 'enum' => [ 'ENABLED', ], ]p�