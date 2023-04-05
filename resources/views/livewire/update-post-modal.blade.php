<x-modals.modal-update title="Editar Motivacao">
  <form wire:submit.prevent="update">
      <div class="modal-body">
        <div class="mb-3">
            <label>Title:</label>
            <input type="text" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label>Body:</label>
            <textarea type="text" class="form-control" wire:model="body"></textarea>
            @error('body') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
  </form>
</x-modals.modal-update>
