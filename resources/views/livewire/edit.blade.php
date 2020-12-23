
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updatedStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Student's Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

     <div class="modal-body">
         <form>
            <input type="hidden" wire:model ="ids">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" wire:model = "first_name" class="form-control">
                    @error('first_name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" wire:model="last_name" class="form-control" placeholder="Last Name">
                    @error('last_name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" wire:model = "email" class="form-control" placeholder="Email">
                    @error('email')
                     <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" wire:model = "phone" name="phone" class="form-control" placeholder="Phone Number">
                    @error('phone')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        </div>

        <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" data-dismiss="modal" wire:click.prevent = "update()">Update Student</button>
        </div>
      </div>
    </div>
  </div>