<div class='container'>
{<{<{ echo render_cell ('demo_cells', 'main_menu', array ()); ?>
  <a class='list' href='{<{<{ echo base_url (array ('events', 'index'));?>'>列表</a>
  {<{<{
    if (isset ($message) && $message) { ?>
      <div class='error'>{<{<{ echo $message;?></div>
  {<{<{
    } ?>
  <form action='{<{<{ echo base_url (array ('events', 'update', $event->id));?>' method='post' enctype='multipart/form-data'>
    <table class='table-form'>
      <tbody>
        <tr>
          <th>標題</th>
          <td>
            <input type='text' name='title' value='{<{<{ echo $event->title;?>' placeholder='請輸入活動標題..' maxlength='200' pattern='.{1,200}' required title='輸入 1~200 個字元!' />
          </td>
        </tr>
        <tr>
          <th>資訊</th>
          <td>
            <textarea name='info' placeholder='請輸入活動資訊..' pattern='.{1,}' required title='輸入至少 1 個字元!' >{<{<{ echo $event->info;?></textarea>
          </td>
        </tr>
        <tr>
          <th>封面</th>
          <td>
            {<{<{ echo img ($event->cover->url ('100w'));?>
            <hr />
            <input type='file' name='cover' value='' accept="image/gif, image/jpeg, image/png" />
          </td>
        </tr>
        <tr>
          <td colspan='2'>
            <button type='reset' class='button'>重填</button>
            <button type='submit' class='button'>確定</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
