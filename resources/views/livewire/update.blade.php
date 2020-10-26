<form>
    <div class="form-group">
        <label for="first_name">Nombres</label>
        <input type="text" class="form-control" name="first_name" placeholder="Ingresar nombres" wire:model="first_name" />
        @error('first_name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
	<div class="form-group">
        <label for="last_name">Apellidos</label>
        <input type="text" class="form-control" name="last_name" placeholder="Ingresar apellidos" wire:model="last_name" />
        @error('last_name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="address">Dirección</label>
	    <input type="text" class="form-control" name="address" placeholder="Enter Address" wire:model="address" />
        @error('address') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
