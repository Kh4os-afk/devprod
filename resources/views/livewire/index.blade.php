<div>
    <flux:heading>Contador de Teste</flux:heading>
    <flux:input wire:model="contagem" label="Contagem Atual" readonly/>

    <flux:button wire:click="contar(1)">Contar +</flux:button>
    <flux:button wire:click="contar(-1)">Contar -</flux:button>
</div>