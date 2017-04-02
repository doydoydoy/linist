<!-- Edit Modal -->
<div id="deleteModal<?= $modalId ?>" class="modal fade" role="dialog" style=''>
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Delete Comic Post</h4>
			</div>
			<div class="modal-body">
				<form method='POST'  style="">
					<input type="hidden" value="<?= $post['id'] ?>" name="del_id">
					<label>Are you sure you want to delete <?= $post['title'] ?> ? <br><small>(You won't be able to retrieve it back.)</small></label>
					<input type="submit" class="form-control btn btn-danger" name="btn_delComics" value="Continue Delete" style="margin: 20px 0 0">
				</form>
			</div>
			<div class="modal-footer">
				<form>
					<input type="button" class="form-control btn btn-default" data-dismiss="modal" value="Close"></input>
				</form>
			</div>
		</div>

	</div>
</div>