<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <x-splade-form method="patch" :action="route('profile.update')" :default="$user" class="mt-6 space-y-6" preserve-scroll>
        {{-- <x-splade-file id="schLogo" name="schLogo" filepond preview accept="image/png" min-size="100KB" max-size="2MB" /> --}}
        {{-- <x-splade-input id="schName" type="text" name="schName" :label="__('School Name')" required autofocus />
        <x-splade-input id="schAddress" type="text" name="schAddress" :label="__('School Address')" required autofocus />
        <x-splade-input id="schEmail" type="email" name="schEmail" :label="__('Email')" required /> --}}

        <x-splade-input id="coorFName" type="text" name="coorFName" :label="__('First Name')" required autofocus />
        <x-splade-input id="coorMName" type="text" name="coorMName" :label="__('Middle Name')" />
        <x-splade-input id="coorLName" type="text" name="coorLName" :label="__('Last Name')" required />
        <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
        <x-splade-input id="contactNumber" type="text" name="contactNumber" :label="__('Contact Number')" required />
        <x-splade-select placeholder="Select your Region..." id="region" name="region" remote-url="https://psgc.gitlab.io/api/regions/" option-label="name" option-value="code" :label="__('Region')" required />
        <x-splade-select placeholder="Select your City or Municipality..." id="city" name="city" remote-url="`https://psgc.gitlab.io/api/regions/${form.region}/cities-municipalities/`" option-label="name" option-value="code" :label="__('City / Municipality')" required />
        <x-splade-select placeholder="Select your Barangay..." id="barangay" name="barangay" remote-url="`https://psgc.gitlab.io/api/cities-municipalities/${form.city}/barangays/`" option-label="name" option-value="code" :label="__('Barangay')" required />
        <x-splade-input id="street" type="text" name="street" :label="__('Street & House/Lot No.')" required />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <Link method="post" href="{{ route('verification.send') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </Link>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif

        <div class="flex items-center gap-4">
            <x-splade-submit :label="__('Save')" />

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-gray-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </x-splade-form>
</section>
