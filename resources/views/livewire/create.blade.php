
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

    <form  wire:submit.prevent = "store()">
        <div class="modal-body">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" wire:model = "first_name">
                    @error('first_name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" wire:model = "last_name">
                    @error('last_name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" wire:model = "email">
                    @error('email')
                     <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" wire:model = "phone">
                    @error('phone')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
        </div>

        <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Student</button>
        </div>

    </form>
      </div>
    </div>
  </div>