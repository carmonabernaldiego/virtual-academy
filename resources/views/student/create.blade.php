<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('message')"/>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4  px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('add-student') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Student Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                      required autofocus/>
                    </div>
                    <div class="mt-6">
                        <x-input-label for="email" :value="__('Student Email')"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                      :value="old('email')"
                                      required/>
                    </div>
                    <div class="mt-6">
                        <x-input-label for="phone" :value="__('Student Phone')"/>
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                                      :value="old('phone')"
                                      required/>
                    </div>
                    <div class="mt-6 mb-4">
                        <x-primary-button>{{ __('Save Student') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
