<!-- resources/views/banner/index.blade.php -->
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Banners') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    @can('create', App\Models\Banner::class)
                        <a href="{{ route('admin.banners.create') }}"
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create
                        </a>
                    @endcan

                    <table class="w-full whitespace-nowrap">
                        <thead>
                        <tr
                            class="text-left font-bold">
                            <th class="px-6 pt-6 pb-4">ID</th>
                            <th class="px-6 pt-6 pb-4">Title</th>
                            <th class="px-6 pt-6 pb-4">Description</th>
                            <th class="px-6 pt-6 pb-4">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                            <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                                <td class="border-t">{{ $banner->id }}</td>
                                <td class="border-t">{{ $banner->title }}</td>
                                <td class="border-t">{{ $banner->description }}</td>
                                <td class="border-t w-px">
                                    <div class="flex justify-center">
                                        @can('update', $banner)
                                            <a href="{{ route('admin.banners.edit', $banner) }}"
                                               class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                </svg>
                                            </a>
                                        @endcan

                                        @can('delete', $banner)
                                            <form action="{{ route('admin.banners.destroy', $banner) }}" method="post"
                                                  class="inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $banners->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
