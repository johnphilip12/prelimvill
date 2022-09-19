<div>
    <div class="card border border-light">
        <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
            <h3 class="mt-2">Add Cellphones</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="contact_number">
                <label for="contact_number">Contact Number</label>
                @error('contact_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.debounce.500ms="email">
                <label for="email">Email Address</label>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Address</label>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="cellphone" class="form-select" wire:model.defer="cellphone">
                    <option hidden="true">Select Brands</option>
                    <option selected disabled>Select Brands</option>
                    <option value="TNT">samsung</option>
                    <option value="Sun">real me</option>
                    <option value="Globe">iphone</option>
                    <option value="TM">cherry mobile</option>
                    <option value="PLDT">my phone</option>
                    <option value="Smart">huawei</option>
                </select>
                <label for="cellphone">Cellphone</label>
                @error('cellphone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addCellphone()">
                    Add Cellphone
                </button>
            </div>
        </div>
    </div>
</div>
