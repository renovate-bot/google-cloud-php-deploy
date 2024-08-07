<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START clouddeploy_v1_generated_CloudDeploy_UpdateDeployPolicy_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Deploy\V1\Client\CloudDeployClient;
use Google\Cloud\Deploy\V1\DeployPolicy;
use Google\Cloud\Deploy\V1\DeployPolicyResourceSelector;
use Google\Cloud\Deploy\V1\PolicyRule;
use Google\Cloud\Deploy\V1\UpdateDeployPolicyRequest;
use Google\Protobuf\FieldMask;
use Google\Rpc\Status;

/**
 * Updates the parameters of a single DeployPolicy.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_deploy_policy_sample(): void
{
    // Create a client.
    $cloudDeployClient = new CloudDeployClient();

    // Prepare the request message.
    $updateMask = new FieldMask();
    $deployPolicySelectors = [new DeployPolicyResourceSelector()];
    $deployPolicyRules = [new PolicyRule()];
    $deployPolicy = (new DeployPolicy())
        ->setSelectors($deployPolicySelectors)
        ->setRules($deployPolicyRules);
    $request = (new UpdateDeployPolicyRequest())
        ->setUpdateMask($updateMask)
        ->setDeployPolicy($deployPolicy);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $cloudDeployClient->updateDeployPolicy($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var DeployPolicy $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END clouddeploy_v1_generated_CloudDeploy_UpdateDeployPolicy_sync]
