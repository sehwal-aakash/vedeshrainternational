@extends('layouts/commonLayout')

@section('title')
    Thank You | Vedeshra Technologies
@endsection

@section('meta')
<meta name="title" content="Thank You | Vedeshra Technologies: We Appreciate Your Inquiry">
<meta name="description" content="Thank you for reaching out to Vedeshra Technologies! We've received your inquiry and will respond shortly. Stay connected with us for updates and offers.">
<meta name="robots" content="noindex, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="365 days">
<meta name="author" content="Vedeshra Technologies LLC">

<link rel="canonical" href="https://vedeshra.com/thank-you/" />

<meta property="og:title" content="Thank You | Vedeshra Technologies">
<meta property="og:site_name" content="Vedeshra Technologies">
<meta property="og:url" content="https://vedeshra.com/thank-you/">
<meta property="og:description" content="Thank you for contacting Vedeshra Technologies. We’ve received your inquiry and will get back to you soon. Stay tuned for updates and insights!">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Thank You | Vedeshra Technologies">
<meta name="twitter:description" content="We appreciate your inquiry! Our team will get back to you soon. Stay connected with Vedeshra Technologies for the latest updates.">


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ThankYouPage",
  "name": "Thank You",
  "url": "https://vedeshra.com/thank-you/",
  "description": "Thank you for contacting Vedeshra Technologies. We appreciate your inquiry and will respond as soon as possible.",
  "provider": {
    "@type": "Organization",
    "name": "Vedeshra Technologies",
    "url": "https://vedeshra.com/"
  },
  "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+12134447693",
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
</script>
@endsection



@section('content')
    {{-- Banner Section --}}
    <section class="sectionbannersection section" style=" background-image: url('/assets/img/bannerimages/contact-us-banner.jpg'); ">
        <div class="container">
            <h1 class="bannertitle">Thank You</h1>
        </div>
    </section>

    {{-- Services Slider Section --}}
    @include('content.sections.servicesslider')

    {{-- Book a Meeting Section --}}
    <section class="book-a-meeting-section">
        <div class="book-meeting-backgroundflexbox">
            <div class="book-meeting-bgcolorbox"></div>
            <div class="book-meeting-bgimagebox">
                <img src="/assets/img/background/dashboardcontact.jpg" alt="Dashboard Contact Page">
            </div>
        </div>
        <div class="book-meeting-contentbox">
            <div class="container">
                <div class="book-meeting-contentflexbox">
                    <div class="book-meeting-contentflex-contentbox">
                        <h2>
                            <span>Book a Meeting</span>
                            <span class="focussedtext">to Get Started</span>
                        </h2>
                        <p>Looking to bring your ideas to life? Our team at Vedeshra Technologies is ready to collaborate with you. Schedule a meeting with us today to explore customized solutions tailored to your unique business needs.</p>
                        <div class="bookmeetingbuttonbox">
                            <a class="button" href="/contact/">Book a Meeting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- What we do --}}
    @include('content.sections.industriesslider')

    {{-- What we do --}}
    @include('content.sections.partner')
@endsection
