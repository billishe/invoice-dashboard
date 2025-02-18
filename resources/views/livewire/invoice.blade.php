<div class="p-10 text-slate-500 font-medium">
    <div class="flex items-center justify-between">
        <div class="relative flex items-center py-4 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 absolute left-1 ">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
            </svg>          
            <input type="text" name="" id="" placeholder="Search..." class="w-full h-4 px-7 py-4 border-none focus:ring-0 font-medium">
        </div>
        <div class="flex space-x-5">
            <div class="flex hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 0 0 1.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06ZM18.584 5.106a.75.75 0 0 1 1.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 0 1-1.06-1.06 8.25 8.25 0 0 0 0-11.668.75.75 0 0 1 0-1.06Z" />
                    <path d="M15.932 7.757a.75.75 0 0 1 1.061 0 6 6 0 0 1 0 8.486.75.75 0 0 1-1.06-1.061 4.5 4.5 0 0 0 0-6.364.75.75 0 0 1 0-1.06Z" />
                </svg>
                <span class="mx-2">Feedback?</span>
            </div>
            <div class="relative">
                <span class="absolute top-0 right-0 -mt-2 -mr-1 bg-red-500 text-white rounded-full text-xs border-2 border-white px-1.5 py-0" style="font-size: 8px;">1</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 hover:cursor-pointer">
                  <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 hover:cursor-pointer">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 hover:cursor-pointer">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                </svg>
            </div>                                          
        </div>
    </div>
    <hr>
    <div class="flex mt-20 justify-between text-black">
        <h1 class="font-bold text-3xl">Invoices </h1>
        <div class="flex space-x-3">
            <x-flat-button title="Filter">
                @slot('icon')
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path fill-rule="evenodd" d="M3.792 2.938A49.069 49.069 0 0 1 12 2.25c2.797 0 5.54.236 8.209.688a1.857 1.857 0 0 1 1.541 1.836v1.044a3 3 0 0 1-.879 2.121l-6.182 6.182a1.5 1.5 0 0 0-.439 1.061v2.927a3 3 0 0 1-1.658 2.684l-1.757.878A.75.75 0 0 1 9.75 21v-5.818a1.5 1.5 0 0 0-.44-1.06L3.13 7.938a3 3 0 0 1-.879-2.121V4.774c0-.897.64-1.683 1.542-1.836Z" clip-rule="evenodd" />
                </svg>
                @endslot
            </x-flat-button>
            <x-flat-button title="Export">
                @slot('icon')
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                        <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                    </svg>
                @endslot
            </x-flat-button>
            <div class="flex space-x-2 cursor-pointer px-3 py-1 items-center bg-blue-600 text-white hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                  </svg>
                <span class="">
                    Create Invoice
                </span>
                <span class="bg-blue-400 px-1 hover:bg-blue-500">N</span>
            </div>
        </div>
    </div>    
    <div class="mt-3 mb-7">
        <div class="flex space-x-10 border-b border-slate-300">
            <div @class(['hover:cursor-pointer hover:text-sky-500 pb-2.5 hover:border-b border-sky-400 ' => ($openTab != 1), 'hover:cursor-pointer border-sky-400 pb-2.5 -mb-0.5 text-sky-500 border-b-4' => ($openTab == 1)])
            wire:click="changeTab(1)">All Invoices</div>    
            <div @class(['hover:cursor-pointer hover:text-sky-500 pb-2.5 hover:border-b border-sky-400 ' => ($openTab != 2), 'hover:cursor-pointer border-sky-400 pb-2.5 -mb-0.5 text-sky-500 border-b-4' => ($openTab == 2)]) wire:click="changeTab(2)">Draft</div>    
            <div @class(['hover:cursor-pointer hover:text-sky-500 pb-2.5 hover:border-b border-sky-400 ' => ($openTab != 3), 'hover:cursor-pointer border-sky-400 pb-2.5 -mb-0.5 text-sky-500 border-b-4' => ($openTab == 3)]) wire:click="changeTab(3)">Outstanding</div>    
            <div @class(['hover:cursor-pointer hover:text-sky-500 pb-2.5 hover:border-b border-sky-400 ' => ($openTab != 4), 'hover:cursor-pointer border-sky-400 pb-2.5 -mb-0.5 text-sky-500 border-b-4' => ($openTab == 4)]) wire:click="changeTab(4)">Past due</div>    
            <div @class(['hover:cursor-pointer hover:text-sky-500 pb-2.5 hover:border-b border-sky-400 ' => ($openTab != 5), 'hover:cursor-pointer border-sky-400 pb-2.5 -mb-0.5 text-sky-500 border-b-4' => ($openTab == 5)]) wire:click="changeTab(5)">Paid</div>    
        </div>    
    </div>
    <table class="min-w-full bg-white text-sm z-10">
        <thead>
        <tr class="border-b border-gray-300 font-bold text-black">
            <th class="text-left px-4 py-2 font-bold">AMOUNT</th>
            <th class="text-left px-4 py-2 font-bold">INVOICE NUMBER</th>
            <th class="text-left px-4 py-2 font-bold">CUSTOMER</th>
            <th class="text-left px-4 py-2 font-bold">CREATED AT</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($currentItems as $item)    
                <tr class="border-b">
                    <td @class(['px-4 py-2 text-gray-700' => ($item['status'] != 'Paid'), 'px-4 py-2 font-bold text-black' => ($item['status'] == 'Paid')])>{{ $item['amount'] }}</td>
                    <td class="px-4 py-2 text-gray-700">
                    <span @class(['bg-gray-300 text-gray-700 text-xs px-2 py-1 rounded' => ($item['status'] != 'Paid'), 'bg-green-200 text-green-700 text-xs px-2 py-1 rounded' => ($item['status'] == 'Paid')])>{{ $item['status'] }}</span> {{ $item['invoice_number'] }}
                    </td>
                    <td class="px-4 py-2 text-gray-700">{{ $item['customer'] }}</td>
                    <td class="px-4 py-2 text-gray-700">{{ $item['created_at'] }}</td>
                    <td class="py-2 " x-data="{show: false}" x-on:click="show = !show">
                        <div class="flex items-center h-full pt-1 relative">
                            <x-flat-button>
                                @slot('icon')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M10 3a.75.75 0 0 1 .75.75v10.638l3.96-4.158a.75.75 0 1 1 1.08 1.04l-5.25 5.5a.75.75 0 0 1-1.08 0l-5.25-5.5a.75.75 0 1 1 1.08-1.04l3.96 4.158V3.75A.75.75 0 0 1 10 3Z" clip-rule="evenodd" />
                                </svg>                         
                                @endslot
                            </x-flat-button>
                            <x-flat-button> 
                                @slot('icon')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
                                    <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z" />
                                </svg>
                                @endslot
                            </x-flat-button> 
                            <div class="absolute top-10 right-24 py-4 min-w-48 min-h-24 bg-white shadow-xl z-50" x-show="show">
                                <div class="flex flex-col">
                                    <span class="text-slate-500 my-3 px-4">ACTIONS</span>
                                    <span class="text-blue-500 cursor-pointer mb-3 hover:text-blue-400 px-4">Download PDF</span>
                                    <span class="text-blue-500 cursor-pointer mb-3 hover:text-blue-400 px-4">Duplicate Invoice</span>
                                    <span class="text-red-500 cursor-pointer mb-3 hover:text-red-400 px-4">Delete draft</span>
                                    <hr/>
                                    <span class="text-slate-500 my-3 px-4">CONNECTIONS</span>
                                    <span class="text-blue-500 cursor-pointer mb-3 flex space-x-2 hover:text-blue-400 px-4">
                                        View Customer
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                            <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                                          </svg>
                                          
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>      
</div> 