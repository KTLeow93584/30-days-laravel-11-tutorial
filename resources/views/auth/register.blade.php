<x-layout currentPage="Job">
    <x-slot:title>
        Register as a New User
    </x-slot:title>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="text"
                                name="first_name"
                                id="first_name"
                                value="{{old('first_name')}}"
                                required
                            />
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="last_name"
                                name="last_name"
                                id="last_name"
                                value="{{old('last_name')}}"
                                required
                            />
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="email"
                                name="email"
                                id="email"
                                value="{{old('email')}}"
                                required
                            />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="password"
                                name="password"
                                id="password"
                                required
                            />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Your Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                required
                            />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Return to Home</a>
            <x-form-submit-button>Register</x-form-submit-button>
        </div>
    </form>
</x-layout>