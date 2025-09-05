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
    "telephone": "+911169311084",
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
                    <h1>Elevate Your Online Presence with Expert Web Development in {{ $location }}!</h1>
                    <div class="innerherocontent">
                        <p>In the bustling digital marketplace of {{ $location }}, your website is your most critical
                            asset—it's
                            your 24/7 salesperson, brand ambassador, and primary engine for growth. At Vedeshra
                            Technologies, we don't just build websites; we craft powerful digital experiences. We specialize
                            in world-class <strong>custom web development</strong> designed to captivate your audience and
                            convert visitors into loyal customers.</p>
                        <p>A generic template simply won't cut it in today's competitive landscape. Your business deserves a
                            platform that is as unique as your vision. Our expert team delivers everything from dynamic
                            <strong>web application development</strong> for complex business processes to robust
                            <strong>eCommerce solutions</strong> that drive sales. We ensure all our projects result in
                            fully <strong>responsive websites</strong>, guaranteeing a flawless user experience on any
                            device, from desktops to smartphones.
                        </p>
                        <p>Choosing Vedeshra Technologies means partnering with a team dedicated to your success. Our
                            strategic approach fuses creative design with technical excellence, focusing on lightning-fast
                            performance, intuitive navigation, and search engine optimization from the ground up. We build a
                            scalable digital asset that not only meets your current needs but also grows with your business.
                        </p>
                        <p><strong>Ready to transform your digital footprint in {{ $location }}? Let's build a website
                                that delivers results.</strong></p>
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
                            <p>Our bespoke web designs reflect your brand's unique identity, offering an intuitive and
                                engaging journey for users in {{ $location }}.</p>
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
                            <p>We engineer performance-tuned websites with mobile-first responsiveness, guaranteeing optimal
                                performance on all screens for your audience in {{ $location }}.</p>
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
                            <p>Our websites are built to be search-engine ready, boosting your visibility to attract
                                targeted organic visitors searching in {{ $location }}.</p>
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
                            <p>Our results-driven approach focuses on converting your {{ $location }} traffic into
                                measurable outcomes, turning website visits into real business growth</p>
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
                    <h2>Innovating Future-Ready Websites for the {{ $location }} Market</h2>
                    <div class="imagewithtextcontent">
                        <p>In the dynamic economy of <strong>{{ $location }}</strong>, a website must be more than a
                            digital brochure—it must be your most powerful engine for growth. At <strong>Vedeshra
                                Technologies</strong>, we architect digital experiences where every design element and line
                            of code serves a strategic purpose: to engage your target audience, drive meaningful
                            conversions, and build lasting brand value.</p>
                        <p>Our approach fuses cutting-edge technology with user-centric creative design. Through expert
                            <strong>custom web development</strong>, we build everything from sophisticated corporate
                            platforms to high-volume <strong>eCommerce solutions</strong>. By integrating advanced
                            performance optimization and robust security protocols, we deliver a digital platform that gives
                            your business in <strong>{{ $location }}</strong> a distinct competitive advantage.
                        </p>
                        <p>The result is a scalable, high-performance website that does more than just impress—it performs.
                            We provide an intuitive user interface built on an SEO-friendly structure, engineered to enhance
                            your visibility, build authority in your industry, and deliver a superior return on investment.
                        </p>
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
                        <p>Every groundbreaking digital product begins with a powerful idea. At Vedeshra Technologies, we
                            specialize in taking your core concepts and business vision and translating them into a clear,
                            strategic blueprint. We collaborate closely with our clients in
                            <strong>{{ $location }}</strong> to refine and elevate their initial ideas, ensuring the
                            final product is not only innovative but also perfectly aligned with market needs.
                        </p>
                        <p>Our transformation process is where vision meets execution. Through meticulous <strong>custom web
                                development</strong>, our expert team engineers these ideas into tangible, high-performance
                            platforms. We weave together compelling UI/UX design, agile development practices, and robust
                            backend architecture to build dynamic, fully <strong>responsive websites</strong> that are both
                            beautiful and powerful.</p>
                        <p>The final result is more than just a website—it is a seamless and memorable digital experience
                            for your end-users. We deliver an intuitive user journey that fosters engagement, builds brand
                            loyalty, and drives conversions. This focus on the complete user experience is how we empower
                            businesses in <strong>{{ $location }}</strong> to create a lasting impact and achieve
                            significant digital growth.</p>
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
                    <h2>Architecting High-Performance Websites for Measurable Growth in {{ $location }}</h2>
                    <div class="imagewithtextcontent">
                        <p>For businesses in <strong>{{ $location }}</strong>, sustainable growth begins with a
                            powerful digital foundation. Our philosophy is to architect websites where performance is a core
                            feature, not an afterthought. We build every digital platform with scalability, security, and
                            speed at its heart, creating a resilient and future-proof asset designed to support your
                            long-term business ambitions.</p>
                        <p>High performance is achieved through meticulous engineering. Our <strong>custom web
                                development</strong> process prioritizes lean, optimized code and fast asset delivery. We
                            ensure all our <strong>responsive websites</strong> excel in Google's Core Web Vitals, leading
                            to a superior user experience, lower bounce rates, and favorable search engine rankings. This
                            technical excellence is the engine that powers your site's performance.</p>
                        <p>Ultimately, performance translates directly into measurable growth. A faster, more reliable
                            website leads to higher engagement, better conversion rates, and a stronger return on
                            investment. We equip our clients in <strong>{{ $location }}</strong> with a
                            high-performance digital tool that not only enhances their brand reputation but also
                            consistently drives leads, sales, and tangible business results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Your Strategic Web Development Questions, Answered</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we believe an informed client is an empowered partner. To
                    ensure complete clarity for businesses in <strong>{{ $location }}</strong>, we've compiled answers
                    to key questions about our strategic process, technical capabilities, and the tangible results we
                    deliver.</p>
            </div>
            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What should I budget for a professional website in {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Budgeting is a crucial first step, and we believe in complete transparency. While every project
                            is custom-built, costs generally scale with complexity. For instance, a professional
                            informational website will have a different budget than a large-scale <strong>eCommerce
                                solution</strong>.</p>
                        <p>The primary factors that determine the final investment include:</p>
                        <ul>
                            <li><strong>Scope & Complexity:</strong> The total number of pages and the intricacy of required
                                features.</li>
                            <li><strong>Custom Design & UX:</strong> The level of bespoke visual design and user experience
                                research involved.</li>
                            <li><strong>Special Functionality:</strong> The need for features like online payments, booking
                                systems, or custom integrations.</li>
                        </ul>
                        <p>To get a clear and accurate figure, we recommend a brief discovery call. This allows us to
                            understand your vision and provide a detailed, no-obligation estimate tailored to your goals in
                            <strong>{{ $location }}</strong>.
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What is your web development process for clients in {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Our process is collaborative and structured to ensure success. It typically follows these key
                            phases:</p>
                        <ul>
                            <li><strong>1. Discovery & Strategy:</strong> Understanding your business, goals, and audience
                                in <strong>{{ $location }}</strong>.</li>
                            <li><strong>2. UI/UX Design:</strong> Creating wireframes and mockups for an intuitive user
                                experience.</li>
                            <li><strong>3. Development:</strong> Writing clean, efficient code to bring the design to life.
                            </li>
                            <li><strong>4. Testing & QA:</strong> Rigorously testing for performance, compatibility, and
                                bugs.</li>
                            <li><strong>5. Launch:</strong> Deploying the website to your live server.</li>
                            <li><strong>6. Post-Launch Support:</strong> Providing ongoing maintenance and support for
                                growth.</li>
                        </ul>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What is the timeline for building a website for a business in {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Timelines for businesses in <strong>{{ $location }}</strong> vary based on the project's
                            scope. A standard corporate website often takes between 6 to 10 weeks. More complex projects,
                            like large <strong>eCommerce solutions</strong> or custom <strong>web application
                                development</strong>, can take 3 to 6 months. We establish a detailed project timeline from
                            the start, with clear milestones to keep you informed every step of the way.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How do you ensure my website will be found by customers in {{ $location }}?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We build every site on a foundation of technical SEO best practices and use <strong>responsive
                                design</strong> to ensure a perfect experience on any device. By focusing on clean code,
                            fast loading speeds, and a logical site structure, we help you rank higher in search results and
                            connect effectively with your target audience in <strong>{{ $location }}</strong>.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can you redesign my website to compete better in the {{ $location }} market?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, absolutely. We frequently partner with businesses to transform their outdated websites into
                            modern, high-performance digital assets. Our redesign process focuses on enhancing user
                            experience, boosting conversions, and aligning the site with your brand strategy to help you
                            compete effectively in the <strong>{{ $location }}</strong> market.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you offer ongoing support for businesses in {{ $location }} after launch?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Our partnership doesn't end at launch. We offer a range of website maintenance and support
                            packages that include security updates, performance monitoring, regular backups, and technical
                            assistance. This ensures your website remains secure and up-to-date, allowing you to focus on
                            running your business in <strong>{{ $location }}</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
