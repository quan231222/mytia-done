<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Nhãn') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('tags.index') }}" :active="request()->routeIs('tags.index')">
                {{ __('Trang chủ') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('tags.create') }}" :active="request()->routeIs('tags.create')">
                {{ __('Tạo mơi') }}
            </x-jet-nav-link>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf

                        <div>
                            <x-jet-label for="name" value="{{ __('Tên nhãn') }}" />
                            <x-jet-input id="name" class="block w-full mt-1" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <span class="mt-2 text-xs text-gray-500">Tối đa 200 kí tự</span>
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <x-jet-button class="mt-12">
                            {{ __('Tạo mới') }}
                        </x-jet-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>