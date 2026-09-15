<form id="sendRequestId" action="{{ route('send.request') }}" method="post" class="form_request">
    @if(! session('form_success'))
        @csrf
        @method('post')
        <div class="form-field">
            <input type="hidden" name="source" value="{{ $source }}">
            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
            <input type="hidden" name="recaptcha_token">
            <input type="hidden" name="action" value="send_request">

            <label for="request_name">Name</label>
            <input id="request_name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" name="name" maxlength="255" placeholder="Your name *">
            @error('name')
            <span class="form-error" x-init="$el.closest('form').scrollIntoView()">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-field">
            <label for="request_email">Email</label>
            <input id="request_email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email"  maxlength="255" placeholder="Your Email *">
            @error('email')
            <span class="form-error" x-init="$el.closest('form').scrollIntoView()">{{ $message}}</span>
            @enderror
        </div>

        <div class="form-field">
            <label for="request_phone">Phone</label>
            <input id="request_phone" class="@error('phone') is-invalid @enderror" type="tel" name="phone" maxlength="255" value="{{ old('phone') }}" placeholder="Your Phone number *">
            @error('phone')
            <span class="form-error" x-init="$el.closest('form').scrollIntoView()">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-field">
            <label for="user_message">Message</label>
            <textarea id="user_message" name="user_message">{{ old('user_message', "Hello, I'm interested in your new 33 Croisette development in Cannes. Please send me details of the flats available for sale.") }}</textarea>
            @error('user_message')
            <span class="form-error">{{ $message}}</span>
            @enderror
        </div>

        <button onclick="sendRequest(event, 'send_request')" type="submit" data-action='request' class="g-recaptcha form-submit">Send request</button>
        @error('recaptcha_token')
        <span class="form-error">{{ $message }}</span>
        @enderror

        <p class="form-privacy">By submitting this information request form,
            you consent to the collection and use of your personal
            data in accordance with our privacy policy.
            Your information will only be used to process your
            request and to improve our services. We are committed
            to protecting your privacy and will not share your data
            with third parties without your explicit consent.</p>
    @else
        <p x-init="$el.closest('form').scrollIntoView()" class="form-success">
            Thank you for your interest in the 33 croisette project.<br>
            The marketing team will be in touch with you in the next few days.
        </p>
    @endif
</form>
