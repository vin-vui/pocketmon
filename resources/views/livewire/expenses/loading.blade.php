<div class="bg-white px-6 py-5 border-b border-gray-200">
    <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap lg:flex-no-wrap">

        <div class="ml-4 mt-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('expense.total') }} {{ $total_expenses }} €
            </h3>
        </div>

        <div class="ml-4 mt-2 lg:w-1/3 w-full">
            <div class="rounded-md shadow-sm">
                <input disabled class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder='{{ __('expense.search_by_label') }}'>
            </div>
        </div>

        <div class="ml-4 mt-2">
            <button disabled type="button"
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
                        <tr>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td></td>

                            </td>
                        </tr>
                        <tr>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td></td>

                            </td>
                        </tr>
                        <tr>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td></td>

                            </td>
                        </tr>
                        <tr>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td></td>

                            </td>
                        </tr>
                        <tr>
                            <td
                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                <div class="h-4 bg-gray-400 rounded w-3/4 animate-pulse"></div>
                            </td>
                            <td></td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
