<div class="mx-auto overflow-hidden md:mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-3xl lg:w-2/6 md:w-3/6 sm:w-4/6 border-white">
    <div class="">
        <div class="p-5 text-white text-center text-2xl bg-gray-900">
            Calculadora em <span class="text-yellow-500">Livewire</span>
        </div>

        @if ($math)
            <div class="p-5 text-white text-right text-3xl bg-gray-800">
                {{ $math }}
            </div>
        @endif

        @error('math')
            <div class="text-red-500 text-2xl mt-2">{{ $message }}</div>
        @enderror

        <div class="p-5 text-white text-right text-xl bg-gray-800">
            = <span class="text-yellow-500">
                {{ $result }}
            </span>
        </div>

        <div class="py-5 bg-gray-600">
            <div class="flex items-stretch bg-gray-600 h-24">
                <x-calculadora.botao color="purple">%</x-calculadora.botao>
                <x-calculadora.botao color="purple" wire:click="addMath('parl')">(</x-calculadora.botao>
                <x-calculadora.botao color="purple" wire:click="addMath('parr')">)</x-calculadora.botao>
                <x-calculadora.botao color="blue" wire:click="operation('div')">÷</x-calculadora.botao>
            </div>

            <div class="flex items-stretch bg-gray-600 h-24">
                <x-calculadora.botao color="cyan" wire:click="addMath(7)">7</x-calculadora.botao>
                <x-calculadora.botao color="cyan" wire:click="addMath(8)">8</x-calculadora.botao>
                <x-calculadora.botao color="cyan" wire:click="addMath(9)">9</x-calculadora.botao>
                <x-calculadora.botao color="blue" wire:click="operation('*')">×</x-calculadora.botao>
            </div>

            <div class="flex items-stretch bg-gray-600 h-24">
                <x-calculadora.botao color="cyan" wire:click="addMath(4)">4</x-calculadora.botao>
                <x-calculadora.botao color="cyan" wire:click="addMath(5)">5</x-calculadora.botao>
                <x-calculadora.botao color="cyan" wire:click="addMath(6)">6</x-calculadora.botao>
                <x-calculadora.botao color="blue" wire:click="operation('-')">-</x-calculadora.botao>
            </div>

            <div class="flex items-stretch bg-gray-600 h-24">
                <x-calculadora.botao color="cyan" wire:click="addMath(1)">1</x-calculadora.botao>
                <x-calculadora.botao color="cyan" wire:click="addMath(2)">2</x-calculadora.botao>
                <x-calculadora.botao color="cyan" wire:click="addMath(3)">3</x-calculadora.botao>
                <x-calculadora.botao color="blue" wire:click="operation('+')">+</x-calculadora.botao>
            </div>

            <div class="flex items-stretch bg-gray-600 h-24">
                <x-calculadora.botao color="cyan" wire:click="addMath(0)">0</x-calculadora.botao>
                <x-calculadora.botao color="purple" wire:click="addMath('.')">.</x-calculadora.botao>
                <x-calculadora.botao color="green" wire:click="clearMath">C</x-calculadora.botao>
                <x-calculadora.botao color="green" wire:click="operation('=')"> =</x-calculadora.botao>
            </div>
        </div>

    </div>
</div>
