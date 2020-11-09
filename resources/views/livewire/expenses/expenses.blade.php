<div class="pt-12">
    <div class="max-w-7xl mx-auto px-0">
        <div class="bg-white overflow-hidden shadow-xl rounded-lg" wire:init="loadExpenses">

        {{-- @if($expenses == [])

            @include('livewire.expenses.loading')

        @else --}}

            @include('layouts.messages')

            <div class="bg-white px-6 py-5 border-b border-gray-200">
                <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap lg:flex-no-wrap">

                    <div class="ml-4 mt-2">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $number_expenses }} {{ __('expense.total') }} {{ $total_expenses }} €
                        </h3>
                    </div>

                    <div class="ml-4 mt-2 lg:w-1/3 w-full">
                        <div class="rounded-md shadow-sm">
                            <input wire:model="search" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder='{{ __('expense.search_by_label') }}'>
                        </div>
                    </div>

                    <div class="ml-4 mt-2">
                        <button wire:click="create()" type="button"
                            class="uppercase relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            {{ __('expense.create') }}
                        </button>
                    </div>

                </div>
            </div>

            @if($isOpen)
            @include('livewire.expenses.create')
            @endif

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            #
                                        </th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('general.label') }}
                                        </th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('expense.cost') }}
                                        </th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('general.created_at') }}
                                        </th>
                                        <th class="py-3 bg-gray-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" >
                                    @foreach($expenses as $expense)
                                    <tr x-data="{ expanded: false }" x-on:mouseover="expanded = true" x-on:mouseleave="expanded = false" class="hover:bg-gray-100 transition duration-150 ease-in-out">
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {{ $expense->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $expense->label }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $expense->cost }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $expense->created_at }}
                                            </span>
                                        </td>
                                        <td
                                            class="py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium transition duration-150 ease-in-out" :class="{ 'opacity-0': expanded === false }">
                                            <a href="#" wire:click="edit({{ $expense->id }})"
                                                class="text-indigo-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <a href="#" wire:click="delete({{ $expense->id }})"
                                                class="text-red-600 hover:text-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block h-5 w-5 mx-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <div class="border-t border-gray-200 pb-4 px-5 bg-gray-50">
                                {{ $expenses->links('pagination::tailwind-modern') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- @endif --}}

        </div>
    </div>
</div>
