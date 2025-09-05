@extends('layouts/commonLayout')

@section('title')
    Get a Quote | Vedeshra Technologies: Custom Web & Marketing Solutions
@endsection

@section('meta')
    <meta name="title" content="Get a Quote | Vedeshra Technologies: Custom Web & Marketing Solutions">
    <meta name="description"
        content="Looking for expert web design or digital marketing? Get a customized quote from Vedeshra Technologies today and start growing your business.">
    <meta name="keywords"
        content="Web Design Quote, Digital Marketing Quote, Custom Website Pricing, SEO Services Cost, Branding Solutions, Vedeshra Technologies">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/get-quote/" />

    <meta property="og:title" content="Get a Custom Quote | Vedeshra Technologies">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/get-quote/">
    <meta property="og:description"
        content="Need professional web design or marketing? Request a free quote from Vedeshra Technologies and get tailored solutions for your business success.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Get a Custom Quote | Vedeshra Technologies">
    <meta name="twitter:description"
        content="Grow your business with expert web design & marketing services. Get a free quote from Vedeshra Technologies today!">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "name": "Get a Quote",
      "url": "https://vedeshra.com/get-quote/",
      "description": "Request a custom quote for your web design and digital marketing needs. Vedeshra Technologies offers tailored solutions to drive business growth."
    },
    {
      "@type": "Service",
      "name": "Custom Web Design & Digital Marketing",
      "provider": {
        "@type": "Organization",
        "name": "Vedeshra Technologies",
        "url": "https://vedeshra.com/"
      },
      "areaServed": ["US", "GB", "CA", "AF"],
      "serviceType": ["Web Design", "SEO", "Digital Marketing", "Branding", "Social Media Marketing"],
      "description": "Expert web design and digital marketing services to help your business grow. Request a custom quote today.",
      "availableChannel": {
        "@type": "ServiceChannel",
        "serviceUrl": "https://vedeshra.com/get-quote/"
      }
    },
    {
      "@type": "Organization",
      "name": "Vedeshra Technologies",
      "url": "https://vedeshra.com/",
      "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+911169311084",
        "contactType": "customer service",
        "email": "sales@vedeshra.com",
        "areaServed": ["US", "GB", "CA", "AF"],
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61558433069572",
        "https://x.com/vedeshratech",
        "https://www.instagram.com/vedeshratechnologies",
        "https://www.youtube.com/@vedeshratechnologies",
        "https://www.linkedin.com/company/vedeshra-technologies/"
      ]
    }
  ]
}
</script>
@endsection


