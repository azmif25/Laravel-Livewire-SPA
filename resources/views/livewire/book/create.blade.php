<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="form-group">
                    <label for="title"><b>Title</b></label>
                    <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert Title...">
                    @error('title')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sinopsys"><b>Sinopsys</b></label>
                    <textarea wire:model="sinopsys" class="form-control @error('sinopsys') is-invalid @enderror" rows="3" placeholder="Insert Sinopsys..."></textarea>
                    @error('sinopsys')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price"><b>Price</b></label>
                    <input type="number" wire:model="price" class="form-control @error('price') is-invalid @enderror" placeholder="Insert Price...">
                    @error('price')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
