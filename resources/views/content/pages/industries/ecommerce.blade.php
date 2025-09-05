@extends('layouts/commonLayout')

@section('title')
    Web Design & Development | Vedeshra Technologies: Custom Websites & Solutions
@endsection

@section('meta')
    <meta name="title" content="Ecommerce Industry | Vedeshra Technologies">
    <meta name="description"
        content="Empowering ecommerce businesses with scalable digital solutions to drive sales, optimize customer journeys, and enhance global shopping experiences.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/industries/ecommerce/" />

    <meta property="og:title" content="Ecommerce Industry | Vedeshra Technologies">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/industries/ecommerce/">
    <meta property="og:description"
        content="Empowering ecommerce businesses with scalable digital solutions to drive sales, optimize customer journeys, and enhance global shopping experiences.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Ecommerce Industry | Vedeshra Technologies">
    <meta name="twitter:description"
        content="Empowering ecommerce businesses with scalable digital solutions to drive sales, optimize customer journeys, and enhance global shopping experiences.">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Vedeshra Technologies",
  "url": "https://vedeshra.com/",
  "description": "Vedeshra Technologies delivers end-to-end digital commerce solutions tailored for online retailers—enhancing shopping experience, performance, and conversion rates.",
  "areaServed": ["US", "GB", "CA", "AF"],
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
</script>
@endsection



