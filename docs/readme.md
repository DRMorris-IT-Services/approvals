# Laravel Approvals Package Documentation

## The Vision
The vision for the Approvals Package is that it will allows users to setup approval workflows within their deployment.  This giving the users the power to control what changes or requests require which approval workflow.

A working example would be a change to a Unit, this would then start the approval workflow setup and controlled by this module.  This would then send out an email to the first approver, await their response and if approved moved onto the next approver.


## Folder Structure
The package has the following folder structure:

<pre>
.
|-- composer.json
|-- docs
|   `-- readme.md
|-- LICENSE
|-- README.md
`-- src
    |-- App
    |-- ApprovalsServiceProvider.php
    |-- Http
    |   `-- Controllers
    |-- migrations
    |   |-- 2020_10_20_062227_create_approvals_table.php
    |   `-- 2020_10_20_063358_create_approvals_controls_table.php
    |-- routes
    |   `-- web.php
    `-- views
        |-- controls
        |   |-- edit.blade.php
        |   |-- list.blade.php
        |   `-- view.blade.php
        `-- layouts
            `-- alerts.blade.php
            
</pre>

## Database Structure
The package as the following database tables structure:

### Approvals Table

|Field|Type|Null|Notes|
|----|----|----|----|
|approval_id|String|No|Automaticaly Generated|
|approval_name|String|Yes||
|approval_require_all|String|Yes||
|approval_approver1|String|Yes||
|approval_approver2|String|Yes||
|approval_approver3|String|Yes||
|approval_approver4|String|Yes||
|approval_final_step|String|Yes||
|created_at|DateTime|Yes||
|updated_at|DateTime|Yes||

### Approvals Audit Table

|Field|Type|Null|Notes|
|----|----|----|----|
|audit_id|String|No|Automaticaly Generated|
|approval_id|String|No|Comes from Audit Table|
|requester_id|String|No|Comes from logged in user|
|approver1_response|String|Yes||
|approver2_response|String|Yes||
|approver3_response|String|Yes||
|approver4_response|String|Yes||
|created_at|DateTime|Yes||
|updated_at|DateTime|Yes||


### Approvals Controls Table

|Field|Type|Null|Notes|
|----|----|----|----|
|user_id|String|No|Comes from the users table|
|approval_view|String|Yes||
|approval_add|String|Yes||
|approval_edit|String|Yes||
|approval_del|String|Yes||
|approval_download|String|Yes||
|created_at|DateTime|Yes||
|updated_at|DateTime|Yes||
