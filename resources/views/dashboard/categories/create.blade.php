<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Danh mục') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')">
                {{ __('Trang chủ') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('categories.create') }}" :active="request()->routeIs('categories.create')">
                {{ __('Tạo mới') }}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 20px">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf

                        <div>
                            <small class="mb-4 text-gray-500">Chú ý: Chọn danh mục cha nếu muốn tạo danh mục con</small>
                            <select name="parent_id" id="" class="w-full mb-6"
                                style="border-radius: 0.375rem; background-color: #9ebdf0; border: none">
                                <option value="">Chọn danh mục cha</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>>
                                @endforeach
                            </select>
                        </div>

                        <div>
                        <x-jet-label for="name" value="{{ __('Tên danh mục') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <span class="text-xs text-gray-400">Tối đa 200 kí tự</span>
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