@section('content')
    {{-- Inner Hero Section --}}
    <section class="innerherosection section">
        <div class="container">
            <div class="innerheroflexbox">
                <div class="innerherocontentbox">
                    <h1>Revolutionizing E-Commerce with Smart Digital Solutions</h1>
                    <div class="innerherocontent">
                        <p>At Vedeshra Technologies, we empower e-commerce businesses to scale efficiently with cutting-edge
                            digital transformation solutions tailored for online retail. Whether you're launching a new
                            e-commerce platform or optimizing an existing one, our team delivers high-performance, scalable,
                            and secure systems that drive online sales growth and enhance customer experiences.</p>
                        <p>From AI-driven personalization to seamless payment gateway integration, Vedeshra Technologies
                            offers end-to-end e-commerce development services that give your brand a competitive edge. We
                            specialize in creating mobile-optimized storefronts, intuitive user interfaces, and data-backed
                            marketing automation tools to boost conversion rates and reduce cart abandonment.</p>
                        <p>Join hands with Vedeshra Technologies to stay ahead in the ever-evolving e-commerce landscape.
                            Our expertise in cloud infrastructure, inventory management systems, and secure checkout
                            solutions ensures that your online store is not just functional—but future-ready. Let us help
                            you deliver unmatched value to your customers while scaling your e-commerce business
                            sustainably.</p>
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
                            <h3>Scalable E-Commerce Architecture</h3>
                            <p>Build robust and future-ready platforms that grow with your online business.</p>
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
                            <h3>Personalized Shopping Experiences</h3>
                            <p>Leverage AI to deliver tailored product recommendations and dynamic content.</p>
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
                            <h3>Seamless Omnichannel Integration</h3>
                            <p>Unify your online store across web, mobile, and marketplaces for consistent branding.</p>
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
                            <h3>Secure & Fast Checkout Systems</h3>
                            <p>Enhance user trust and reduce drop-offs with encrypted, high-speed transactions.</p>
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
                    <h2>Smart Technologies That Power Exceptional E-Commerce Experiences</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong>Vedeshra Technologies</strong>, we understand that e-commerce success hinges on more
                            than just a great product. That’s why we build intelligent, user-centric platforms using the
                            latest in cloud technology, API integrations, and headless commerce architecture. Our custom
                            solutions ensure smooth user journeys from browsing to checkout—enhancing customer satisfaction
                            and driving repeat purchases.</p>
                        <p>Our advanced data analytics and reporting tools provide real-time insights into shopper behavior,
                            helping you make informed decisions to optimize conversion rates, manage inventory efficiently,
                            and run targeted campaigns. With Vedeshra, your e-commerce platform becomes a powerful engine
                            for data-driven growth.</p>
                        <p>We don’t just build websites—we create end-to-end e-commerce ecosystems that are secure, fast,
                            and designed for scale. Whether you're managing a single brand or a multi-vendor marketplace,
                            our solutions support high traffic, integrate with third-party tools, and provide seamless
                            mobile commerce experiences, ensuring your business is always one step ahead.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inner Services Grid Section --}}
    <section class="inner-services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Comprehensive E-Commerce Solutions for Every Business Need</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we provide end-to-end e-commerce services tailored to your
                    goals. Whether it's platform selection, custom development, payment integration, or performance
                    optimization — we build powerful online stores that drive engagement and conversions.</p>
            </div>

            <div class="inner-services-grid-box">
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/front-end-programming.png"
                                loading="lazy" alt="Front End Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Custom E-Commerce Development</h3>
                            <p>Tailored online stores built for speed, scalability, and seamless user experiences across web
                                and mobile devices.</p>
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
                            <h3>Inventory & Order Management Systems</h3>
                            <p>Streamline your backend with automated inventory tracking, order processing, and real-time
                                synchronization tools.</p>
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
                            <h3>SEO & Performance Optimization</h3>
                            <p>Enhance visibility and website speed with technical SEO, content structuring, and code
                                optimization best practices.</p>
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
                            <h3>Secure Payment Gateway Integration</h3>
                            <p>Enable fast, encrypted, multi-currency checkout experiences with top-tier security and fraud
                                prevention protocols.</p>
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
                            <h3>Analytics & Conversion Tracking</h3>
                            <p>Gain actionable insights with advanced dashboards to monitor traffic, sales funnels, and user
                                interaction patterns.</p>
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
                            <h3>AI-Based Personalization</h3>
                            <p>Deliver unique shopping journeys using AI to recommend products, optimize pricing, and target
                                customer segments.</p>
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
                <h2>Powerful Tools That Drive E-Commerce Innovation</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we utilize cutting-edge e-commerce platforms and development
                    tools to build scalable, secure, and conversion-focused online stores. These tools enable us to
                    streamline operations, enhance user experience, and deliver measurable business results.</p>
            </div>
            <div class="tools-flex-box">
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/figma.png" loading="lazy"
                            alt="Shopify Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/adobe-xd.png" loading="lazy"
                            alt="Magento Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/sketch.png" loading="lazy"
                            alt="Stripe Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/invision.png" loading="lazy"
                            alt="Google Analytics Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-web-designer.png" loading="lazy"
                            alt="AWS (Amazon Web Services) Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="inner-page-cta-section section">
        <div class="container">
            <div class="inner-page-cta-box">
                <h2>Ready to Elevate Your E-Commerce Business?</h2>
            </div>
            <div class="inner-page-cta-button-flex-box">
                <div class="inner-page-cta-button-flex-item-box">
                    <button class="get-in-touch-popup-box">Get Free Consultation</button>
                    @include('content.popups.mainpopup')
                </div>
                <div class="inner-page-cta-button-flex-item-box">
                    <a href="{{ route('contact') }}" class="button secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Image with Section --}}
    <section class="imagewithtextsection section">
        <div class="container">
            <div class="imagewithtextflexbox">
                <div class="imagewithtextcontentbox">
                    <h2>Empower Your Online Store with Scalable E-commerce Solutions</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong>Vedeshra Technologies</strong>, we design user-centric e-commerce platforms that
                            prioritize smooth navigation, intuitive interfaces, and quick load times. Our focus is on
                            reducing friction throughout the customer journey to maximize engagement and conversion rates.
                        </p>
                        <p>Whether you're a startup or an enterprise-level retailer, our scalable e-commerce solutions adapt
                            to your business goals. We integrate secure payment systems, manage product inventories, and
                            implement automation to ensure your store runs efficiently as it grows.</p>
                        <p>Our services go beyond basic development — we specialize in e-commerce SEO, mobile optimization,
                            and third-party app integration. This ensures your store performs well on search engines,
                            delivers on mobile, and stays aligned with evolving market demands.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="https://vedeshra.com/assets/img/vectorimages/web-developer-courses.png" loading="lazy"
                        alt="Web Development Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Strategy Steps Section --}}
    <section class="strategy-steps-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Strategic E-commerce Solutions for Growth-Driven Online Experiences</h2>
            </div>
            <div class="strategy-steps-grid-box">
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>1</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Market & Competitor Analysis</h3>
                            <p>Analyze e-commerce market trends and competitor strategies to discover growth opportunities
                                and market positioning.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>2</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Brand & Platform Planning</h3>
                            <p>Create a strong e-commerce brand identity and choose the ideal platform aligned with business
                                and customer needs.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>3</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>UI/UX Optimization</h3>
                            <p>Design user-focused, SEO-optimized e-commerce interfaces that ensure smooth navigation and
                                increased conversions.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>4</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Mobile-First Development</h3>
                            <p>Develop fully responsive, mobile-optimized e-commerce websites for enhanced user experience
                                across all devices.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>5</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>SEO & Content Strategy</h3>
                            <p>Implement keyword-rich SEO tactics and engaging content to boost search visibility and
                                organic traffic.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>6</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Conversion Rate Optimization</h3>
                            <p>Use A/B testing and analytics to optimize product pages, CTAs, and checkout flows for higher
                                conversion rates.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>7</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Analytics & Performance Tracking</h3>
                            <p>Leverage real-time e-commerce analytics to monitor performance, customer behavior, and
                                continuously refine strategies.</p>
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
                <h2>Top E-Commerce Platforms That Drive Seamless Online Selling and Customer Engagement</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we work with industry-leading platforms to build websites that
                    are <strong>scalable, secure, and tailored to your needs.</strong> Whether you need a custom-coded
                    website or a CMS-based solution, we ensure the best-fit platform for your business.</p>
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
                                    At Vedeshra Technologies, we craft high-performance, responsive eCommerce websites using
                                    Shopify. This robust platform allows us to deliver visually engaging, mobile-optimized
                                    storefronts that support seamless shopping experiences across devices.
                                </p>
                                <p>
                                    With Shopify, we ensure fast-loading pages, secure payment integrations, and scalable
                                    product management, making it ideal for businesses aiming to launch or grow their online
                                    stores with reliability and efficiency.
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
                                    At Vedeshra Technologies, we create dynamic WordPress-based eCommerce solutions using
                                    WooCommerce. This flexible platform enables full design control and easy plugin
                                    integrations, supporting businesses in building tailored online stores.
                                </p>
                                <p>
                                    WooCommerce allows us to deliver SEO-optimized, secure, and easily manageable websites
                                    that empower store owners with content freedom and customer-focused functionalities.
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
                                    At Vedeshra Technologies, we design intuitive and visually appealing websites using Wix,
                                    ideal for small to mid-sized businesses seeking a simple yet professional online
                                    presence.
                                </p>
                                <p>
                                    Wix offers customizable templates, built-in SEO tools, and smooth content management,
                                    allowing us to deliver fast-loading, responsive websites that are easy to maintain and
                                    update.
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
                                    At Vedeshra Technologies, we develop enterprise-grade eCommerce websites using Magento,
                                    a powerful and scalable platform designed for businesses with complex product catalogs
                                    and global operations.
                                </p>
                                <p>
                                    Magento supports robust inventory control, multilingual capabilities, and deep
                                    customization, allowing us to deliver performance-oriented, responsive websites that
                                    meet demanding business needs.
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
                            <h3>Bigcommerce</h3>
                            <div class="platformgridcontent">
                                <p>
                                    At Vedeshra Technologies, we build modern, responsive online stores on BigCommerce to
                                    help brands scale with ease. This platform provides a strong foundation for growing
                                    businesses with built-in features and flexible design tools.
                                </p>
                                <p>
                                    BigCommerce ensures high-speed performance, SEO readiness, and seamless third-party
                                    integrations, making it perfect for retailers looking to enhance customer experience and
                                    backend efficiency.
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
                            <h3>OpenCart</h3>
                            <div class="platformgridcontent">
                                <p>
                                    At Vedeshra Technologies, we develop flexible and lightweight eCommerce solutions using
                                    OpenCart. This open-source platform is ideal for businesses looking for cost-effective
                                    and customizable store development.
                                </p>
                                <p>
                                    OpenCart enables us to deliver responsive, SEO-friendly websites with powerful
                                    extensions and multi-store management, ensuring full control over store operations and
                                    growth.
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
                            <h3>Salesforce Commerce</h3>
                            <div class="platformgridcontent">
                                <p>
                                    At Vedeshra Technologies, we implement robust, enterprise-level eCommerce solutions with
                                    Salesforce Commerce. This platform empowers businesses with cloud scalability,
                                    data-driven personalization, and unified shopping experiences.
                                </p>
                                <p>
                                    Salesforce Commerce supports AI-driven insights, omnichannel selling, and seamless
                                    integrations, making it ideal for large businesses focused on innovation and customer
                                    engagement.
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
                                    At Vedeshra Technologies, we build sleek, elegant websites on Squarespace, combining
                                    high-end design with functional performance. This platform suits creatives and service
                                    providers seeking aesthetic and modern web experiences.
                                </p>
                                <p>
                                    Squarespace enables fast deployment, built-in SEO, and smooth editing tools, helping
                                    businesses maintain a polished and consistent brand identity across all devices.
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
                            <h3>PrestaShop</h3>
                            <div class="platformgridcontent">
                                <p>
                                    At Vedeshra Technologies, we build feature-rich online stores with PrestaShop, a
                                    powerful open-source platform that allows deep customization and modular development for
                                    diverse business needs.
                                </p>
                                <p>
                                    PrestaShop offers multi-language support, efficient inventory management, and strong SEO
                                    capabilities, enabling us to create fast, user-friendly websites that drive sales and
                                    conversions.
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
                    <h2>Cutting-Edge Tools Powering Your E-commerce Growth</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong>Vedeshra Technologies,</strong> we work with leading e-commerce platforms like
                            Shopify, WooCommerce, Magento, and custom Laravel solutions to match your specific needs. These
                            platforms ensure flexibility, scalability, and a smooth backend for easy management.</p>
                        <p>We implement secure payment gateways, inventory systems, CRM tools, and shipping APIs that
                            streamline your store’s daily operations. Every integration is selected to improve efficiency
                            and elevate the customer experience.</p>
                        <p>Using tools like Google Analytics, Hotjar, and marketing automation platforms, we help you
                            understand user behavior and optimize performance. Our data-backed approach ensures your
                            e-commerce store evolves with changing trends and user expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Everything You Need to Know About E-Commerce Solutions</h2>
                <p>At <strong>Vedeshra Technologies,</strong> we prioritize clarity and transparency when it comes to
                    <strong>e-commerce development and strategy.</strong> Below are some frequently asked questions to help
                    you understand our <strong>e-commerce services, platforms, and approach to building high-performing
                        online stores.</strong></p>
            </div>

            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What e-commerce platforms do you work with?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>At Vedeshra Technologies, we work with a wide range of e-commerce platforms including Shopify,
                            WooCommerce, Magento, BigCommerce, Wix, Squarespace, OpenCart, Salesforce Commerce, and
                            PrestaShop. We help you choose the one that best fits your business goals and technical
                            requirements.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can you customize the design and functionality of my online store?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, we specialize in building fully customized e-commerce websites. From personalized UI/UX
                            designs to advanced features like product filters, payment gateways, and shipping integrations,
                            we tailor every aspect to match your brand and business needs.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do your e-commerce websites support mobile devices?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Absolutely. All our e-commerce websites are fully responsive and optimized for mobile devices. We
                            ensure seamless browsing, shopping, and checkout experiences on smartphones and tablets to
                            enhance customer satisfaction and conversions.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Will my store be SEO-friendly and fast-loading?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, performance and visibility are a top priority. We build SEO-optimized and fast-loading
                            e-commerce websites using modern coding practices and structured content, ensuring your store
                            ranks better and loads quickly across all devices.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can I manage products and orders on my own after launch?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Definitely. We empower you with user-friendly admin dashboards where you can easily manage
                            products, track orders, update inventory, and handle customer queries without needing technical
                            expertise.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you provide support and maintenance after the website is launched?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, we offer ongoing support and maintenance packages. From troubleshooting and updates to
                            performance monitoring and security patches, we ensure your e-commerce store continues to run
                            smoothly post-launch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
