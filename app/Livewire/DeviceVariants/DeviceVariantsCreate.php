<?php

namespace App\Livewire\DeviceVariants;

use App\Models\Device;
use App\Models\DeviceVariant;
use Livewire\Component;

class DeviceVariantsCreate extends Component
{
    public $device_id;
    public $device_variant_id = null;
    public $version = '';

    public $storage_capacity = '';
    public $color = '';
    public $device;
    public $device_variant;
    public $isEditing = false;

    // protected $rules = [
    //     'storage_capacity' => 'required|string',
    //     'color' => 'required|string',
    // ];

    // protected $messages = [
    //     'storage_capacity.required' => 'A capacidade de armazenamento é obrigatória.',
    //     'color.required' => 'A cor é obrigatória.',
    // ];

    public function mount($device, $device_variant = null)
    {
        $this->device_id = $device;
        
        // Simular busca do device (aqui você buscaria do banco)
        $this->device = [
            'id' => $device,
            'name' => 'iPhone 14'
        ];

        if ($device_variant) {
            $this->device_variant_id = $device_variant;
            $this->isEditing = true;
            
            // Simular busca do device variant (aqui você buscaria do banco)
            $this->device_variant = [
                'id' => $device_variant,
                'storage_capacity' => '128GB',
                'color' => 'Preto'
            ];
            
            $this->storage_capacity = $this->device_variant['storage_capacity'];
            $this->color = $this->device_variant['color'];
        }
    }

    public function save()
    {
        // $this->validate();

        // Aqui você salvaria no banco de dados
        // if ($this->isEditing) {
        //     DeviceVariant::find($this->device_variant_id)->update([
        //         'storage_capacity' => $this->storage_capacity,
        //         'color' => $this->color,
        //     ]);
        // } else {
        //     DeviceVariant::create([
        //         'device_id' => $this->device_id,
        //         'storage_capacity' => $this->storage_capacity,
        //         'color' => $this->color,
        //         'name' => $this->device['name'] . ' ' . $this->storage_capacity . ' ' . $this->color,
        //         'description' => 'Lançado em ' . date('Y'),
        //     ]);
        // }

        session()->flash('message', $this->isEditing ? 'Variante atualizada com sucesso!' : 'Variante criada com sucesso!');
        
        return $this->redirect(route('device_variants.index', $this->device_id), navigate: true);
    }

    public function cancel()
    {
        return $this->redirect(route('device_variants.index', $this->device_id), navigate: true);
    }

    public function render()
    {
        return view('livewire.device_variants.create');
    }
}