@section('content')
    <section class="getquotesection section">
        <div class="container">
            <div class="getquoteflexbox">
                <div class="getquoteformboxcontainer">
                    <div class="getquoteformbox">
                        <div class="contact-form-title">
                            <h2>Experience Real Results</h2>
                            <p>Partner with Vedeshra and scale your business.</p>
                        </div>
                        <div class="getquoteformsection">
                            <form class="getquoteform" method="POST" action="/getquote-form-submit">
                                @csrf
                                <div class="formflexbox">
                                    <div class="formflexitembox box-50">
                                        <input type="text" name="firstname" id="firstname"
                                            class="forminputfield @error('firstname') is-invalid @enderror"
                                            placeholder="First Name" value="{{ old('firstname') }}" required />
                                        @error('firstname')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="formflexitembox box-50">
                                        <input type="text" name="lastname" id="lastname" class="forminputfield"
                                            placeholder="Last Name*" value="">
                                    </div>
                                </div>
                                <div class="formflexbox">
                                    <div class="formflexitembox box-50">
                                        <input type="text" name="companybusiness" id="companybusiness"
                                            class="forminputfield @error('companybusiness') is-invalid @enderror"
                                            placeholder="Company / Business" value="{{ old('companybusiness') }}"
                                            required />
                                        @error('companybusiness')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="formflexitembox box-50">
                                        <input type="text" name="website" id="website"
                                            class="forminputfield @error('website') is-invalid @enderror"
                                            placeholder="Website" value="{{ old('website') }}" required>
                                        @error('website')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="formflexbox">
                                    <div class="formflexitembox box-50">
                                        <input type="email" name="emailaddress" id="emailaddress"
                                            class="forminputfield @error('emailaddress') is-invalid @enderror"
                                            placeholder="Email Address" value="{{ old('emailaddress') }}" required />
                                        @error('emailaddress')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="formflexitembox box-50">
                                        <input type="tel" name="mobilenumber" id="mobilenumber"
                                            class="forminputfield @error('mobilenumber') is-invalid @enderror"
                                            placeholder="Mobile Number" value="{{ old('mobilenumber') }}" required />
                                        @error('mobilenumber')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="formflexbox">
                                    <div class="formflexitembox box-50">
                                        <select name="selectservices" id="selectservices"
                                            class="forminputfield @error('selectservices') is-invalid @enderror" required>
                                            <option value="">Select Service</option>
                                            <option value="webdesigningdevelopment"
                                                {{ old('selectservices') == 'webdesigningdevelopment' ? 'selected' : '' }}>
                                                Web Designing / Development</option>
                                            <option value="seo" {{ old('selectservices') == 'seo' ? 'selected' : '' }}>
                                                Search Engine Optimization (SEO) </option>
                                            <option value="smm" {{ old('selectservices') == 'smm' ? 'selected' : '' }}>
                                                Social Media Marketing (SMM)</option>
                                            <option value="ppc" {{ old('selectservices') == 'ppc' ? 'selected' : '' }}>
                                                Pay-Per-Click (PPC) Advertising</option>
                                            <option value="reputationmanagement"
                                                {{ old('selectservices') == 'reputationmanagement' ? 'selected' : '' }}>
                                                Online Reputation Management</option>
                                            <option value="others"
                                                {{ old('selectservices') == 'others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                        @error('selectservices')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="otherservices" id="otherservices"
                                            class="forminputfield" placeholder="Enter Services Here"
                                            value="{{ old('otherservices') }}"
                                            style="display: {{ old('selectservices') == 'others' ? 'block' : 'none' }};">
                                        @error('otherservices')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="formflexitembox box-50">
                                        <select name="selectregion" id="selectregion"
                                            class="forminputfield @error('selectregion') is-invalid @enderror" required>
                                            <option value="">Select Region</option>
                                            <option value="north-america"
                                                {{ old('selectregion') == 'north-america' ? 'selected' : '' }}>North
                                                America</option>
                                            <option value="south-america"
                                                {{ old('selectregion') == 'south-america' ? 'selected' : '' }}>South
                                                America</option>
                                            <option value="europe"
                                                {{ old('selectregion') == 'europe' ? 'selected' : '' }}>Europe</option>
                                            <option value="south-africa"
                                                {{ old('selectregion') == 'south-africa' ? 'selected' : '' }}>South Africa
                                            </option>
                                            <option value="asia" {{ old('selectregion') == 'asia' ? 'selected' : '' }}>
                                                Asia</option>
                                            <option value="australia"
                                                {{ old('selectregion') == 'australia' ? 'selected' : '' }}>Australia
                                            </option>
                                        </select>
                                        @error('selectregion')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="formflexbox">
                                    <div class="formflexitembox box-100">
                                        <textarea name="message" id="message" class="forminputmessagefield @error('message') is-invalid @enderror"
                                            placeholder="Message" required>{{ old('message') }}</textarea>

                                        @error('message')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="formsubmitbuttonbox">
                                    <input type="hidden" name="ip_address" value="{{ request()->ip() }}" />
                                    <input type="hidden" name="pageurl" value="{{ url()->current() }}" />
                                    <button type="submit" class="contactformbutton">
                                        SEND MY FREE PROPOSAL
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="getquoteformcaption">
                            <p>
                                In a hurry? Give us a call now at
                                <a href="tel:+911169311084">+91-11-6931-1084</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="getquotecontentboxcontainer">
                    <div class="contact-title-box">
                        <div class="left-arrow-box">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                        <div class="contact-title-content">
                            <h2>
                                Ready to Dominate Your Market?
                            </h2>
                            <p>
                                Jumpstart your digital marketing success in 3 easy steps:
                            </p>
                        </div>
                    </div>
                    <div class="contact-steps-container">
                        <div class="contact-steps-item-box">
                            <div class="contact-steps-number-box">
                                <span>1</span>
                            </div>
                            <div class="contact-steps-content">
                                <h3>Contact Us</h3>
                                <p>
                                    Fill out our brief contact form, and we'll be in touch with you soon to learn more about
                                    your business.
                                </p>
                            </div>
                        </div>
                        <div class="contact-steps-item-box">
                            <div class="contact-steps-number-box">
                                <span>2</span>
                            </div>
                            <div class="contact-steps-content">
                                <h3>Launch Targeted Campaigns</h3>
                                <p>
                                    Our digital marketing experts will work closely with you to implement data-driven
                                    strategies that drive business growth.
                                </p>
                            </div>
                        </div>
                        <div class="contact-steps-item-box">
                            <div class="contact-steps-number-box">
                                <span>3</span>
                            </div>
                            <div class="contact-steps-content">
                                <h3>Achieve Lasting Growth</h3>
                                <p>Solidify your digital presence, expand your brand reach and see outstanding results
                                    month-over-month.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-address-container">
                        <div class="contact-address-box">
                            <p class="contact-address-title">Headquarters:</p>
                            <p>5101 Santa Monica Blvd Ste 8 Los Angeles, CA 90029</p>
                            <div class="contact-phone-number">
                                <a href="tel:+911169311084">+91-11-6931-1084</a>
                            </div>
                        </div>
                        <div class="contact-address-box">
                            <p class="contact-address-title">Office Hours:</p>
                            <p>Mon-Fri, 8:30am - 5:30pm CT</p>
                            <div class="mainphonenumber">
                                <span class="phone-title">Main Phone:</span>
                                <div class="contact-phone-number">
                                    <a href="tel:+911169311084">+91-11-6931-1084</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partner Section --}}
    @include('content.sections.partner')

    {{-- Industries Slider Section --}}
    @include('content.sections.industriesslider')

    {{-- Feature Section --}}
    @include('content.sections.featuresection')

    {{-- Services Slider Section --}}
    @include('content.sections.servicesslider')
@endsection
