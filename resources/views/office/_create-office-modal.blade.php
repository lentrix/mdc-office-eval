<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createOfficeModal">
  Add New Office
</button>

<!-- Modal -->
<div class="modal fade" id="createOfficeModal" tabindex="-1" aria-labelledby="createOfficeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createOfficeModalLabel">Add New Office</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('offices.store')}}" method="POST">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
          <label for="name" class="form-label">Office Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="office_head" class="form-label">Office Head</label>
          <input type="text" class="form-control" id="office_head" name="office_head" rows="3" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Office</button>
      </div>
      </form>
    </div>
  </div>
</div>
