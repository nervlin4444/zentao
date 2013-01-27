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
      <legend>[ 今天任務 ]</legend>
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
      <legend>[ 需要物品 ]</legend>
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
  <tr>
    <td><?php include '../../../common/view/mail.html.php';?></td>
  </tr>
</table>
