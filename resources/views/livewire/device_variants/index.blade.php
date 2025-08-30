<div>
    <!-- Header Section -->
    <div class="space-y-4 mb-8">
        <div class="flex items-center space-x-4">
            <flux:button variant="ghost" size="sm" wire:click="back" class="text-slate-600 hover:text-slate-900">
                <div class="flex items-center justify-center">
                    <flux:icon name="arrow-left" class="w-4 h-4 mr-2" />
                    Voltar
                </div>
            </flux:button>
        </div>
        <div>
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white">
                Variantes Iphone 14
            </h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 mt-2 max-w-2xl">
                Defina as variantes disponíveis para o modelo Iphone 14
            </p>
        </div>
        <div>
            <flux:button wire:click="createDeviceVariant('{{ $device['id'] }}')" variant="primary">
                <div class="flex flex-row    items-center justify-center">
                    <flux:icon name="plus" class="w-4 h-4 mr-2" />
                    Nova Variante
                </div>
            </flux:button>
        </div>
    </div>

    <!-- Devices Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        @forelse($device_variants as $device)
        <div class="group cursor-pointer" wire:click="editDeviceVariant('{{ $device['id'] }}')">
            <div
                class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden transform group-hover:-translate-y-2">

                <!-- DeviceType Image/Header -->
                <div
                    class="relative h-32 bg-gradient-to-br {{ $device['color'] }} p-6 flex items-center justify-center">
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <flux:icon name="device-phone-mobile" class="w-8 h-8 text-white" />
                        </div>
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute top-4 right-4 w-8 h-8 bg-white/10 rounded-full"></div>
                    <div class="absolute bottom-4 left-4 w-12 h-12 bg-white/5 rounded-full"></div>
                </div>

                <!-- DeviceType Info -->
                <div class="p-6 space-y-4">
                    <!-- DeviceType Name -->
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                            {{ $device['name'] }}
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            {{ $device['description'] }}
                        </p>
                    </div>

                    <!-- Stats -->
                    <div class="space-y-3 pt-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600 dark:text-slate-400">Aceita troca:</span>
                            <span
                                class="font-semibold text-slate-900 dark:text-white">Sim</span>
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600 dark:text-slate-400">Realiza venda:</span>
                            <span
                                class="font-semibold text-green-600 dark:text-green-400">Não</span>
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600 dark:text-slate-400">Quantidade:</span>
                            <span
                                class="font-semibold text-orange-600 dark:text-orange-400">10</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-2 pt-4">
                        <flux:button variant="primary" size="sm" class="w-full group-hover:shadow-md transition-shadow"
                            wire:click.stop="selectDevice('{{ $device['id'] }}')">
                            <div class="flex flex-row items-center justify-center">

                                <flux:icon name="pencil" class="w-4 h-4 mr-2" />
                                Editar
                            </div>
                        </flux:button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full">
            <p class="text-gray-500 dark:text-gray-400 text-center text-lg">
                Nenhuma categoria encontrada
            </p>
        </div>
        @endforelse
    </div>
</div>