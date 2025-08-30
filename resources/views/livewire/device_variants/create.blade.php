<div>
    <!-- Header Section -->
    <div class="space-y-4 mb-8">
        <div class="flex items-center space-x-4">
            <flux:button variant="ghost" size="sm" wire:click="cancel" class="text-slate-600 hover:text-slate-900">
                <div class="flex items-center justify-center">
                    <flux:icon name="arrow-left" class="w-4 h-4 mr-2" />
                    Voltar
                </div>
            </flux:button>
        </div>

        <div>
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white">
                {{ $isEditing ? 'Editar' : 'Nova' }} Variante
            </h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 mt-2 max-w-2xl">
                {{ $isEditing ? 'Edite as informações' : 'Adicione uma nova variante' }} para o {{ $device['name'] }}
            </p>
        </div>
    </div>

    <!-- Success Message -->
    @if (session()->has('message'))
    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
        {{ session('message') }}
    </div>
    @endif

    <!-- Form -->
    <div class="max-w-2xl">
        <form wire:submit="save" class="space-y-8">

            <!-- Preview Card -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg p-6">
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Preview</h3>

                <div class="max-w-sm mx-auto">
                    <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg overflow-hidden">
                        <!-- Device Image/Header -->
                        <div class="relative h-32 bg-gradient-to-br 
                            @if($color)
                                @switch(strtolower(trim($color)))
                                    @case('preto')
                                        from-slate-800 to-slate-900
                                        @break
                                    @case('branco')
                                        from-slate-300 to-slate-400
                                        @break
                                    @case('vermelho')
                                        from-red-500 to-red-600
                                        @break
                                    @case('azul')
                                        from-blue-500 to-blue-600
                                        @break
                                    @case('verde')
                                        from-green-500 to-green-600
                                        @break
                                    @case('rosa')
                                        from-pink-500 to-pink-600
                                        @break
                                    @case('roxo')
                                        from-purple-500 to-purple-600
                                        @break
                                    @case('dourado')
                                        from-yellow-500 to-yellow-600
                                        @break
                                    @case('amarelo')
                                        from-yellow-400 to-yellow-500
                                        @break
                                    @case('laranja')
                                        from-orange-500 to-orange-600
                                        @break
                                    @case('cinza')
                                        from-gray-500 to-gray-600
                                        @break
                                    @default
                                        from-gray-400 to-gray-500
                                @endswitch
                            @else
                                from-slate-300 to-slate-400
                            @endif
                            p-6 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-3">
                                    <flux:icon name="device-phone-mobile" class="w-8 h-8 text-white" />
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 w-8 h-8 bg-white/10 rounded-full"></div>
                            <div class="absolute bottom-4 left-4 w-12 h-12 bg-white/5 rounded-full"></div>
                        </div>

                        <!-- Device Info -->
                        <div class="p-4">
                            <h4 class="text-lg font-bold text-slate-900 dark:text-white text-center">
                                {{ $device['name'] }}
                                @if($version) {{ $version }} @endif
                                @if($storage_capacity) {{ $storage_capacity }} @endif
                                @if($color) {{ $color }} @endif
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Version -->
            <div class="space-y-3">
                <flux:input label="Versão (Pro, Max, ...)" description="" wire:model.live="version" />
                @error('version')
                <flux:error>{{ $message }}</flux:error>
                @enderror
            </div>

            <!-- Storage Capacity -->
            <div class="space-y-3">
                <flux:input label="Capacidade de Armazenamento" description="" wire:model.live="storage_capacity" />
                @error('storage_capacity')
                <flux:error>{{ $message }}</flux:error>
                @enderror
            </div>

            <!-- Color Selection -->
            <div class="space-y-3">
                <flux:input label="Cor" description="" wire:model.live="color" />
                @error('color')
                <flux:error>{{ $message }}</flux:error>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6">
                <flux:button type="submit" variant="primary" class="flex-1 h-12">
                    <div class="flex items-center justify-center">
                        <flux:icon name="check" class="w-4 h-4 mr-2" />
                        <span>{{ $isEditing ? 'Atualizar' : 'Criar' }} Variante</span>
                    </div>
                </flux:button>
                <flux:button variant="outline" wire:click="cancel" class="flex-1 sm:flex-none sm:px-8 h-12">
                    <div class="flex items-center justify-center">
                        <flux:icon name="x-mark" class="w-4 h-4 mr-2" />
                        <span>Cancelar</span>
                    </div>
                </flux:button>
            </div>
        </form>
    </div>
</div>