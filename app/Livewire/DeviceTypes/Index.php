<?php

namespace App\Livewire\DeviceTypes;

use Livewire\Component;

class Index extends Component
{
    public $device_types = [];

    public function mount()
    {
        // Categorias de dispositivos Apple
        $this->device_types = [
            [
                'id' => 'iphone',
                'name' => 'iPhone',
                'description' => 'Smartphones Apple com tecnologia avançada e design premium',
                'icon' => 'device-phone-mobile',
                'color' => 'from-blue-500 to-blue-600',
                'bg_color' => 'bg-blue-500',
                'models_count' => 15,
                'available_for_trade' => 12,
                'available_for_sale' => 8,
                'image' => 'https://via.placeholder.com/400x300/3b82f6/ffffff?text=iPhone'
            ],
            [
                'id' => 'ipad',
                'name' => 'iPad',
                'description' => 'Tablets versáteis para trabalho, estudo e entretenimento',
                'icon' => 'device-tablet',
                'color' => 'from-purple-500 to-purple-600',
                'bg_color' => 'bg-purple-500',
                'models_count' => 8,
                'available_for_trade' => 6,
                'available_for_sale' => 5,
                'image' => 'https://via.placeholder.com/400x300/8b5cf6/ffffff?text=iPad'
            ],
            [
                'id' => 'apple-watch',
                'name' => 'Apple Watch',
                'description' => 'Smartwatches com monitoramento de saúde e fitness',
                'icon' => 'clock',
                'color' => 'from-red-500 to-pink-500',
                'bg_color' => 'bg-red-500',
                'models_count' => 10,
                'available_for_trade' => 8,
                'available_for_sale' => 6,
                'image' => 'https://via.placeholder.com/400x300/ef4444/ffffff?text=Apple+Watch'
            ],
            [
                'id' => 'macbook',
                'name' => 'MacBook',
                'description' => 'Notebooks profissionais para criação e produtividade',
                'icon' => 'computer-desktop',
                'color' => 'from-gray-500 to-gray-600',
                'bg_color' => 'bg-gray-500',
                'models_count' => 6,
                'available_for_trade' => 4,
                'available_for_sale' => 3,
                'image' => 'https://via.placeholder.com/400x300/6b7280/ffffff?text=MacBook'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.device_types.index');
    }

    public function selectDeviceType($categoryId)
    {
        // Redirecionar para a página da categoria específica
        return $this->redirect(route('device_types.show', $categoryId), navigate: true);
    }

    public function createDevice($categoryId)
    {
        // Redirecionar para criar um novo device da categoria
        session()->flash('message', "Criar novo dispositivo da categoria: {$categoryId}");
        // return $this->redirect(route('devices.create', ['category' => $categoryId]), navigate: true);
    }
}
