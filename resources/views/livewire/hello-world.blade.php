<div>
    <input wire:model.lazy="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    {{ implode(', ', $greeting) }} {{ $name }} @if( $loud ) ! @endif
</div>