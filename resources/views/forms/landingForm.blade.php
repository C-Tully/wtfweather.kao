<form method="POST" action="/submission" >
	<div class="form-group">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" title="Enter your Location" name="Enter your Location" placeholder="Enter your Location">
		</div>
		<div class="form-group">
			 <button type="submit" name="submit" class="btn btn-primary">Add Comment</button>
		</div>
	</div>
</form>