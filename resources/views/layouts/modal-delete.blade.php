<!-- Modal -->
<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$todo->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <h5>Do you want to complete this todo?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
      <form action="{{url('todos', [$todo->id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-success">YES</button>
     </form>
        </form>
      </div>
    </div>
  </div>
</div>
