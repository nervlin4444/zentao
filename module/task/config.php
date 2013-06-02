<?php
$config->task->batchCreate = 10;
$config->task->create->requiredFields      = 'name,type';
$config->task->edit->requiredFields        = $config->task->create->requiredFields;
$config->task->start->requiredFields       = 'estimate';
$config->task->finish->requiredFields      = 'consumed';
$config->task->activate->requiredFields    = 'left';

$config->task->editor->create = array('id' => 'desc', 'tools' => 'simpleTools');
$config->task->editor->edit   = array('id' => 'desc', 'tools' => 'simpleTools');
//kevin add start 2003-06-02
$config->task->editor->finish   = array('id' => 'comment', 'tools' => 'simpleTools');
//kevin add end 2003-06-02

$config->task->exportFields = '
    id, project, story,
    name, desc,
    type, pri,  deadline, status,estimate, consumed, left,
    mailto,
    openedBy, openedDate, assignedTo, assignedDate, 
    finishedBy, finishedDate, canceledBy, canceledDate,
    closedBy, closedDate, closedReason,
    lastEditedBy, lastEditedDate,files
    ';
