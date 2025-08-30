<?php

namespace App\Livewire\DeviceVariants;

use Livewire\Component;

class DeviceVariantsIndex extends Component
{
    public $device_variants = [];
    public $device_id;
    public $device = [];

    public function mount($device)
    {
        $this->device_id = $device;
        
        // Simular busca do device
        $this->device = [
            'id' => $device,
            'name' => 'iPhone 14'
        ];
        $this->device_variants = [
            [
                'id' => '1',
                'name' => 'iPhone 14 128GB Preto',
                'description' => 'Lançado em 2022',
                'color' => 'from-slate-800 to-slate-900',
                'storage_capacity' => '128GB',
            ],
            [
                'id' => '2',
                'name' => 'iPhone 14 Pro 256GB Vermelho',
                'description' => 'Lançado em 2022',
                'color' => 'from-red-500 to-red-600',
                'storage_capacity' => '128GB',
            ],
            [
                'id' => '3',
                'name' => 'iPhone 14 Pro Max 1TB Branco',
                'description' => 'Lançado em 2022',
                'color' => 'from-slate-300 to-slate-400',
                'storage_capacity' => '256GB',
            ],
        ];

        // $this->device_variants = DeviceVariant::all();
    }

    public function createDeviceVariant($deviceId)
    {
        return $this->redirect(route('device_variants.create', $deviceId), navigate: true);
    }

    public function editDeviceVariant($deviceVariantId)
    {
        return $this->redirect(route('device_variants.edit', [$this->device_id, $deviceVariantId]), navigate: true);
    }

    public function back()
    {
        return $this->redirect(route('devices.index', $this->device_id), navigate: true);
    }

    public function render()
    {
        return view('livewire.device_variants.index');
    }
}
