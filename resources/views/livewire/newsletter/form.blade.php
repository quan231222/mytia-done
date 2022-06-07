<div class="mb-4">
    <x-ui.alerts />

    <form wire:submit.prevent="formSubmit">

        <div class="container max-w-4xl mx-auto space-y-5 text-left">

            {{-- Name --}}
            <div>
                <x-jet-label for="name" value="{{ __('Tên đầy đủ của bạn.') }}" class="font-bold"
                    style="color: white" />
                <x-jet-input wire:model="name" name="name" id="name" class="block w-full mt-1" type="text"
                    placeholder="Bạn nhập tên đầy đủ của bạn vào đây nha!" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            {{-- Email --}}
            <div>
                <x-jet-label for="email" value="{{ __('Địa chỉ Email của bạn.') }}" class="font-bold"
                    style="color: white" />
                <x-jet-input wire:model="email" name="email" id="name" class="block w-full mt-1" type="text"
                    placeholder="Đừng quên nhập cả Email của bạn nữa!" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <x-jet-button class="cta-btn">
                    {{ __('Đăng ký') }}
                </x-jet-button>
            </div>
        </div>
    </form>
</div>