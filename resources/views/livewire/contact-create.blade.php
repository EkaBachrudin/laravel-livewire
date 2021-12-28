<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input wire:model="name" type="text" class="form-control" placeholder="Name..">
                    @error('name') <span class="text-danger"> <strong>{{$message}}</strong> </span>  @enderror
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" class="form-control" placeholder="Phone..">
                    @error('phone') <span class="text-danger"> <strong>{{$message}}</strong> </span>  @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mt-3">submit</button>
        <hr>
    </form>
</div>
