<?php

namespace App\Livewire\DeviceTypes;

use Livewire\Component;

class Show extends Component
{

    // public $device_type = 'iPhone';
    public $devices = [];

    public function mount()
    {
        // Categorias de dispositivos Apple
        $this->devices = [
            [
                'id' => '1',
                'name' => 'iPhone 15 128 GB',
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
                'id' => '1',
                'name' => 'iPhone 16 Pro Max 256 GB',
                'description' => 'Lançado em 2025',
                'icon' => 'device-phone-mobile',
                'color' => 'from-blue-500 to-blue-600',
                'bg_color' => 'bg-blue-500',
                'models_count' => 15,
                'available_for_trade' => 12,
                'available_for_sale' => 8,
                'image' => 'https://via.placeholder.com/400x300/3b82f6/ffffff?text=iPhone'
            ],
            [
                'id' => '1',
                'name' => 'iPhone 16e 128 GB',
                'description' => 'Lançado em 2025',
                'icon' => 'device-phone-mobile',
                'color' => 'from-blue-500 to-blue-600',
                'bg_color' => 'bg-blue-500',
                'models_count' => 15,
                'available_for_trade' => 12,
                'available_for_sale' => 8,
                'image' => 'https://via.placeholder.com/400x300/3b82f6/ffffff?text=iPhone'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.device_types.show');
    }
}
