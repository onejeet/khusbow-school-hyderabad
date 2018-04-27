
<!-- Ask for modal and Button -->
<button class="askforbtn btn btn-primary hidden-sm hidden-xs " data-toggle="modal" data-target="#askfor">Ask For a Call</button>
<div class="modal fade" id="askfor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <h4 class="modal-title" id="myModalLabel"> Ask For a Call</h4>
        <small> Rest Assured! Privacy is foremost<br/>
        +91-098492-04764 </small>
      </div>
      <form action="<?php basename($_SERVER['PHP_SELF']); ?>" method="POST">
      <div class="modal-body">
        <input type="text" class="form-control required" name="name" placeholder="Your Name" required>
        <br/>
        <input type="text" class="form-control required" name="tel" placeholder="Your Mobile Number" required>
        <input type="hidden" class="form-control required" name="message" value="User asked to call on the above Number." >
        <input type="hidden" class="form-control required" name="email" value=" " >
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit_email" class="btn btn-success btn-block">Send</button>
      </div>
      </form>
    </div>
  </div>
</div> <!-- Ask for Modal Closed..............-->
