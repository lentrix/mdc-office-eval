<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editOfficeModal">
  Edit Office
</button>

<!-- Modal -->
<div class="modal fade" id="editOfficeModal" tabindex="-1" aria-labelledby="editOfficeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editOfficeModalLabel">Add New Office</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{ route('offices.update', $office->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
        <label for="name" class="form-label">Office Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $office->name) }}" required>
        </div>
        <div class="mb-3">
        <label for="office_head" class="form-label">Office Head</label>
        <input type="text" class="form-control" id="office_head" name="office_head" value="{{ old('office_head', $office->office_head) }}" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Office</button>
      </div>
    </form>
    </div>
  </div>
</div>
