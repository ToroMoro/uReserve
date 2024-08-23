<div style="text-align: center";>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <div class="mb-8"></div>

    Hello, {{ $name }} !
    <input type="text" wire:model="name"><br>
    <br>
    <button wire:mouseOver="mouseOver">マウスを合わせてね</button>

</div>
