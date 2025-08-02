@extends('layouts/commonLayout')

@section('title') Contact Us | Vedeshra Technologies: Let's Connect & Grow @endsection

@section('meta')
<meta name="title" content="Contact Us | Vedeshra Technologies: Let's Connect & Grow">
<meta name="description" content="Have questions or need expert web design and digital marketing services? Contact Vedeshra Technologies today and let’s create success together.">
<meta name="keywords" content="Contact Web Design Agency, Digital Marketing Consultation, Vedeshra Technologies Support, Business Inquiry, Get in Touch">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Vedeshra Technologies LLC">

<link rel="canonical" href="https://vedeshra.com/contact-us/" />

<meta property="og:title" content="Contact Us | Vedeshra Technologies">
<meta property="og:site_name" content="Vedeshra Technologies">
<meta property="og:url" content="https://vedeshra.com/contact-us/">
<meta property="og:description" content="Looking for web design or digital marketing services? Contact Vedeshra Technologies today and let’s collaborate on your next big project.">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact Us | Vedeshra Technologies">
<meta name="twitter:description" content="Get in touch with Vedeshra Technologies for expert web design & marketing solutions. Let's build something incredible together.">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "name": "Contact Us",
      "url": "https://vedeshra.com/contact-us/",
      "description": "Need help with web design or digital marketing? Contact Vedeshra Technologies today for expert solutions tailored to your business needs."
    },
    {
      "@type": "LocalBusiness",
      "name": "Vedeshra Technologies",
      "url": "https://vedeshra.com/",
      "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "5101 Santa Monica Blvd Ste 8",
        "addressLocality": "Los Angeles",
        "addressRegion": "CA",
        "postalCode": "90029",
        "addressCountry": "US"
    },
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
  ]
}
</script>
@endsection



@section('content')
    {{-- Banner Section --}}
    <section class="sectionbannersection section" style="background-image: url('/assets/img/bannerimages/contact-us-banner.jpg')">
        <div class="container">
            <h1 class="bannertitle">Contact Us</h1>
        </div>
    </section>

    {{-- Contact Page Section --}}
    <section class="contact-page-section section">
        <div class="container">
            <div class="contactpageflexbox">
                <div class="contactpageflexitemboxcontent">
                    <p class="subtitle">Contact Us</p>
                    <h2 class="title">Connect with us</h2>
                    <p class="content">
                        Our Digital Marketing team is always ready to help. Give us a call, send us an email, or fill out the form below.
                    </p>
                    <div class="contactpageimagecontentboxflexbox">
                        <div class="contactpageimagecontentboxflexitembox">
                            <div class="contactpageimageiconflexbox">
                                <div class="contactpageimageicon">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                                <div class="contactpagecontentbox">
                                    <h3>Office Address</h3>
                                    <p class="text">
                                        <a href="https://maps.app.goo.gl/rsGk92QUTS5ujfANA" target="_blank">
                                            5101 Santa Monica Blvd Ste 8 Los Angeles, CA 90029
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contactpageimagecontentboxflexitembox">
                            <div class="contactpageimageiconflexbox">
                                <div class="contactpageimageicon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="contactpagecontentbox">
                                    <h3>Phone Number</h3>
                                    <p class="text">
                                        <a href="tel:+12134447693">+1-(213) 4447-693</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contactpageimagecontentboxflexitembox">
                            <div class="contactpageimageiconflexbox">
                                <div class="contactpageimageicon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="contactpagecontentbox">
                                    <h3>Email Us</h3>
                                    <div class="text">
                                        <p class="text">
                                            <strong>Sales Requests: </strong>
                                            <a href="mailto:sales@vedeshra.com">sales@vedeshra.com</a>
                                        </p>
                                        <p class="text">
                                            <strong>Support Requests: </strong>
                                            <a href="mailto:support@vedeshra.com">support@vedeshra.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contactpageflexitemboxform">
                    <div class="contactpageflexitemboxformbox">
                        @include('content.forms.contactform')
                        <div class="contactpagesubmessagebox">
                            <p>
                                In a hurry? Give us a call now at <a href="tel:+12134447693">+1-(213) 4447-693</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Map Section --}}
    <section class="contactmapsection section">
        <div class="container">
            <div class="sectiontitlebox">
                <p class="subtitle">Let's Connect</p>
                <h2 class="sectiontitle">Vedeshra Technologies Headquarters</h2>
                <p class="sectioncontent">Conveniently, located in the heart of Los Angeles, ready to serve you</p>
            </div>
            <div class="contactmapbox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.1548400369793!2d-118.3008925!3d34.0911736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b8aa698a2edf%3A0xc28f1abf2a65f8a!2s5101%20Santa%20Monica%20Blvd%2C%20Los%20Angeles%2C%20CA%2090029%2C%20USA!5e0!3m2!1sen!2sin!4v1735111882260!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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

    {{-- Industries Slider Section --}}
    @include('content.sections.industriesslider')

    {{-- Partner Section --}}
    @include('content.sections.partner')

@endsection
