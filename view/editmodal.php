<!-- Edit Modal -->
<div id="editModal<?= $modalId ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Edit Comic Post</h4>
			</div>
			<div class="modal-body">
				<form method='POST'>
					<input type="hidden" value="<?= $post['id'] ?>" name="edit_id">
					<label>Comic Post Title</label>
					<input type="text" class="form-control" name="edit_title" value="<?= $post['title'] ?>"></input>
					<label>Comic Description</label>
					<input type="text" class="form-control" name="edit_desc" value="<?= $post['descript'] ?>"></input>
					<label>Comic Image URL Link</label>
					<input type="text" class="form-control" name="edit_img" value="<?= $post['imgLink'] ?>"></input>
					<input type="submit" class="form-control btn btn-info" name="btn_editComics" style="margin: 15px 0 0">
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