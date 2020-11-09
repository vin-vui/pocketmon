<div class="py-12">
    <div class="max-w-7xl mx-auto px-0">
        <div class="bg-white overflow-hidden shadow-xl rounded-lg">

            @include('layouts.messages')

            <div class="bg-white px-6 py-5 border-b border-gray-200">
                <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-no-wrap">
                    <div class="ml-4 mt-2">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 capitalize">
                            {{ __('general.charges') }}
                        </h3>
                    </div>
                    <div class="ml-4 mt-2 flex-shrink-0">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button wire:click="edit({{ $parameter->id }})" type="button"
                                class="uppercase relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                {{ __('general.edit') }}
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            @if($isOpen)
            @include('livewire.parameters.create')
            @endif

            <div class="py-5 px-6">
                <dl>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm leading-5 font-medium text-gray-500 capitalize">
                            {{ __('general.social_charges') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $parameter->social_charges }} %
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5 capitalize">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('general.fixed_charges') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $parameter->fixed_charges }} €
                        </dd>
                    </div>
                </dl>
            </div>

        </div>
    </div>
</div>
