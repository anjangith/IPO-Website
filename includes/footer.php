
<div id="container-fluid">
  <div class="d-flex flex-column">

  <div class="p-2">
  <div id="display_comment"></div>
  </div>
  <div class="p-2">
  <form method="POST" id="comment_form">

    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
    <div class="p-2">
    <span id="comment_message"></span>
    <br />
    </div>
   </form>
  </div>
</div>
</div>
