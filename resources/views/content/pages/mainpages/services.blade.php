@extends('layouts/commonLayout')

@section('title') Our Services | Vedeshra Technologies: Web Design & Digital Marketing Experts @endsection

@section('meta')
<meta name="title" content="Our Services | Vedeshra Technologies: Web Design & Digital Marketing Experts">
<meta name="description" content="Discover the range of services offered by Vedeshra Technologies, including web design, development, SEO, and digital marketing. Tailored solutions for your business growth.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Vedeshra Technologies LLC">

<link rel="canonical" href="https://vedeshra.com/services/" />

<meta property="og:title" content="Our Services | Vedeshra Technologies">
<meta property="og:site_name" content="Vedeshra Technologies">
<meta property="og:url" content="https://vedeshra.com/services/">
<meta property="og:description" content="Explore the professional services at Vedeshra Technologies, from stunning web design and e-commerce development to impactful digital marketing strategies.">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Our Services | Vedeshra Technologies">
<meta name="twitter:description" content="Unlock your business potential with Vedeshra Technologies' services: web design, SEO, digital marketing, and custom development solutions.">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Web Design & Digital Marketing",
  "provider": {
    "@type": "Organization",
    "name": "Vedeshra Technologies",
    "url": "https://vedeshra.com/"
  },
  "serviceType": "Digital Marketing & Web Development",
  "areaServed": ["US", "GB", "CA", "AF"],
  "description": "Providing top-notch web design, SEO, and digital marketing services.",
  "offers": {
    "@type": "Offer",
    "price": "Custom",
    "priceCurrency": "USD",
    "url": "https://vedeshra.com/services/"
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
    <section class="sectionbannersection section" style="background-image: url('/assets/img/bannerimages/services-banner.jpg')">
        <div class="container">
            <h1 class="bannertitle">Services</h1>
        </div>
    </section>

    {{-- Image with Text Section --}}
    <section class="imagewithtextsection section">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextcontentbox">
                    <h2>Empowering Your Business with <br> Comprehensive Services</h2>
                    <div class="imagewithtextcontent">
                        <p>At Vedeshra Technologies, we pride ourselves on delivering a diverse array of digital solutions meticulously crafted to meet the distinct requirements of businesses across various sectors. Our offerings encompass <strong>Web Development, Ecommerce Solutions, Digital Marketing, and more </strong>, each tailored to foster growth and streamline operations. We recognize that every organization has unique challenges, which is why we adopt a personalized approach to each project. Our seasoned team collaborates closely with clients, ensuring we fully understand their objectives and pain points. By integrating innovative technologies and strategies, we empower businesses to not only navigate the digital landscape but also thrive within it. Whether you seek to enhance your online presence, optimize customer interactions, or drive revenue growth, Vedeshra Technologies is your trusted partner in achieving lasting success.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/vectorimages/vector-img-02.png" alt="Analytics Vector Image">
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
                <p class="subtitle">Our Comprehensive Services</p>
                <h2 class="sectiontitle">Innovative Solutions for Your Business</h2>
                <p class="sectioncontent">Providing cutting-edge technology services tailored to your needs.</p>
            </div>
            <div class="servicesgridbox">
                @forelse($services as $service)
                    <div class="servicesgriditembox">
                        <div class="servicesiconbox">
                            <img src="{{ $service->icon }}" alt="{{ $service->title }} Icon">
                        </div>
                        <div class="servicescontentbox">
                            <h3>
                                <a href="/services/{{ $service->slug }}/">{{ $service->title }}</a>
                            </h3>
                            <p>
                               {{ $service->short_description }} 
                            </p>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="4">No services found.</td>
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
