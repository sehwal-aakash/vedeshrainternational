@extends('layouts/commonLayout')

@section('title')
    Web Design & Development in {{ $location }} | Vedeshra Technologies: Custom Websites & Solutions
@endsection

@section('meta')
    <meta name="title"
        content="Web Design & Development in {{ $location }} | Vedeshra Technologies: Custom Websites & Solutions">
    <meta name="description"
        content="Get expert web design and development services for {{ $location }} from Vedeshra Technologies. Stunning, responsive, and high-performance websites tailored to {{ $location }} businesses.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/locations/{{ $location }}/" />

    <meta property="og:title" content="Web Design & Development in {{ $location }} | Vedeshra Technologies">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/locations/{{ $location }}/" />
    <meta property="og:description"
        content="Vedeshra Technologies offers professional web design and development in {{ $location }} delivering custom websites, e-commerce, and responsive designs.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design & Development in {{ $location }} | Vedeshra Technologies">
    <meta name="twitter:description"
        content="Transform your online presence in {{ $location }} with Vedeshra Technologies' expert web design and development services. Get a fully optimized and user-friendly website today.">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Web Design & Development in {{$location}}",
  "provider": {
    "@type": "Organization",
    "name": "Vedeshra Technologies",
    "url": "https://vedeshra.com/"
  },
  "serviceType": "Custom Web Design & Development",
  "areaServed": "{{$location}}",
  "description": "Vedeshra Technologies provides cutting-edge web design and development for {{$location}}, including custom website creation, responsive design, UI/UX, and CMS development.",
  "offers": {
    "@type": "Offer",
    "price": "Custom",
    "priceCurrency": "USD",
    "url": "https://vedeshra.com/locations/{{$location}}/"
  },
  "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+12134447693",
    "contactType": "customer service",
    "email": "sales@vedeshra.com",
    "areaServed": "{{$location}}",
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
    {{-- Inner Hero Section --}}
    <section class="innerherosection section">
        <div class="container">
            <div class="innerheroflexbox">
                <div class="innerherocontentbox">
                    <h1>Expert Web Design & Development in {{ $location }}</h1>
                    <div class="innerherocontent">
                        <p>Grow your business in <strong>{{ $location }}</strong> with high-performing, visually
                            stunning, and user-friendly websites from Vedeshra Technologies. Our team delivers tailored
                            solutions for local startups, established organizations, and everything in between.</p>
                        <p>We focus on local market needs—responsive design, rapid load times, SEO optimization, and
                            seamless user journeys that help {{ $location }} businesses attract, engage, and convert
                            visitors into loyal customers.</p>
                        <p>Ready to elevate your online presence in {{ $location }}? Let us create a digital solution
                            that truly represents your brand and drives real results.</p>
                        <p><strong>Let's build something amazing together for {{ $location }}!</strong></p>
                    </div>
                    <div class="innerherobutton">
                        <a href="{{ route('contact') }}/" class="button">Get in Touch</a>
                    </div>
                </div>
                <div class="innerheroformbox">
                    @include('content.forms.innerheroform')
                </div>
            </div>
        </div>
    </section>

    {{-- Four Column Section --}}
    <section class="four-column-section section">
        <div class="container">
            <div class="four-column-section-flex-box">
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/web-design.png" loading="lazy"
                                alt="Web Design Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Custom Website Design</h3>
                            <p>Stand out in {{ $location }} with user-first, visually engaging websites tailored to
                                your brand identity.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/responsive.png" loading="lazy"
                                alt="Responsive Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Responsive & Fast</h3>
                            <p>Sites are mobile-friendly and fast-loading, ensuring optimal experience across all devices
                                for users in {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/good-feedback.png" loading="lazy"
                                alt="Good Feedback Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>SEO & Performance</h3>
                            <p>Dominate local search in {{ $location }} with SEO-driven structure and performance
                                optimization to drive more organic traffic.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/conversion.png" loading="lazy"
                                alt="Conversion Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Conversion-Focused</h3>
                            <p>Turn visitors into customers for your {{ $location }} business by strategic design and
                                compelling calls to action.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Image with Section --}}
    <section class="imagewithtextsection section reversed">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextfleximagebox">
                    <img src="https://vedeshra.com/assets/img/vectorimages/low-code-development-vector-img.png"
                        loading="lazy" alt="Web Development Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <h2>Innovation for {{ $location }}: Future-Ready Websites</h2>
                    <div class="imagewithtextcontent">
                        <p>A great website is more than beautiful visuals—it's a <strong>powerful business tool</strong>. We
                            align every design choice with your goals in {{ $location }}, blending advanced tech and
                            creativity to deliver results.</p>
                        <p>Our experts use the latest web technologies, creative design concepts, and performance
                            optimization. Whether for corporate, eCommerce, or portfolios, we guarantee fast, secure, and
                            conversion-focused platforms for {{ $location }}.</p>
                        <p>Let us help your {{ $location }} brand build trust, boost visibility, and drive ongoing
                            growth with a site built for your audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inner Services Grid Section --}}
    <section class="inner-services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Comprehensive Web Solutions for {{ $location }}</h2>
                <p>Vedeshra Technologies delivers a full spectrum of web design and development services across
                    {{ $location }}. From captivating UI/UX to robust eCommerce and custom platforms, we make sure your
                    site is built for success.</p>
            </div>
            <div class="inner-services-grid-box">
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/front-end-programming.png"
                                loading="lazy" alt="Front End Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Custom Website Design</h3>
                            <p>Bespoke, visually captivating websites to express your brand for {{ $location }}
                                audiences. Modern, intuitive, seamless across all devices.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/web.png" loading="lazy"
                                alt="Ecommerce Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Ecommerce Development</h3>
                            <p>Online stores with secure payments, smooth navigation, and proven conversion features for
                                businesses in {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/ui-ux.png" loading="lazy"
                                alt="UI UX Design Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>UI/UX Design</h3>
                            <p>Interactive and engaging experiences to boost user satisfaction and conversions for brands in
                                {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/web-maintenance.png" loading="lazy"
                                alt="Website Maintenance Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Website Redesign & Maintenance</h3>
                            <p>Transform your outdated site for {{ $location }} markets, with fresh designs and ongoing
                                security/performance updates.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/seo.png" loading="lazy"
                                alt="SEO Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>SEO & Performance Optimization</h3>
                            <p>Improve your website’s speed, search engine ranking, and user engagement to grow your organic
                                reach in {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/cms-icon.png" loading="lazy"
                                alt="CMS Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>CMS & Custom Development</h3>
                            <p>Flexible content management systems or fully custom builds to scale with your
                                {{ $location }} business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tools Section --}}
    <section class="tools-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Top Tools for Web Design in {{ $location }}</h2>
                <p>We leverage industry-leading web design and development tools for seamless builds, efficient workflows,
                    and outstanding user experiences in {{ $location }}.</p>
            </div>
            <div class="tools-flex-box">
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/figma.png" loading="lazy" alt="Figma Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/adobe-xd.png" loading="lazy"
                            alt="XD Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/sketch.png" loading="lazy"
                            alt="Sketch Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/invision.png" loading="lazy"
                            alt="inVision Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-web-designer.png" loading="lazy"
                            alt="Google Web Designer Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="inner-page-cta-section section">
        <div class="container">
            <div class="inner-page-cta-box">
                <h2>Talk to a Web Design Expert for {{ $location }}</h2>
            </div>
            <div class="inner-page-cta-button-flex-box">
                <div class="inner-page-cta-button-flex-item-box">
                    <button class="get-in-touch-popup-box">Get a Quote</button>
                    @include('content.popups.mainpopup')
                </div>
                <div class="inner-page-cta-button-flex-item-box">
                    <a href="" class="button secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Image with Section --}}
    <section class="imagewithtextsection section">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextcontentbox">
                    <h2>Transforming Ideas into Digital Experiences in {{ $location }}</h2>
                    <div class="imagewithtextcontent">
                        <p>Blend creativity and technology for websites that engage, convert, and fuel {{ $location }}
                            growth. Every detail aligns with your brand and local audience needs.</p>
                        <p>Expect responsive, fast, and conversion-optimized layouts. Clean interfaces and intuitive
                            navigation make sure {{ $location }} visitors stay and take action—building your business
                            one click at a time.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="/assets/img/vectorimages/web-vector-image-01.png" loading="lazy"
                        alt="Web Development Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Strategy Steps Section --}}
    <section class="strategy-steps-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Our Web Design Strategy for {{ $location }}</h2>
            </div>
            <div class="strategy-steps-grid-box">
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>1</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Discovery & Research</h3>
                            <p>Analyze {{ $location }}'s market, audience, and competitors for data-driven strategy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>2</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Planning & Wireframing</h3>
                            <p>Design wireframes and site structure for a seamless journey for {{ $location }}
                                visitors.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>3</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Creative UI/UX Design</h3>
                            <p>Craft engaging interfaces enhancing user interaction and local brand identity in
                                {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>4</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Development & Coding</h3>
                            <p>Build a responsive, fast, and SEO-friendly website using the latest technologies for
                                {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>5</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Content Integration</h3>
                            <p>Add captivating copy, images, and media for a compelling user experience in
                                {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>6</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Testing & Optimization</h3>
                            <p>Rigorous testing for functionality, speed, security, and mobile responsiveness before launch
                                in {{ $location }}.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>7</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Launch & Maintenance</h3>
                            <p>Continuous monitoring, updates, and support to keep your website running at its best in
                                {{ $location }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Technology Tabber Section --}}
    @include('content.sections.technology-tabber-section')

    {{-- Services Slider Section --}}
    @include('content.sections.servicesslider')

    {{-- Platform Section --}}
    <section class="platform-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Empowering {{ $location }} Websites with Leading Platforms</h2>
                <p>Vedeshra Technologies works with the best platforms to build scalable, secure websites for businesses and
                    organizations in {{ $location }}.</p>
            </div>
            <div class="platform-grid-box">
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/shopify-logo.png" loading="lazy"
                                alt="Shopify Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Shopify</h3>
                            <div class="platformgridcontent">
                                <p>
                                    High-performance Shopify stores for {{ $location }} with custom themes, secure
                                    gateways, and seamless navigation.
                                </p>
                                <p>
                                    Advanced tools for efficient inventory, marketing, and mobile optimization—scale your
                                    {{ $location }} eCommerce.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/woocommerce-logo.png" loading="lazy"
                                alt="Woocommerce Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>WordPress / WooCommerce</h3>
                            <div class="platformgridcontent">
                                <p>
                                    SEO-optimized, responsive, and easy-to-manage WordPress sites for {{ $location }}.
                                    Fast, secure, and feature-rich development.
                                </p>
                                <p>
                                    WooCommerce delivers custom eCommerce features, checkout, and performance for
                                    {{ $location }} retailers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/wix-logo.png" loading="lazy"
                                alt="Wix Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Wix / Editor X / Wix Studio</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Visually engaging, highly customized Wix sites for {{ $location }}, with
                                    professional design and structured management.
                                </p>
                                <p>
                                    Built-in SEO, optimization, and interactive design for modern digital success in
                                    {{ $location }}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/magento-logo.png" loading="lazy"
                                alt="Magento Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Magento</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Scalable, feature-rich Magento stores to meet the needs of enterprise and high-volume
                                    eCommerce in {{ $location }}.
                                </p>
                                <p>
                                    Custom integrations, performance upgrades, and secure payment processing for seamless
                                    experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/webflow-logo.png" loading="lazy"
                                alt="Webflow Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Webflow</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Fully responsive and modern Webflow websites for {{ $location }}, with structured
                                    content and precision design.
                                </p>
                                <p>
                                    SEO-friendly, fast, and easy to update—ideal for {{ $location }} businesses seeking
                                    advanced performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/joomla-logo.png" loading="lazy"
                                alt="Joomla Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Joomla</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Content-driven Joomla websites tailored for businesses and organizations in
                                    {{ $location }}. Advanced customization and security for growing needs.
                                </p>
                                <p>
                                    Multilingual support and scalable functionality ensure robust content management in
                                    {{ $location }}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/drupal-logo.png" loading="lazy"
                                alt="Drupal Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Drupal</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Highly secure and scalable Drupal-powered websites for enterprises, government, and
                                    content-rich platforms in {{ $location }}.
                                </p>
                                <p>
                                    Modular architecture with advanced security, integrations, and optimization for complex
                                    requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/squarespace-logo.png" loading="lazy"
                                alt="Squarespace Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Squarespace</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Professionally designed Squarespace solutions, ideal for portfolios, service-based, and
                                    content-focused businesses in {{ $location }}.
                                </p>
                                <p>
                                    SEO-friendly layouts, mobile optimization, and eCommerce features tailored for your
                                    brand in {{ $location }}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/custom-web-development.png"
                                loading="lazy" alt="Custom Web Development Icon">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Custom Development</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Unique, fully tailored web solutions for {{ $location }}, using HTML, CSS,
                                    JavaScript, and advanced frameworks.
                                </p>
                                <p>
                                    Secure, scalable, high-performance sites with custom functionalities, integrations, and
                                    data handling.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industry Slider Section --}}
    @include('content.sections.industriesslider')

    {{-- Image with Section --}}
    <section class="imagewithtextsection section reversed" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextfleximagebox">
                    <img src="https://vedeshra.com/assets/img/vectorimages/website-designer-concept.png" loading="lazy"
                        alt="Web Designer Concept Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <h2>Stunning Websites for {{ $location }} Businesses</h2>
                    <div class="imagewithtextcontent">
                        <p>A website is more than visuals—it's a <strong>powerful tool to build brand identity and
                                engagement</strong> in {{ $location }}. We combine creativity, technical excellence,
                            and seamless user experience so you leave a lasting digital impression.</p>
                        <p>Every project starts with understanding the unique audience and goals of {{ $location }}
                            brands. We focus on intuitive navigation, responsive layouts, and modern aesthetics—helping your
                            site perform flawlessly for all users in {{ $location }}.</p>
                        <p>Expertise in <strong>UI/UX, performance optimization, and conversion optimization</strong>
                            ensures your website attracts and retains loyal customers. From eCommerce to portfolios, all
                            sites are fast, secure, and customized for {{ $location }} success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Web Design FAQs for {{ $location }}</h2>
                <p>Vedeshra Technologies is committed to transparency and client success in {{ $location }}. Explore
                    our frequently asked questions about web design services, process, and technology for
                    {{ $location }}.</p>
            </div>
            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What web design services are offered for {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p><strong>Custom website design, UI/UX optimization, eCommerce development, CMS solutions, and
                                performance enhancements</strong> are available for {{ $location }} businesses. The
                            focus is responsive, SEO-friendly, and high-performance sites tailored for local needs.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How long does a website take to build in {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Timeframes depend on project complexity—simple websites average <strong>2-4 weeks</strong>,
                            advanced eCommerce or custom builds may require <strong>6-8 weeks</strong>. Project management
                            ensures timely delivery in {{ $location }}.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Will my site be mobile-friendly and SEO-optimized for {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Absolutely—Vedeshra Technologies creates <strong>fully responsive, mobile-optimized
                                websites</strong> and applies best SEO practices so your site ranks strongly in
                            {{ $location }} and delivers a great user experience.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What technologies do you use for {{ $location }} web development?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Modern frameworks including <strong>HTML5, CSS3, JavaScript, React, Next.js, Laravel, WordPress,
                                Shopify, and Magento</strong> are used. All sites for {{ $location }} are secure,
                            scalable, and performance-driven.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can {{ $location }} business owners update website content after launch?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes—if built on <strong>CMS platforms</strong> like WordPress, Shopify, or Webflow, content
                            updates are easy. For custom sites, training and ongoing support are provided for
                            {{ $location }} clients.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How can I get started with Vedeshra Technologies in {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Contact us for a <a href="{{ route('contact') }}/"><strong>free consultation</strong></a>,
                            discuss your needs, and our specialist team will guide you through every step in building your
                            new {{ $location }} website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
