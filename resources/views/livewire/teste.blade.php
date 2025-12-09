<div>
    <flux:heading>Contador de Teste</flux:heading>
    <flux:input wire:model="contagem" label="Contagem Atual" readonly class="mb-2"/>

    <flux:button wire:click="contar(1)">Contar +</flux:button>
    <flux:button wire:click="contar(-1)">Contar -</flux:button>
</div>