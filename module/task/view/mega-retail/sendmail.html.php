<?php
/**
 * The mail file of task module of ZenTaoPMS.
 *
 */
?>
<table width='98%' align='center'>
  <tr class='header'>
    <td>
      <?php echo $task->name; ?>
    </td>
  </tr>
  <tr>
    <td>
    <fieldset>
      <legend>[ 今天任務安排 ]</legend>
      <div class='content'>
      <?php 
      echo $task->desc;
      ?>
      </div>
    </fieldset>
    </td>
  </tr>
  <tr>
    <td>
    <fieldset>
      <legend>[ 今天完成 或 新添加 ]</legend>
      <div class='content'>
      <?php include '../../../common/view/mail.html.php';?>
      </div>
    </fieldset>
  </td>
  </tr>
  <tr>
    <td>
    <fieldset>
      <legend>[ 附件 ]</legend>
      <div class='content'>
      <?php 
      if(strpos($task->desc, '<img src="data/upload'))
      {
        $task->desc = str_replace('<img src="', '<img src="http://' . $this->server->http_host . $this->config->webRoot, $task->desc);
      }
      ?>
      </div>
    </fieldset>
    </td>
  </tr>
</table>
