<?php

namespace App\Livewire;

use Livewire\Component;

class Invoice extends Component
{
    public $openTab = 1;
    public $items = [
        [
            'amount' => '$10.00 USD',
            'invoice_number' => '8FB28438-0001',
            'customer' => 'michael@dundermifflin.com',
            'status' => 'Draft',
            'created_at' => 'June 7 3:36PM'
        ],
        [
            'amount' => '$8.00 USD',
            'invoice_number' => 'ECF17C97-0017',
            'customer' => 'alexander@stripe.com',
            'status' => 'Paid',
            'created_at' => 'June 7 3:36PM'
        ],
        [
            'amount' => '$8.00 USD',
            'invoice_number' => 'FA083B17-0017',
            'customer' => 'alexander@stripe.com',
            'status' => 'Paid',
            'created_at' => 'June 7 3:36PM'
        ],
        [
            'amount' => '$8.00 USD',
            'invoice_number' => 'C410C48D-0017',
            'customer' => 'alexander@stripe.com',
            'status' => 'Paid',
            'created_at' => 'June 7 3:36PM'
        ],
        [
            'amount' => '$10.00 USD',
            'invoice_number' => 'FD10AC76-0017',
            'customer' => 'alexander@stripe.com',
            'status' => 'Paid',
            'created_at' => 'June 7 3:36PM'
        ],
        [
            'amount' => '$10.00 USD',
            'invoice_number' => '3F7668CC-0017',
            'customer' => 'alexander@stripe.com',
            'status' => 'Paid',
            'created_at' => 'June 7 3:36PM'
        ],
        [
            'amount' => '$10.00 USD',
            'invoice_number' => '7FE81215-0017',
            'customer' => 'alexander@stripe.com',
            'status' => 'Paid',
            'created_at' => 'June 7 3:36PM'
        ]
    ];

    public $currentItems = [];

    public function mount(){
        $this->currentItems = $this->items;
    }

    public function changeTab($val){
        switch ($val) {
            case 2:
                $this->currentItems = collect($this->items)
                ->filter(function (array $e) 
                { 
                    return ($e['status'] == 'Draft');
                })->toArray();
                break;
            
            case 3:
                $this->currentItems = collect($this->items)
                ->filter(function (array $e) 
                { 
                    return ($e['status'] == 'Outstanding');
                })->toArray();
                break;

            case 4:
                $this->currentItems = collect($this->items)
                ->filter(function (array $e) 
                { 
                    return ($e['status'] == 'Past due');
                })->toArray();
                break;
                
            case 5:
                $this->currentItems = collect($this->items)
                ->filter(function (array $e) 
                { 
                    return ($e['status'] == 'Paid');
                })->toArray();
                break;
            
            case 1:
            default:
                $this->currentItems = $this->items;
                break;
        }
        $this->openTab = $val;
    }

    public function render()
    {
        return view('livewire.invoice');
    }
}
