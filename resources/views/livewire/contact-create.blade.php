<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input wire:model="name" type="text" class="form-control" placeholder="Name..">
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" class="form-control" placeholder="Phone..">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mt-3">submit</button>
        {{$name}}
        <hr>
    </form>
</div>
