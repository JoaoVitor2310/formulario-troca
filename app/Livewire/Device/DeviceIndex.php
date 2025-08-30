<?php

namespace App\Livewire\Device;

use Livewire\Component;

class DeviceIndex extends Component
{
    public $page_title = 'Dispositivos Cadastrados';
    public $devices = [];

    public function mount()
    {
        // Categorias de dispositivos Apple
        $this->devices = [
            [
                'id' => '1',
                'name' => 'iPhone 14',
                'description' => 'Lançado em 2023',
                'icon' => 'device-phone-mobile',
                'color' => 'from-blue-500 to-blue-600',
                'bg_color' => 'bg-blue-500',
                'models_count' => 15,
                'available_for_trade' => 12,
                'available_for_sale' => 8,
                'image' => 'https://via.placeholder.com/400x300/3b82f6/ffffff?text=iPhone'
            ],
            [
                'id' => '2',
                'name' => 'iPhone 15',
                'description' => 'Lançado em 2024',
                'icon' => 'device-phone-mobile',
                'color' => 'from-blue-500 to-blue-600',
                'bg_color' => 'bg-blue-500',
                'models_count' => 15,
                'available_for_trade' => 12,
                'available_for_sale' => 8,
                'image' => 'https://via.placeholder.com/400x300/3b82f6/ffffff?text=iPhone'
            ],
            [
                'id' => '3',
                'name' => 'iPhone 16',
                'description' => 'Lançado em 2025',
                'icon' => 'device-phone-mobile',
                'color' => 'from-blue-500 to-blue-600',
                'bg_color' => 'bg-blue-500',
                'models_count' => 15,
                'available_for_trade' => 12,
                'available_for_sale' => 8,
                'image' => 'https://via.placeholder.com/400x300/3b82f6/ffffff?text=iPhone'
            ]
        ];
    }

    public function back(){
        return $this->redirect(route('device_types.index'), navigate: true);
    }

    public function selectDevice($deviceId)
    {
        return $this->redirect(route('device_variants.index', $deviceId), navigate: true);
    }

    public function render()
    {
        return view('livewire.device.index');
    }
}
