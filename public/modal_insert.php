
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="/modal_controller.php" method="post">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Отправить отзыв</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


			<div class="modal-body">
                <input type="text" name="name">
            
			    <textarea name="feedback" maxlength="200"  cols="30" rows="10" placeholder="Максимум 200 символов"></textarea>

			</div>
			
			<input type="text" name="id" value="<?= $cart['id_good']; ?>" style="display: none">


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
				<button type="submit" class="btn btn-primary">Отправить</button>
			</div>
			</form>
		</div>
	</div>
</div>