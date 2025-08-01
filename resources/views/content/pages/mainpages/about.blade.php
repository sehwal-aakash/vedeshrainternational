@extends('layouts/commonLayout')

@section('title') About Us @endsection

@section('meta')
<meta name="title" content="About Us | Vedeshra Technologies: Turning Visions into Pixels">
<meta name="description" content="Learn more about Vedeshra Technologies, a leading web design and digital marketing agency. Discover our journey, mission, and commitment to excellence.">
<meta name="keywords" content="About Vedeshra Technologies, Web Design Agency, Digital Marketing Experts, About Us Page, Vedeshra Technologies Mission, Vision, Web Development Company">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="30 days">
<meta name="author" content="Vedeshra Technologies LLC">

<link rel="canonical" href="https://vedeshra.com/about-us/" />

<meta property="og:title" content="About Us | Vedeshra Technologies">
<meta property="og:site_name" content="Vedeshra Technologies">
<meta property="og:url" content="https://vedeshra.com/about-us/">
<meta property="og:description" content="Discover the story behind Vedeshra Technologies. Explore our mission to deliver cutting-edge web design and digital marketing solutions worldwide.">
<meta property="og:type" content="website">
<meta property="og:image" content="">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="About Us | Vedeshra Technologies">
<meta name="twitter:description" content="Explore the mission and vision of Vedeshra Technologies. Learn how we are transforming ideas into impactful digital solutions.">

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "name": "About Us",
      "url": "https://vedeshra.com/about-us/",
      "description": "Vedeshra Technologies is committed to delivering top-notch web design and digital marketing solutions worldwide.",
      "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+17374436593",
        "contactType": "customer service",
        "email": "sales@vedeshra.com",
        "areaServed": ["US","GB","CA","AF"],
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
    <section class="sectionbannersection section" style="background-image: url('/assets/img/bannerimages/about-us-banner.jpg')">
        <div class="container">
            <h1 class="bannertitle">About Us</h1>
        </div>
    </section>

    {{-- About Content Section --}}
    <section class="about-content section">
        <div class="container">
            <div class="aboutcontentflexbox">
                <div class="aboutcontentflexitembox">
                    <h2>Digitally Transforming and Accelerating Businesses</h2>
                </div>
                <div class="aboutcontentflexitembox">
                    <p class="subtitle">
                        Driving innovation, enhancing digital presence, and empowering businesses to achieve growth in a rapidly evolving market.
                    </p>
                    <p class="content">
                        Vedeshra Technologies delivers tailored solutions that drive business growth through innovative strategies. We streamline processes, optimize digital platforms, and empower brands to reach new heights, ensuring sustained success in a dynamic digital landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Image with Text Section --}}
    <section class="imagewithtextsection section">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextcontentbox">
                    <p class="subtitle">Our Vision</p>
                    <h2>Turning Visions into Pixels</h2>
                    <div class="imagewithtextcontent">
                        <p>At Vedeshra Technologies, our vision is to seamlessly transform your ideas into reality through cutting-edge digital solutions. By blending creativity with technology, we help businesses bring their <strong style="color: var(--primary-bg-color);">visions to life, pixel by pixel.</strong> Our mission is to empower organizations to thrive in the digital era by creating innovative, impactful, and user-friendly experiences. We are committed to shaping the future of businesses by turning their unique visions into digital success stories, ensuring their growth and sustainability in a rapidly evolving marketplace.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/vectorimages/vector-img-01.png" alt="Analytics Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- What we do --}}
    @include('content.sections.what-we-do')

    {{-- Image with Text Section --}}
    <section class="imagewithtextsection section reversed">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/vectorimages/vector-img-03.png" alt="Web Development Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <p class="subtitle">Our Vision</p>
                    <h2>Empowering Businesses through Digital Innovation</h2>
                    <div class="imagewithtextcontent">
                        <p>At Vedeshra Technologies, our mission is to empower businesses by delivering innovative digital solutions that foster growth and efficiency. We are dedicated to helping organizations unlock their potential in the digital space by providing tailored strategies, advanced technologies, and unmatched creativity. Our goal is to create seamless digital experiences that drive engagement, enhance operational effectiveness, and ensure long-term success. We believe in turning complex challenges into opportunities, guiding businesses toward achieving their digital ambitions with precision and expertise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Slider Section --}}
    @include('content.sections.servicesslider')

    {{-- CTA Container Section --}}
    @include('content.sections.ctacontainersection')

    {{-- Industries Slider Section --}}
    @include('content.sections.industriesslider')

    {{-- Contact Section --}}
    @include('content.sections.contactsection')

@endsection
