<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->GET('/activiti-rest/service/management/tables/{tableName}', function(Application $app, Request $request, $tableName) {
            return new Response('How about implementing getTable as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/tables/{tableName}/data', function(Application $app, Request $request, $tableName) {
            $start = $request->get('start');
            $size = $request->get('size');
            $order_ascending_column = $request->get('order_ascending_column');
            $order_descending_column = $request->get('order_descending_column');
            return new Response('How about implementing getTableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/tables/{tableName}/columns', function(Application $app, Request $request, $tableName) {
            return new Response('How about implementing getTableMetaData as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/tables', function(Application $app, Request $request) {
            return new Response('How about implementing getTables as a GET method ?');
            });


$app->DELETE('/activiti-rest/service/repository/deployments/{deploymentId}', function(Application $app, Request $request, $deploymentId) {
            $cascade = $request->get('cascade');
            return new Response('How about implementing deleteDeployment as a DELETE method ?');
            });


$app->GET('/activiti-rest/service/repository/deployments/{deploymentId}', function(Application $app, Request $request, $deploymentId) {
            return new Response('How about implementing getDeployment as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/deployments/{deploymentId}/resources/**', function(Application $app, Request $request, $deploymentId) {
            return new Response('How about implementing getDeploymentResource as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/deployments/{deploymentId}/resourcedata/{resourceId}', function(Application $app, Request $request, $deploymentId, $resourceId) {
            return new Response('How about implementing getDeploymentResourceData as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/deployments/{deploymentId}/resources', function(Application $app, Request $request, $deploymentId) {
            return new Response('How about implementing getDeploymentResources as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/deployments', function(Application $app, Request $request) {
            $name = $request->get('name');
            $name_like = $request->get('name_like');
            $category = $request->get('category');
            $category_not_equals = $request->get('category_not_equals');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $sort = $request->get('sort');
            return new Response('How about implementing getDeployments as a GET method ?');
            });


$app->POST('/activiti-rest/service/repository/deployments', function(Application $app, Request $request) {
            $tenant_id = $request->get('tenant_id');
            return new Response('How about implementing uploadDeployment as a POST method ?');
            });


$app->GET('/activiti-rest/service/management/engine', function(Application $app, Request $request) {
            return new Response('How about implementing getEngineInfo as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/properties', function(Application $app, Request $request) {
            return new Response('How about implementing getProperties as a GET method ?');
            });


$app->POST('/activiti-rest/service/runtime/executions/{executionId}/variables', function(Application $app, Request $request, $executionId) {
            return new Response('How about implementing createExecutionVariable as a POST method ?');
            });


$app->PUT('/activiti-rest/service/runtime/executions/{executionId}/variables', function(Application $app, Request $request, $executionId) {
            return new Response('How about implementing createOrUpdateExecutionVariable as a PUT method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/executions/{executionId}/variables', function(Application $app, Request $request, $executionId) {
            return new Response('How about implementing deleteLocalVariables as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/executions/{executionId}/variables/{variableName}', function(Application $app, Request $request, $executionId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing deletedExecutionVariable as a DELETE method ?');
            });


$app->PUT('/activiti-rest/service/runtime/executions', function(Application $app, Request $request) {
            return new Response('How about implementing executeExecutionAction as a PUT method ?');
            });


$app->GET('/activiti-rest/service/runtime/executions/{executionId}/activities', function(Application $app, Request $request, $executionId) {
            return new Response('How about implementing getActiveActivities as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/executions/{executionId}', function(Application $app, Request $request, $executionId) {
            return new Response('How about implementing getExecution as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/executions/{executionId}/variables/{variableName}', function(Application $app, Request $request, $executionId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing getExecutionVariable as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/executions/{executionId}/variables/{variableName}/data', function(Application $app, Request $request, $executionId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing getExecutionVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/executions', function(Application $app, Request $request) {
            $id = $request->get('id');
            $activity_id = $request->get('activity_id');
            $process_definition_key = $request->get('process_definition_key');
            $process_definition_id = $request->get('process_definition_id');
            $process_instance_id = $request->get('process_instance_id');
            $message_event_subscription_name = $request->get('message_event_subscription_name');
            $signal_event_subscription_name = $request->get('signal_event_subscription_name');
            $parent_id = $request->get('parent_id');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $sort = $request->get('sort');
            return new Response('How about implementing getExecutions as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/executions/{executionId}/variables', function(Application $app, Request $request, $executionId) {
            $scope = $request->get('scope');
            return new Response('How about implementing listExecutionVariables as a GET method ?');
            });


$app->PUT('/activiti-rest/service/runtime/executions/{executionId}', function(Application $app, Request $request, $executionId) {
            return new Response('How about implementing performExecutionAction as a PUT method ?');
            });


$app->POST('/activiti-rest/service/query/executions', function(Application $app, Request $request) {
            return new Response('How about implementing queryExecutions as a POST method ?');
            });


$app->PUT('/activiti-rest/service/runtime/executions/{executionId}/variables/{variableName}', function(Application $app, Request $request, $executionId, $variableName) {
            return new Response('How about implementing updateExecutionVariable as a PUT method ?');
            });


$app->GET('/activiti-rest/service/form/form-data', function(Application $app, Request $request) {
            $task_id = $request->get('task_id');
            $process_definition_id = $request->get('process_definition_id');
            return new Response('How about implementing getFormData as a GET method ?');
            });


$app->POST('/activiti-rest/service/form/form-data', function(Application $app, Request $request) {
            return new Response('How about implementing submitForm as a POST method ?');
            });


$app->POST('/activiti-rest/service/identity/groups', function(Application $app, Request $request) {
            return new Response('How about implementing createGroup as a POST method ?');
            });


$app->POST('/activiti-rest/service/identity/groups/{groupId}/members', function(Application $app, Request $request, $groupId) {
            return new Response('How about implementing createMembership as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/identity/groups/{groupId}', function(Application $app, Request $request, $groupId) {
            return new Response('How about implementing deleteGroup as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/identity/groups/{groupId}/members/{userId}', function(Application $app, Request $request, $groupId, $userId) {
            return new Response('How about implementing deleteMembership as a DELETE method ?');
            });


$app->GET('/activiti-rest/service/identity/groups/{groupId}', function(Application $app, Request $request, $groupId) {
            return new Response('How about implementing getGroup as a GET method ?');
            });


$app->GET('/activiti-rest/service/identity/groups', function(Application $app, Request $request) {
            $id = $request->get('id');
            $name = $request->get('name');
            $type = $request->get('type');
            $name_like = $request->get('name_like');
            $member = $request->get('member');
            $potential_starter = $request->get('potential_starter');
            $sort = $request->get('sort');
            return new Response('How about implementing getGroups as a GET method ?');
            });


$app->PUT('/activiti-rest/service/identity/groups/{groupId}', function(Application $app, Request $request, $groupId) {
            return new Response('How about implementing updateGroup as a PUT method ?');
            });


$app->POST('/activiti-rest/service/history/historic-process-instances/{processInstanceId}/comments', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing createComment as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/history/historic-process-instances/{processInstanceId}/comments/{commentId}', function(Application $app, Request $request, $processInstanceId, $commentId) {
            return new Response('How about implementing deleteComment as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/history/historic-process-instances/{processInstanceId}', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing deleteHitoricProcessInstance as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/history/historic-task-instances/{taskId}', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing deleteTaskInstance as a DELETE method ?');
            });


$app->GET('/activiti-rest/service/history/historic-process-instances/{processInstanceId}/comments/{commentId}', function(Application $app, Request $request, $processInstanceId, $commentId) {
            return new Response('How about implementing getComment as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-process-instances/{processInstanceId}/comments', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing getComments as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-activity-instances', function(Application $app, Request $request) {
            $activity_id = $request->get('activity_id');
            $activity_instance_id = $request->get('activity_instance_id');
            $activity_name = $request->get('activity_name');
            $activity_type = $request->get('activity_type');
            $execution_id = $request->get('execution_id');
            $finished = $request->get('finished');
            $task_assignee = $request->get('task_assignee');
            $process_instance_id = $request->get('process_instance_id');
            $process_definition_id = $request->get('process_definition_id');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            return new Response('How about implementing getHistoricActivityInstances as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-detail', function(Application $app, Request $request) {
            $id = $request->get('id');
            $process_instance_id = $request->get('process_instance_id');
            $execution_id = $request->get('execution_id');
            $activity_instance_id = $request->get('activity_instance_id');
            $task_id = $request->get('task_id');
            $select_only_form_properties = $request->get('select_only_form_properties');
            $select_only_variable_updates = $request->get('select_only_variable_updates');
            return new Response('How about implementing getHistoricDetailInfo as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-detail/{detailId}/data', function(Application $app, Request $request, $detailId) {
            return new Response('How about implementing getHistoricDetailVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-variable-instances/{varInstanceId}/data', function(Application $app, Request $request, $varInstanceId) {
            return new Response('How about implementing getHistoricInstanceVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-process-instances/{processInstanceId}', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing getHistoricProcessInstance as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-process-instances/{processInstanceId}/variables/{variableName}/data', function(Application $app, Request $request, $processInstanceId, $variableName) {
            return new Response('How about implementing getHistoricProcessInstanceVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-task-instances/{taskId}/variables/{variableName}/data', function(Application $app, Request $request, $taskId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing getHistoricTaskInstanceVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-variable-instances', function(Application $app, Request $request) {
            $process_instance_id = $request->get('process_instance_id');
            $task_id = $request->get('task_id');
            $exclude_task_variables = $request->get('exclude_task_variables');
            $variable_name = $request->get('variable_name');
            $variable_name_like = $request->get('variable_name_like');
            return new Response('How about implementing getHistoricVariableInstances as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-process-instances/{processInstanceId}/identitylinks', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing getProcessIdentityLinks as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-task-instances/{taskId}/identitylinks', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing getTaskIdentityLinks as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-task-instances/{taskId}', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing getTaskInstance as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-process-instances', function(Application $app, Request $request) {
            $process_instance_id = $request->get('process_instance_id');
            $process_definition_key = $request->get('process_definition_key');
            $process_definition_id = $request->get('process_definition_id');
            $business_key = $request->get('business_key');
            $involved_user = $request->get('involved_user');
            $finished = $request->get('finished');
            $super_process_instance_id = $request->get('super_process_instance_id');
            $exclude_subprocesses = $request->get('exclude_subprocesses');
            $finished_after = $request->get('finished_after');
            $finished_before = $request->get('finished_before');
            $started_after = $request->get('started_after');
            $started_before = $request->get('started_before');
            $started_by = $request->get('started_by');
            $include_process_variables = $request->get('include_process_variables');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            return new Response('How about implementing listHistoricProcessInstances as a GET method ?');
            });


$app->GET('/activiti-rest/service/history/historic-task-instances', function(Application $app, Request $request) {
            $task_id = $request->get('task_id');
            $process_instance_id = $request->get('process_instance_id');
            $process_definition_key = $request->get('process_definition_key');
            $process_definition_key_like = $request->get('process_definition_key_like');
            $process_definition_id = $request->get('process_definition_id');
            $process_definition_name = $request->get('process_definition_name');
            $process_definition_name_like = $request->get('process_definition_name_like');
            $process_business_key = $request->get('process_business_key');
            $process_business_key_like = $request->get('process_business_key_like');
            $execution_id = $request->get('execution_id');
            $task_definition_key = $request->get('task_definition_key');
            $task_name = $request->get('task_name');
            $task_name_like = $request->get('task_name_like');
            $task_description = $request->get('task_description');
            $task_description_like = $request->get('task_description_like');
            $task_category = $request->get('task_category');
            $task_delete_reason = $request->get('task_delete_reason');
            $task_delete_reason_like = $request->get('task_delete_reason_like');
            $task_assignee = $request->get('task_assignee');
            $task_assignee_like = $request->get('task_assignee_like');
            $task_owner = $request->get('task_owner');
            $task_owner_like = $request->get('task_owner_like');
            $task_involved_user = $request->get('task_involved_user');
            $task_priority = $request->get('task_priority');
            $finished = $request->get('finished');
            $process_finished = $request->get('process_finished');
            $parent_task_id = $request->get('parent_task_id');
            $due_date = $request->get('due_date');
            $due_date_after = $request->get('due_date_after');
            $due_date_before = $request->get('due_date_before');
            $without_due_date = $request->get('without_due_date');
            $task_completed_on = $request->get('task_completed_on');
            $task_completed_after = $request->get('task_completed_after');
            $task_completed_before = $request->get('task_completed_before');
            $task_created_on = $request->get('task_created_on');
            $task_created_before = $request->get('task_created_before');
            $task_created_after = $request->get('task_created_after');
            $include_task_local_variables = $request->get('include_task_local_variables');
            $include_process_variables = $request->get('include_process_variables');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            return new Response('How about implementing listHistoricTaskInstances as a GET method ?');
            });


$app->POST('/activiti-rest/service/query/historic-activity-instances', function(Application $app, Request $request) {
            return new Response('How about implementing queryActivityInstances as a POST method ?');
            });


$app->POST('/activiti-rest/service/query/historic-detail', function(Application $app, Request $request) {
            return new Response('How about implementing queryHistoricDetail as a POST method ?');
            });


$app->POST('/activiti-rest/service/query/historic-process-instances', function(Application $app, Request $request) {
            return new Response('How about implementing queryHistoricProcessInstance as a POST method ?');
            });


$app->POST('/activiti-rest/service/query/historic-task-instances', function(Application $app, Request $request) {
            return new Response('How about implementing queryHistoricTaskInstance as a POST method ?');
            });


$app->POST('/activiti-rest/service/query/historic-variable-instances', function(Application $app, Request $request) {
            return new Response('How about implementing queryVariableInstances as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/management/deadletter-jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing deleteDeadLetterJob as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/management/jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing deleteJob as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/management/timer-jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing deleteTimerJob as a DELETE method ?');
            });


$app->POST('/activiti-rest/service/management/jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing executeJobAction as a POST method ?');
            });


$app->GET('/activiti-rest/service/management/deadletter-jobs/{jobId}/exception-stacktrace', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getDeadLetterJobStacktrace as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/deadletter-jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getDeadletterJob as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getJob as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/jobs/{jobId}/exception-stacktrace', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getJobStacktrace as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/suspended-jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getSuspendedJob as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/suspended-jobs/{jobId}/exception-stacktrace', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getSuspendedJobStacktrace as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/timer-jobs/{jobId}', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getTimerJob as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/timer-jobs/{jobId}/exception-stacktrace', function(Application $app, Request $request, $jobId) {
            return new Response('How about implementing getTimerJobStacktrace as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/deadletter-jobs', function(Application $app, Request $request) {
            $id = $request->get('id');
            $process_instance_id = $request->get('process_instance_id');
            $execution_id = $request->get('execution_id');
            $process_definition_id = $request->get('process_definition_id');
            $timers_only = $request->get('timers_only');
            $messages_only = $request->get('messages_only');
            $with_exception = $request->get('with_exception');
            $due_before = $request->get('due_before');
            $due_after = $request->get('due_after');
            $exception_message = $request->get('exception_message');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $locked = $request->get('locked');
            $unlocked = $request->get('unlocked');
            $sort = $request->get('sort');
            return new Response('How about implementing listDeadLetterJobs as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/jobs', function(Application $app, Request $request) {
            $id = $request->get('id');
            $process_instance_id = $request->get('process_instance_id');
            $execution_id = $request->get('execution_id');
            $process_definition_id = $request->get('process_definition_id');
            $timers_only = $request->get('timers_only');
            $messages_only = $request->get('messages_only');
            $with_exception = $request->get('with_exception');
            $due_before = $request->get('due_before');
            $due_after = $request->get('due_after');
            $exception_message = $request->get('exception_message');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $locked = $request->get('locked');
            $unlocked = $request->get('unlocked');
            $sort = $request->get('sort');
            return new Response('How about implementing listJobs as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/suspended-jobs', function(Application $app, Request $request) {
            $id = $request->get('id');
            $process_instance_id = $request->get('process_instance_id');
            $execution_id = $request->get('execution_id');
            $process_definition_id = $request->get('process_definition_id');
            $timers_only = $request->get('timers_only');
            $messages_only = $request->get('messages_only');
            $with_exception = $request->get('with_exception');
            $due_before = $request->get('due_before');
            $due_after = $request->get('due_after');
            $exception_message = $request->get('exception_message');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $locked = $request->get('locked');
            $unlocked = $request->get('unlocked');
            $sort = $request->get('sort');
            return new Response('How about implementing listSuspendedJobs as a GET method ?');
            });


$app->GET('/activiti-rest/service/management/timer-jobs', function(Application $app, Request $request) {
            $id = $request->get('id');
            $process_instance_id = $request->get('process_instance_id');
            $execution_id = $request->get('execution_id');
            $process_definition_id = $request->get('process_definition_id');
            $timers_only = $request->get('timers_only');
            $messages_only = $request->get('messages_only');
            $with_exception = $request->get('with_exception');
            $due_before = $request->get('due_before');
            $due_after = $request->get('due_after');
            $exception_message = $request->get('exception_message');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $locked = $request->get('locked');
            $unlocked = $request->get('unlocked');
            $sort = $request->get('sort');
            return new Response('How about implementing listTimerJobs as a GET method ?');
            });


$app->POST('/activiti-rest/service/repository/models', function(Application $app, Request $request) {
            return new Response('How about implementing createModel as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/repository/models/{modelId}', function(Application $app, Request $request, $modelId) {
            return new Response('How about implementing deleteModel as a DELETE method ?');
            });


$app->GET('/activiti-rest/service/repository/models/{modelId}', function(Application $app, Request $request, $modelId) {
            return new Response('How about implementing getModel as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/models', function(Application $app, Request $request) {
            $id = $request->get('id');
            $category = $request->get('category');
            $category_like = $request->get('category_like');
            $category_not_equals = $request->get('category_not_equals');
            $name = $request->get('name');
            $name_like = $request->get('name_like');
            $key = $request->get('key');
            $deployment_id = $request->get('deployment_id');
            $version = $request->get('version');
            $latest_version = $request->get('latest_version');
            $deployed = $request->get('deployed');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $sort = $request->get('sort');
            return new Response('How about implementing getModels as a GET method ?');
            });


$app->PUT('/activiti-rest/service/repository/models/{modelId}', function(Application $app, Request $request, $modelId) {
            return new Response('How about implementing updateModel as a PUT method ?');
            });


$app->POST('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/identitylinks', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing createIdentityLink as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/identitylinks/{family}/{identityId}', function(Application $app, Request $request, $processDefinitionId, $family, $identityId) {
            return new Response('How about implementing deleteIdentityLink as a DELETE method ?');
            });


$app->PUT('/activiti-rest/service/repository/process-definitions/{processDefinitionId}', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing executeProcessDefinitionAction as a PUT method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/model', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing getBpmnModelResource as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/identitylinks/{family}/{identityId}', function(Application $app, Request $request, $processDefinitionId, $family, $identityId) {
            return new Response('How about implementing getIdentityLink as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/identitylinks', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing getIdentityLinks as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/image', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing getModelResource as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions/{processDefinitionId}', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing getProcessDefinition as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions/{processDefinitionId}/resourcedata', function(Application $app, Request $request, $processDefinitionId) {
            return new Response('How about implementing getProcessDefinitionResource as a GET method ?');
            });


$app->GET('/activiti-rest/service/repository/process-definitions', function(Application $app, Request $request) {
            $version = $request->get('version');
            $name = $request->get('name');
            $name_like = $request->get('name_like');
            $key = $request->get('key');
            $key_like = $request->get('key_like');
            $resource_name = $request->get('resource_name');
            $resource_name_like = $request->get('resource_name_like');
            $category = $request->get('category');
            $category_like = $request->get('category_like');
            $category_not_equals = $request->get('category_not_equals');
            $deployment_id = $request->get('deployment_id');
            $startable_by_user = $request->get('startable_by_user');
            $latest = $request->get('latest');
            $suspended = $request->get('suspended');
            $sort = $request->get('sort');
            return new Response('How about implementing getProcessDefinitions as a GET method ?');
            });


$app->PUT('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing createOrUpdateProcessVariable as a PUT method ?');
            });


$app->POST('/activiti-rest/service/runtime/process-instances', function(Application $app, Request $request) {
            return new Response('How about implementing createProcessInstance as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/process-instances/{processInstanceId}/identitylinks', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing createProcessInstanceIdentityLinks as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing createProcessInstanceVariable as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing deleteLocalProcessVariable as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/process-instances/{processInstanceId}', function(Application $app, Request $request, $processInstanceId) {
            $delete_reason = $request->get('delete_reason');
            return new Response('How about implementing deleteProcessInstance as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/process-instances/{processInstanceId}/identitylinks/users/{identityId}/{type}', function(Application $app, Request $request, $processInstanceId, $identityId, $type) {
            return new Response('How about implementing deleteProcessInstanceIdentityLinks as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables/{variableName}', function(Application $app, Request $request, $processInstanceId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing deleteProcessInstanceVariable as a DELETE method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing getProcessInstance as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}/diagram', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing getProcessInstanceDiagram as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}/identitylinks/users/{identityId}/{type}', function(Application $app, Request $request, $processInstanceId, $identityId, $type) {
            return new Response('How about implementing getProcessInstanceIdentityLinks as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables/{variableName}', function(Application $app, Request $request, $processInstanceId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing getProcessInstanceVariable as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables/{variableName}/data', function(Application $app, Request $request, $processInstanceId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing getProcessInstanceVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances', function(Application $app, Request $request) {
            $id = $request->get('id');
            $process_definition_key = $request->get('process_definition_key');
            $process_definition_id = $request->get('process_definition_id');
            $business_key = $request->get('business_key');
            $involved_user = $request->get('involved_user');
            $suspended = $request->get('suspended');
            $super_process_instance_id = $request->get('super_process_instance_id');
            $sub_process_instance_id = $request->get('sub_process_instance_id');
            $exclude_subprocesses = $request->get('exclude_subprocesses');
            $include_process_variables = $request->get('include_process_variables');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $sort = $request->get('sort');
            return new Response('How about implementing getProcessInstances as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables', function(Application $app, Request $request, $processInstanceId) {
            $scope = $request->get('scope');
            return new Response('How about implementing getVariables as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/process-instances/{processInstanceId}/identitylinks', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing listProcessInstanceIdentityLinks as a GET method ?');
            });


$app->PUT('/activiti-rest/service/runtime/process-instances/{processInstanceId}', function(Application $app, Request $request, $processInstanceId) {
            return new Response('How about implementing performProcessInstanceAction as a PUT method ?');
            });


$app->POST('/activiti-rest/service/query/process-instances', function(Application $app, Request $request) {
            return new Response('How about implementing queryProcessInstances as a POST method ?');
            });


$app->PUT('/activiti-rest/service/runtime/process-instances/{processInstanceId}/variables/{variableName}', function(Application $app, Request $request, $processInstanceId, $variableName) {
            return new Response('How about implementing updateProcessInstanceVariable as a PUT method ?');
            });


$app->POST('/activiti-rest/service/runtime/signals', function(Application $app, Request $request) {
            return new Response('How about implementing signalEventReceived as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/tasks/{taskId}/attachments', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing createAttachment as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/tasks', function(Application $app, Request $request) {
            return new Response('How about implementing createTask as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/tasks/{taskId}/comments', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing createTaskComments as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/tasks/{taskId}/identitylinks', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing createTaskInstanceIdentityLinks as a POST method ?');
            });


$app->POST('/activiti-rest/service/runtime/tasks/{taskId}/variables', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing createTaskVariable as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}/variables', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing deleteAllLocalTaskVariables as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}/attachments/{attachmentId}', function(Application $app, Request $request, $taskId, $attachmentId) {
            return new Response('How about implementing deleteAttachment as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}/events/{eventId}', function(Application $app, Request $request, $taskId, $eventId) {
            return new Response('How about implementing deleteEvent as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing deleteTask as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}/comments/{commentId}', function(Application $app, Request $request, $taskId, $commentId) {
            return new Response('How about implementing deleteTaskComment as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}/identitylinks/{family}/{identityId}/{type}', function(Application $app, Request $request, $taskId, $family, $identityId, $type) {
            return new Response('How about implementing deleteTaskInstanceIdentityLinks as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/runtime/tasks/{taskId}/variables/{variableName}', function(Application $app, Request $request, $taskId, $variableName) {
            return new Response('How about implementing deleteTaskInstanceVariable as a DELETE method ?');
            });


$app->POST('/activiti-rest/service/runtime/tasks/{taskId}', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing executeTaskAction as a POST method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/variables/{variableName}/data', function(Application $app, Request $request, $taskId, $variableName) {
            return new Response('How about implementing geTaskVariableData as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/attachments/{attachmentId}', function(Application $app, Request $request, $taskId, $attachmentId) {
            return new Response('How about implementing getAttachment as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/attachments/{attachmentId}/content', function(Application $app, Request $request, $taskId, $attachmentId) {
            return new Response('How about implementing getAttachmentContent as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/attachments', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing getAttachments as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/events/{eventId}', function(Application $app, Request $request, $taskId, $eventId) {
            return new Response('How about implementing getEvent as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/events', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing getEvents as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/identitylinks/{family}', function(Application $app, Request $request, $taskId, $family) {
            return new Response('How about implementing getIdentityLinksForFamily as a GET method ?');
            });


$app->POST('/activiti-rest/service/query/tasks', function(Application $app, Request $request) {
            return new Response('How about implementing getQueryResult as a POST method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/subtasks', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing getSubTasks as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing getTask as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/comments/{commentId}', function(Application $app, Request $request, $taskId, $commentId) {
            return new Response('How about implementing getTaskComment as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/identitylinks/{family}/{identityId}/{type}', function(Application $app, Request $request, $taskId, $family, $identityId, $type) {
            return new Response('How about implementing getTaskInstanceIdentityLinks as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/variables/{variableName}', function(Application $app, Request $request, $taskId, $variableName) {
            $scope = $request->get('scope');
            return new Response('How about implementing getTaskInstanceVariable as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks', function(Application $app, Request $request) {
            $name = $request->get('name');
            $name_like = $request->get('name_like');
            $description = $request->get('description');
            $priority = $request->get('priority');
            $minimum_priority = $request->get('minimum_priority');
            $maximum_priority = $request->get('maximum_priority');
            $assignee = $request->get('assignee');
            $assignee_like = $request->get('assignee_like');
            $owner = $request->get('owner');
            $owner_like = $request->get('owner_like');
            $unassigned = $request->get('unassigned');
            $delegation_state = $request->get('delegation_state');
            $candidate_user = $request->get('candidate_user');
            $candidate_group = $request->get('candidate_group');
            $candidate_groups = $request->get('candidate_groups');
            $involved_user = $request->get('involved_user');
            $task_definition_key = $request->get('task_definition_key');
            $task_definition_key_like = $request->get('task_definition_key_like');
            $process_instance_id = $request->get('process_instance_id');
            $process_instance_business_key = $request->get('process_instance_business_key');
            $process_instance_business_key_like = $request->get('process_instance_business_key_like');
            $process_definition_id = $request->get('process_definition_id');
            $process_definition_key = $request->get('process_definition_key');
            $process_definition_key_like = $request->get('process_definition_key_like');
            $process_definition_name = $request->get('process_definition_name');
            $process_definition_name_like = $request->get('process_definition_name_like');
            $execution_id = $request->get('execution_id');
            $created_on = $request->get('created_on');
            $created_before = $request->get('created_before');
            $created_after = $request->get('created_after');
            $due_on = $request->get('due_on');
            $due_before = $request->get('due_before');
            $due_after = $request->get('due_after');
            $without_due_date = $request->get('without_due_date');
            $exclude_sub_tasks = $request->get('exclude_sub_tasks');
            $active = $request->get('active');
            $include_task_local_variables = $request->get('include_task_local_variables');
            $include_process_variables = $request->get('include_process_variables');
            $tenant_id = $request->get('tenant_id');
            $tenant_id_like = $request->get('tenant_id_like');
            $without_tenant_id = $request->get('without_tenant_id');
            $candidate_or_assigned = $request->get('candidate_or_assigned');
            $category = $request->get('category');
            return new Response('How about implementing getTasks as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/comments', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing listTaskComments as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/variables', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing listTaskVariables as a GET method ?');
            });


$app->GET('/activiti-rest/service/runtime/tasks/{taskId}/identitylinks', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing listTasksInstanceIdentityLinks as a GET method ?');
            });


$app->PUT('/activiti-rest/service/runtime/tasks/{taskId}', function(Application $app, Request $request, $taskId) {
            return new Response('How about implementing updateTask as a PUT method ?');
            });


$app->PUT('/activiti-rest/service/runtime/tasks/{taskId}/variables/{variableName}', function(Application $app, Request $request, $taskId, $variableName) {
            return new Response('How about implementing updateTaskInstanceVariable as a PUT method ?');
            });


$app->POST('/activiti-rest/service/identity/users', function(Application $app, Request $request) {
            return new Response('How about implementing createUser as a POST method ?');
            });


$app->POST('/activiti-rest/service/identity/users/{userId}/info', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing createUserInfo as a POST method ?');
            });


$app->DELETE('/activiti-rest/service/identity/users/{userId}', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing deleteUser as a DELETE method ?');
            });


$app->DELETE('/activiti-rest/service/identity/users/{userId}/info/{key}', function(Application $app, Request $request, $userId, $key) {
            return new Response('How about implementing deleteUserInfo as a DELETE method ?');
            });


$app->GET('/activiti-rest/service/identity/users/{userId}', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing getUser as a GET method ?');
            });


$app->GET('/activiti-rest/service/identity/users/{userId}/info/{key}', function(Application $app, Request $request, $userId, $key) {
            return new Response('How about implementing getUserInfo as a GET method ?');
            });


$app->GET('/activiti-rest/service/identity/users/{userId}/picture', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing getUserPicture as a GET method ?');
            });


$app->GET('/activiti-rest/service/identity/users', function(Application $app, Request $request) {
            $id = $request->get('id');
            $first_name = $request->get('first_name');
            $last_name = $request->get('last_name');
            $email = $request->get('email');
            $first_name_like = $request->get('first_name_like');
            $last_name_like = $request->get('last_name_like');
            $email_like = $request->get('email_like');
            $member_of_group = $request->get('member_of_group');
            $potential_starter = $request->get('potential_starter');
            $sort = $request->get('sort');
            return new Response('How about implementing getUsers as a GET method ?');
            });


$app->GET('/activiti-rest/service/identity/users/{userId}/info', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing listUsersInfo as a GET method ?');
            });


$app->PUT('/activiti-rest/service/identity/users/{userId}', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing updateUser as a PUT method ?');
            });


$app->PUT('/activiti-rest/service/identity/users/{userId}/info/{key}', function(Application $app, Request $request, $userId, $key) {
            return new Response('How about implementing updateUserInfo as a PUT method ?');
            });


$app->PUT('/activiti-rest/service/identity/users/{userId}/picture', function(Application $app, Request $request, $userId) {
            return new Response('How about implementing updateUserPicture as a PUT method ?');
            });


$app->run();
