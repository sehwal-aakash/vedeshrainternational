@extends('layouts/commonLayout')

@section('title') Industries We Serve | Vedeshra Technologies: Custom Solutions for Every Sector @endsection

@section('meta')
<meta name="title" content="Industries We Serve | Vedeshra Technologies: Custom Solutions for Every Sector">
<meta name="description" content="Explore the industries Vedeshra Technologies serves, from eCommerce and healthcare to finance and education. Tailored web and marketing solutions for your sector.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Vedeshra Technologies LLC">

<link rel="canonical" href="https://vedeshra.com/industries/" />

<meta property="og:title" content="Industries We Serve | Vedeshra Technologies">
<meta property="og:site_name" content="Vedeshra Technologies">
<meta property="og:url" content="https://vedeshra.com/industries/">
<meta property="og:description" content="Discover how Vedeshra Technologies provides custom web design and digital marketing solutions for diverse industries like healthcare, eCommerce, and finance.">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Industries We Serve | Vedeshra Technologies">
<meta name="twitter:description" content="Vedeshra Technologies delivers custom solutions for industries including eCommerce, healthcare, education, and finance. Let us transform your sector.">


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Industry-Specific Web & Digital Solutions",
  "provider": {
    "@type": "Organization",
    "name": "Vedeshra Technologies",
    "url": "https://vedeshra.com/"
  },
  "serviceType": "Custom Web Design & Digital Marketing for Industries",
  "areaServed": ["US", "GB", "CA", "AF"],
  "description": "Vedeshra Technologies provides industry-specific solutions, including custom web development, SEO, and digital marketing for healthcare, eCommerce, finance, education, and more.",
  "offers": {
    "@type": "Offer",
    "price": "Custom",
    "priceCurrency": "USD",
    "url": "https://vedeshra.com/industries/"
  },
  "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+17374436593",
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
    <section class="sectionbannersection section" style="background-image: url('/assets/img/bannerimages/industries-banner.jpg')">
        <div class="container">
            <h1 class="bannertitle">Industries</h1>
        </div>
    </section>

    {{-- Image with Text Section --}}
    <section class="imagewithtextsection section">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextcontentbox">
                    <h2>Driving Industry Success with <br> Comprehensive Services</h2>
                    <div class="imagewithtextcontent">
                        <p>At Vedeshra Technologies, we specialize in delivering tailored digital solutions across a variety of industries. In the <strong> Retail and E-commerce sector</strong>, we enhance online shopping experiences to drive sales and customer loyalty. Our <strong> Healthcare</strong> solutions focus on improving patient engagement and streamlining processes. We empower the <strong>Education sector</strong> with innovative tools for interactive learning and administration. In <strong>Finance and Banking,</strong> we provide secure, user-friendly solutions that build trust. Lastly, our expertise in <strong> Travel and Hospitality </strong> optimizes booking processes, ensuring memorable customer experiences. We are dedicated to driving success across all sectors we serve.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/vectorimages/vector-img-04.png" alt="Industries Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section --}}
    @include('content.sections.featuresection')

    {{-- Services Grid Section --}}
    <section class="services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <p class="subtitle">Our Industries</p>
                <h2 class="sectiontitle">Innovative Digital Solutions for Every Industry</h2>
                <p class="sectioncontent">Transforming Businesses with cutting-edge Technology and tailored Digital Solutions across various Industries.</p>
            </div>
            <div class="servicesgridbox">
                @forelse($industries as $industry)
                    <div class="servicesgriditembox">
                        <div class="servicesiconbox">
                            <img src="{{ $industry->icon }}" alt="{{ $industry->title }} Icon">
                        </div>
                        <div class="servicescontentbox">
                            <h3>
                                <a href="/industries/{{ $industry->slug }}/">{{ $industry->title }}</a>
                            </h3>
                            <p>
                               {{ $industry->short_description }} 
                            </p>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="4">No Industries found.</td>
                    </tr>
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="cta-section section">
        <div class="container">
            <div class="ctaflexbox">
                <div class="ctacontentflexitembox">
                    <h2>Unlock Your Business Potential</h2>
                    <p>Expert consulting services to navigate digital challenges and drive growth. Transform your business today!</p>
                </div>
                <div class="ctacontentflexbuttonbox">
                    <button class="get-in-touch-popup-box">Get in Touch</button>
                    @include('content.popups.mainpopup')
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose us Section --}}
    @include('content.sections.whychooseus')

    {{-- Partner Section --}}
    @include('content.sections.partner')
@endsection
