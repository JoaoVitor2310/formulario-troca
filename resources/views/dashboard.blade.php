<x-layouts.app :title="__('Dashboard')">
    <div class="space-y-4 mb-8">
        <div>
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white">
                Dashboard
            </h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 mt-2">
                Olá, {{ auth()->user()->name }}! Bem-vindo ao painel de controle.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <div class="relative p-6">
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 opacity-10 rounded-full transform translate-x-8 -translate-y-8"></div>

                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <flux:icon name="users" class="w-6 h-6 text-white" />
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">150</div>
                        <div class="text-sm text-slate-500 dark:text-slate-400">Total</div>
                    </div>
                </div>

                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                    Leads Totais
                </h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    Todos os leads registrados no sistema
                </p>

                <div class="mt-4 flex items-center text-sm">
                    <div class="flex items-center text-green-600 dark:text-green-400">
                        <flux:icon name="arrow-trending-up" class="w-4 h-4 mr-1" />
                        <span class="font-medium">+12%</span>
                    </div>
                    <span class="text-slate-500 dark:text-slate-400 ml-2">vs. mês anterior</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <div class="relative p-6">
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 opacity-10 rounded-full transform translate-x-8 -translate-y-8"></div>

                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <flux:icon name="clock" class="w-6 h-6 text-white" />
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">95</div>
                        <div class="text-sm text-slate-500 dark:text-slate-400">Em Andamento</div>
                    </div>
                </div>

                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                    Não Finalizados
                </h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    Leads que não completaram o processo
                </p>

                <div class="mt-4 flex items-center text-sm">
                    <div class="flex items-center text-orange-600 dark:text-orange-400">
                        <flux:icon name="exclamation-triangle" class="w-4 h-4 mr-1" />
                        <span class="font-medium">63%</span>
                    </div>
                    <span class="text-slate-500 dark:text-slate-400 ml-2">do total</span>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
            <div class="relative p-6">
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 opacity-10 rounded-full transform translate-x-8 -translate-y-8"></div>

                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <flux:icon name="check-circle" class="w-6 h-6 text-white" />
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">55</div>
                        <div class="text-sm text-slate-500 dark:text-slate-400">Completos</div>
                    </div>
                </div>

                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">
                    Finalizados
                </h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    Leads que completaram todo o processo
                </p>

                <div class="mt-4 flex items-center text-sm">
                    <div class="flex items-center text-green-600 dark:text-green-400">
                        <flux:icon name="check" class="w-4 h-4 mr-1" />
                        <span class="font-medium">37%</span>
                    </div>
                    <span class="text-slate-500 dark:text-slate-400 ml-2">taxa de conversão</span>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Atividades Recentes</h3>
                <flux:button variant="ghost" size="sm">
                    <flux:icon name="ellipsis-horizontal" class="w-4 h-4" />
                </flux:button>
            </div>

            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <flux:icon name="user-plus" class="w-4 h-4 text-white" />
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-white">
                            Novo lead cadastrado
                        </p>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            João Silva se interessou por iPhone 14 Pro
                        </p>
                        <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">2 minutos atrás</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <flux:icon name="check-circle" class="w-4 h-4 text-white" />
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-white">
                            Processo finalizado
                        </p>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Maria Santos completou a troca do iPhone 13
                        </p>
                        <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">1 hora atrás</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <flux:icon name="clock" class="w-4 h-4 text-white" />
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-white">
                            Aguardando resposta
                        </p>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Pedro Costa não respondeu a avaliação
                        </p>
                        <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">3 horas atrás</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white">Performance</h3>
                <flux:button variant="ghost" size="sm">
                    <span class="text-sm text-slate-600 dark:text-slate-400">Últimos 30 dias</span>
                </flux:button>
            </div>

            <div class="space-y-6">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-slate-900 dark:text-white">Taxa de Conversão</span>
                        <span class="text-sm font-bold text-green-600 dark:text-green-400">37%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: 37%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-slate-900 dark:text-white">Tempo Médio</span>
                        <span class="text-sm font-bold text-blue-600 dark:text-blue-400">2.5 dias</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: 65%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-slate-900 dark:text-white">Satisfação</span>
                        <span class="text-sm font-bold text-purple-600 dark:text-purple-400">4.8/5</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full" style="width: 96%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-700 shadow-lg p-6">
        <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-6">Ações Rápidas</h3>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <flux:button variant="outline" class="h-16 flex flex-col items-center justify-center space-y-2">
                <flux:icon name="plus" class="w-5 h-5" />
                <span class="text-sm">Novo Lead</span>
            </flux:button>

            <flux:button variant="outline" class="h-16 flex flex-col items-center justify-center space-y-2">
                <flux:icon name="device-phone-mobile" class="w-5 h-5" />
                <span class="text-sm">Dispositivos</span>
            </flux:button>

            <flux:button variant="outline" class="h-16 flex flex-col items-center justify-center space-y-2">
                <flux:icon name="chart-bar" class="w-5 h-5" />
                <span class="text-sm">Relatórios</span>
            </flux:button>

            <flux:button variant="outline" class="h-16 flex flex-col items-center justify-center space-y-2">
                <flux:icon name="cog-6-tooth" class="w-5 h-5" />
                <span class="text-sm">Configurações</span>
            </flux:button>
        </div>
    </div> -->

</x-layouts.app>