<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteOfficeModal">
    Delete Office
</button>

<!-- Modal -->
<div class="modal fade" id="deleteOfficeModal" tabindex="-1" aria-labelledby="deleteOfficeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteOfficeModalLabel">Delete Office</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    Are you sure you want to delete this office? This action cannot be undone.
                </div>
                <form method="POST" action="{{ route('offices.destroy', $office->id) }}">
                    @csrf
                    @method('DELETE')
                    <p>Please confirm to proceed with deleting the office.</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
