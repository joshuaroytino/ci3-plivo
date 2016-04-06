<form style="margin-top:80px;" class="form-horizontal">
	<div class="form-group">
		<label for="textRecipient" class="col-sm-2 control-label">Recipient:</label>
		<div class="col-sm-10">
			<input type="text" name="recipient" id="textRecipient" class="form-control" value="" required="required" pattern="" title="">
		</div>
	</div>
	<div class="form-group">
		<label for="textareaMessage" class="col-sm-2 control-label">Message:</label>
		<div class="col-sm-10">
			<textarea name="message" id="textareaMessage" class="form-control" rows="3" required="required"></textarea>
		</div>
	</div>
	<div class="form-group pull-right">
		<div class="col-sm-offset-2 col-sm-12">
			<button type="button" class="btn btn-success">SEND MESSAGE</button>
			<button type="reset" class="btn btn-default">CANCEL</button>
		</div>
	</div>
</form>