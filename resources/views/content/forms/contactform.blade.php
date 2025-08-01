<div class="contactformsection">

    <form class="contactsectionform" method="POST" action="/contact-form-submit">
        @csrf
        <div class="formflexbox">
            <div class="formflexitembox box-50">
                <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    class="forminputfield @error('firstname') is-invalid @enderror"
                    placeholder="First Name"
                    value="{{ old('firstname') }}"
                    required
                />
                @error('firstname')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="formflexitembox box-50">
                <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    class="forminputfield"
                    placeholder="Last Name"
                    value=""
                />
            </div>
        </div>
        <div class="formflexbox">
            <div class="formflexitembox box-50">
                <input
                    type="email"
                    name="emailaddress"
                    id="emailaddress"
                    class="forminputfield @error('emailaddress') is-invalid @enderror"
                    placeholder="Email Address"
                    value="{{ old('emailaddress') }}"
                    required
                />
                @error('emailaddress')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="formflexitembox box-50">
                <input
                    type="tel"
                    name="mobilenumber"
                    id="mobilenumber"
                    class="forminputfield @error('mobilenumber') is-invalid @enderror"
                    placeholder="Mobile Number"
                    value="{{ old('mobilenumber') }}"
                    required
                />
                @error('mobilenumber')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="formflexbox">
            <div class="formflexitembox box-50">
                <input
                    type="text"
                    name="companybusiness"
                    id="companybusiness"
                    class="forminputfield @error('companybusiness') is-invalid @enderror"
                    placeholder="Company / Business"
                    value="{{ old('companybusiness') }}"
                    required
                />
                @error('companybusiness')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="formflexitembox box-50">
                <select
                    name="selectservices"
                    id="selectservices"
                    class="forminputfield @error('selectservices') is-invalid @enderror"
                    required
                >
                    <option value="">Select Service</option>
                    <option value="webdesigningdevelopment" {{ old('selectservices') == 'webdesigningdevelopment' ? 'selected' : '' }}>Web Designing / Development</option>
                    <option value="seo" {{ old('selectservices') == 'seo' ? 'selected' : '' }}> Search Engine Optimization (SEO) </option>
                    <option value="smm" {{ old('selectservices') == 'smm' ? 'selected' : '' }}>Social Media Marketing (SMM)</option>
                    <option value="ppc" {{ old('selectservices') == 'ppc' ? 'selected' : '' }}>Pay-Per-Click (PPC) Advertising</option>
                    <option value="reputationmanagement" {{ old('selectservices') == 'reputationmanagement' ? 'selected' : '' }}> Online Reputation Management</option>
                    <option value="others" {{ old('selectservices') == 'others' ? 'selected' : '' }}>Others</option>
                </select>
                @error('selectservices')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input
                    type="text"
                    name="otherservices"
                    id="otherservices"
                    class="forminputfield"
                    placeholder="Enter Services Here"
                    value="{{ old('otherservices') }}"
                    style="display: {{ old('selectservices') == 'others' ? 'block' : 'none' }};"
                >
                @error('otherservices')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="formflexbox">
            <div class="formflexitembox box-100">
                <textarea
                    name="message"
                    id="message"
                    class="forminputmessagefield @error('message') is-invalid @enderror"
                    placeholder="Message"
                >{{ old('message') }}</textarea>
                @error('message')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="formsubmitbuttonbox">
            <input type="hidden" name="ip_address" value="{{ request()->ip() }}" />
            <input type="hidden" name="pageurl" value="{{ url()->current() }}" />
            <button type="submit" class="contactformbutton">Submit</button>
        </div>
    </form>
</div>
