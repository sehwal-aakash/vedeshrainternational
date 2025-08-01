@extends('layouts/commonLayout')

@section('title') Vedeshra Technologies | Web Design & Digital Marketing Experts @endsection

@section('meta')
    <meta name="title" content="Vedeshra Technologies | Web Design & Digital Marketing Experts">
    <meta name="description" content="Boost your online presence with Vedeshra Technologies – a leading Web Design & Digital Marketing Agency. Stunning websites, powerful marketing, and SEO strategies that drive growth.">
    <meta name="keywords" content="Web Design, Digital Marketing, SEO, Website Development, Branding, Online Marketing, Web Agency, Vedeshra Technologies">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/" />

    <meta property="og:title" content="Vedeshra Technologies | Turning Visions into Pixels - Web Design & Marketing">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/">
    <meta property="og:description" content="Partner with Vedeshra Technologies for cutting-edge web design and digital marketing. We create high-impact websites and results-driven marketing strategies.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vedeshra Technologies | Web Design & Marketing Experts">
    <meta name="twitter:description" content="Your trusted partner for web design, branding, and digital marketing. Elevate your business with Vedeshra Technologies.">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "name": "Vedeshra Technologies",
          "url": "https://vedeshra.com/",
          "description": "A top-rated Web Design & Digital Marketing Agency dedicated to helping businesses grow online with innovative design and marketing solutions."
        },
        {
          "@type": "Organization",
          "name": "Vedeshra Technologies",
          "url": "https://vedeshra.com/",
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
      ]
    }
    </script>
@endsection


@section('content')
    {{-- Hero Section --}}
    <section class="home-hero-section section">
        <div class="container">
            <div class="herosectionflexbox">
                <div class="herosectionflexcontentbox">
                    <h1>
                        <span class="beforefocussedtext">Elevate your brand with</span>
                        <span class="focussedtext">Vedeshra</span>
                        <span class="afterfocussedtext">to the next level</span>
                    </h1>
                    <p>
                        Focus on the eye of B2B, B2C, and D2C brands, Vedeshra Technologies helps companies grow by tackling their biggest problems, like social media engagement, website performance, customer retention, and brand positioning, and assuring better knowledge and planning.
                    </p>
                    <a href="/contact/" class="button">Let's Connect</a>
                </div>
                <div class="herosectionfleximagebox">
                    <img src="/assets/img/sections/herosection/herobanner.webp" loading="eager" fetchpriority="high" alt="Web Designing and Development Image">
                </div>
            </div>
        </div>
    </section>
    {{-- Partner Section --}}
    @include('content.sections.partner')

    {{-- Why Choose Us Section --}}
    @include('content.sections.whychooseus')

    {{-- Image with Text Section --}}
    <section class="imagewithtextsection section">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextcontentbox">
                    <h2>Boost Productivity and Management</h2>
                    <div class="imagewithtextcontent">
                        <p>If your website is not performing effectively in terms of load time, core functions, UI/UX, and you fail to monitor the appropriate metrics, such as customer behavior with regard to devices, browsers, demographics, customer personas, etc., you are losing money in addition to the problems caused by low ROAS or an improper engagement strategy. Your other actions are insignificant. We will assist you in optimizing the functionality of your tech stack and advise you how to monitor on</p>
                        <ul>
                            <li>
                                <a href="">Website Speed Optimization</a>
                            </li>
                            <li>
                                <a href="/services/social-media-marketing/">Social Media Marketing</a>
                            </li>
                            <li>
                                <a href="/services/web-design-and-development/">Website UI/UX Development</a>
                            </li>
                            <li>
                                <a href="">User Behavior Tracking</a>
                            </li>
                            <li>
                                <a href="">GTM Analysis</a>
                            </li>
                        </ul>
                    </div>
                    <div class="imagewithtextbuttonbox">
                        <a class="button" href="/contact/">Learn More</a>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/sections/imagewithtextsection/webdevlopmenprojects-1.webp" loading="lazy" alt="Web Design Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Image with Text Section  --}}
    <section class="imagewithtextsection section reversed" style="background-color: var(--primary-bg-color); color: var(--white-font-color);">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/sections/imagewithtextsection/webdevelopmentdesign-1.png" loading="lazy" alt="Web Development Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <h2 style="color: rgb(255, 255, 255);">Business Consultation</h2>
                    <div class="imagewithtextcontent">
                        <p>Unlock the full potential of your business with our expert business consultation services. We analyze your operations, identify growth opportunities, and provide strategic guidance tailored to your unique goals. From optimizing processes to implementing innovative solutions, our consultants are dedicated to driving your success. Elevate your business strategy with our comprehensive consultation services.</p>
                        <ul>
                            <li>
                                <a href="/services/web-design-and-development/">Strategic Web Design</a>
                            </li>
                            <li>
                                <a href="">Tech Stack Optimization</a>
                            </li>
                            <li>
                                <a href="/services/seo-services/">Digital Marketing Strategy</a>
                            </li>
                            <li>
                                <a href="">Conversion Rate Optimization</a>
                            </li>
                            <li>
                                <a href="">Performance Analytics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="imagewithtextbuttonbox">
                        <a class="button" href="/contact/">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Slider Section --}}
    @include('content.sections.servicesslider')

    {{-- CTA Text Center Section --}}
    <section class="cta-text-center section">
        <div class="container">
            <div class="ctatextcentersectionbox">
                <h2>Empower your Business Evolution with Vedeshra Technologies</h2>
                <p>Experience Business Transformation with Vedeshra Technologies - pioneering solutions that empower evolution, drive innovation, and elevate your enterprise to new heights of success and efficiency</p>
                <a href="/contact/" class="button">Unlock Transformation</a>
            </div>
        </div>
    </section>

    {{-- Industries Slider Section --}}
    @include('content.sections.industriesslider')

    {{-- Steps Section --}}
    @include('content.sections.stepssection')

    {{-- Technology Tabber Section --}}
    @include('content.sections.technology-tabber-section')

    {{-- Contact Section --}}
    @include('content.sections.contactsection')

@endsection
