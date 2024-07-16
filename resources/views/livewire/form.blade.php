<div>
    <form wire:submit='create' action="">

        <div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <input wire:model='name' name="name" type="text" placeholder="imię ">
        <div class="text-red-400">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <button type="submit">wyslij</button>
    </form>

</div>
