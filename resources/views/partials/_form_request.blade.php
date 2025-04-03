<form id="form_request" action="{{ route('send.request') }}" method="post" class="form mx-auto w-full flex flex-col items-center gap-6 bg-white p-12 rounded-xl drop-shadow-lg">
    @if(! session('form_success'))
        @csrf
        <div class="text-gray-400 w-full">
            <input type="hidden" name="source" value="{{ $source }}">
            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
            <label for="name"></label>
            <input class="w-full p-4 focus:ring-4 ring-gold @error('name') ring-red-500 text-red-500 @enderror rounded-md" value="{{ old('name') }}" type="text" name="name" maxlength="255" placeholder="Your name *">
            @error('name')
            <span class="text-red-600" x-init="$el.closest('form').scrollIntoView()">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-gray-400 w-full">
            <label for="email"></label>
            <input class="w-full p-4 focus:ring-4 ring-gold @error('name') ring-red-500 text-red-500 @enderror rounded-md" value="{{ old('name') }}" type="email" name="email"  maxlength="255" placeholder="Your Email *">
            @error('email')
            <span class="text-red-600" x-init="$el.closest('form').scrollIntoView()">{{ $message}}</span>
            @enderror
        </div>

        <div class="text-gray-400 w-full">
            <label for="phone"></label>
            <input class="w-full p-4 focus:ring-4 ring-gold rounded-md" type="tel" name="phone" maxlength="255" value="{{ old('name') }}" placeholder="Your Phone number *">
            @error('phone')
            <span class="text-red-600" x-init="$el.closest('form').scrollIntoView()">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-gray-400 w-full">
            <label for="user_message"></label>
            <textarea class="w-full p-4 focus:ring-4 ring-gold rounded-md h-32" id="user_message" name="user_message">Hello, I'm interested in your new 33 Croisette development in Cannes. Please send me details of the flats available for sale.</textarea>
            @error('user_message')
            <span class="text-red-600">{{ $message}}</span>
            @enderror
        </div>

        <button type="submit"
                data-sitekey="{{ config('google_recaptcha.site_key') }}"
                data-callback='onSubmit'
                data-action='request' class="g-recaptcha bg-gold text-white p-4 rounded-md hover:bg-white hover:ring-gold hover:ring-4 hover:text-gold uppercase">Send your request</button>

        @error('g-recaptcha-response')<p>{{ $message }}</p>@enderror
        <p class="text-gray-400 text-xs text-justify">By submitting this information request form,
            you consent to the collection and use of your personal
            data in accordance with our privacy policy.
            Your information will only be used to process your
            request and to improve our services. We are committed
            to protecting your privacy and will not share your data
            with third parties without your explicit consent.</p>
    @else
        <p x-init="$el.closest('form').scrollIntoView()" class="text-justify">
            Thank you for your interest in the 33 croisette project.<br>
            The marketing team will be in touch with you in the next few days.
        </p>
    @endif
</form>
