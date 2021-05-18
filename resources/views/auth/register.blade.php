<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register New User') }}
        </h2>
        
    </x-slot>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- First Name -->
            <div>
                <x-label for="firstname" class="mt-1" :value="__('First Name')" />

                <x-input id="firstname" class="block mt-1 w-1/6" type="text" name="firstname" :value="old('firstname')" required autofocus />
            </div>
            <!-- Last Name -->
            <div>
                <x-label for="lastname" class="mt-1" :value="__('Last Name')" />

                <x-input id="lastname" class="block mt-1 w-1/6" type="text" name="lastname" :value="old('lastname')" required autofocus />
            </div>
            <!-- Address -->
            <div>
                <x-label for="address1" class="mt-1" :value="__('Address 1')" />

                <x-input id="address1" class="block mt-1 w-1/3" type="text" name="address1" :value="old('address1')" required autofocus />
            </div>

            <div>
                <x-label for="address2" class="mt-1" :value="__('Address 2')" />

                <input id="address2" class="block mt-1 w-1/3" type="text" name="address2" :value="old('address2')" autofocus/>
            </div>
            <!-- City -->
            <div>
                <x-label for="city" class="mt-1" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-1/6" type="text" name="city" :value="old('city')" required autofocus />
            </div>
            <!-- State -->
            <div>
                <x-label for="state" class="mt-1" :value="__('State')" />
                    <select id="state" class="block mt-1 w-1/6" type="text" name="state" :value="old('state')" required autofocus>
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AR">AR</option>	
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>	
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>	
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>	
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>			
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>	
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                    </select>
            </div>

            <!-- Zip Code -->
            <div>
                <x-label for="zip" class="mt-1" :value="__('Zip Code')" />
                <x-input id="zip" class="block mt-1 w-1/6" type="text" name="zip" :value="old('zip')" required autofocus />
            </div>
            
            <!-- Country-->
            <div>
                <x-label for="country" class="mt-1" :value="__('Country')" />
                <select id="country" class="block mt-1 w-1/6" type="text" name="country" :value="old('country')" required autofocus>
                <option value="US">US</option>
                <option value="UK">UK</option>
                </select>
            </div>

            <div class="flex items-center justify-left mt-4">
                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>
</x-app-layout>
