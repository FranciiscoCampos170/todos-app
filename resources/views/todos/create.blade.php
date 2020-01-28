<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new todo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="/todos" method="POST">
                @csrf
            <div class="form-group">
                <label for="exampleInputTask">Task name</label>
                <input type="text" class="form-control" id="exampleInputTask" name="name" required>
                </div>
           <div class="form-group">
                <label for="exampleFormControlDesc">Task description</label>
                <textarea class="form-control" id="exampleFormControlDesc" rows="3" name="description"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
