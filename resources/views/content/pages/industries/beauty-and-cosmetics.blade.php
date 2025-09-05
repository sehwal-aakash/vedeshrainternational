@extends('layouts/commonLayout')

@section('title')
    Web Design & Development | Vedeshra Technologies: Custom Websites & Solutions
@endsection

@section('meta')
    <meta name="title" content="Beauty & Cosmetics Industry | Vedeshra Technologies">
    <meta name="description"
        content="Empowering the beauty & cosmetics industry with digital transformation, personalized experiences, and branding solutions for modern beauty brands.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/industries/beauty-and-cosmetics/" />

    <meta property="og:title" content="Beauty & Cosmetics Industry | Vedeshra Technologies">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/industries/beauty-and-cosmetics/">
    <meta property="og:description"
        content="Empowering the beauty & cosmetics industry with digital transformation, personalized experiences, and branding solutions for modern beauty brands.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Beauty & Cosmetics Industry | Vedeshra Technologies">
    <meta name="twitter:description"
        content="Empowering the beauty & cosmetics industry with digital transformation, personalized experiences, and branding solutions for modern beauty brands.">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Vedeshra Technologies",
  "url": "https://vedeshra.com/",
  "description": "Vedeshra Technologies partners with beauty and cosmetics brands to create digital-first experiences, drive consumer engagement, and build lasting brand impressions through modern technology.",
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
                    <h1>Digital Elegance for the Beauty & Cosmetics Industry</h1>
                    <div class="innerherocontent">
                        <p>Vedeshra Technologies helps beauty and cosmetics brands embrace digital transformation through
                            cutting-edge solutions that blend artificial intelligence, augmented reality, and smart
                            eCommerce. Our platforms enhance product discovery, improve customer engagement, and create
                            seamless shopping experiences.</p>
                        <p>From virtual try-on tools and personalized skincare recommendations to intelligent CRM and
                            loyalty platforms, we deliver innovations that drive conversion and brand loyalty. We enable
                            cosmetic brands to stay competitive in a fast-evolving, digitally driven marketplace.</p>
                        <p>With a strong focus on beauty tech, consumer personalization, and omnichannel enablement,
                            Vedeshra equips your business with the tools needed to scale, engage, and grow in today’s beauty
                            industry.</p>
                        <p><strong> Let's build something amazing together!</strong></p>
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
                            <h3>AI-Powered Personalization</h3>
                            <p>Deliver tailored beauty experiences using AI-driven insights for product recommendations and
                                skincare diagnostics.</p>
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
                            <h3>AR Virtual Try-On Solutions</h3>
                            <p>Boost engagement with real-time augmented reality makeup try-on tools for an immersive
                                shopping journey.</p>
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
                            <h3>End-to-End Beauty eCommerce</h3>
                            <p>Launch and scale cosmetics brands with robust, personalized, and mobile-optimized beauty
                                eCommerce platforms.</p>
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
                            <h3>Data-Driven Brand Growth</h3>
                            <p>Leverage customer data analytics to optimize campaigns, improve retention, and drive beauty
                                product innovation.</p>
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
                    <h2>Enhancing Beauty Brands with Engaging Digital Experiences</h2>
                    <div class="imagewithtextcontent">
                        <p>Vedeshra Technologies helps beauty and cosmetics brands embrace digital innovation through
                            intelligent platforms that enhance personalization, boost customer engagement, and accelerate
                            product development. We integrate AI beauty solutions, predictive analytics, and virtual tools
                            to meet modern consumer expectations.</p>
                        <p>From augmented reality makeup try-ons to data-driven skincare diagnostics, our technology enables
                            brands to offer interactive, immersive, and hyper-personalized shopping experiences. This not
                            only reduces product returns but also improves customer satisfaction and trust in cosmetic
                            products.</p>
                        <p>Our deep expertise in beauty tech and smart retail transformation supports global brands in
                            building scalable, efficient, and insight-driven ecosystems. With Vedeshra, beauty companies
                            gain a competitive edge through digital commerce, AI personalization, and omnichannel
                            innovation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inner Services Grid Section --}}
    <section class="inner-services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Comprehensive Digital Services for Beauty & Cosmetics Brands</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we offer end-to-end digital services crafted for skincare
                    lines, beauty salons, cosmetic retailers, and personal care startups. From eCommerce development and
                    mobile apps to influencer marketing, branding, and customer engagement tools — we help beauty brands
                    thrive in the digital age with elegance and efficiency.</p>
            </div>

            <div class="inner-services-grid-box">
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/front-end-programming.png"
                                loading="lazy" alt="Front End Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>AI-Powered Product Matching</h3>
                            <p>Smart algorithms deliver accurate product recommendations based on skin type, preferences,
                                and real-time user data.</p>
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
                            <h3>AR-Based Virtual Try-On</h3>
                            <p>Let users test makeup and skincare virtually with Augmented Reality, boosting conversion and
                                user confidence.</p>
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
                            <h3>Beauty eCommerce Development</h3>
                            <p>Custom-built online stores with personalization, subscriptions, and analytics tools to drive
                                cosmetic product sales.</p>
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
                            <h3>Virtual Consultation Tools</h3>
                            <p>Enable video-based or AI-driven beauty consultations that improve customer satisfaction and
                                expert-guided shopping.</p>
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
                            <h3>Beauty Data Analytics & Insights</h3>
                            <p>Extract valuable insights from customer data to guide product development, campaigns, and
                                personalization strategies.</p>
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
                            <h3>Loyalty & CRM Management</h3>
                            <p>Boost retention and engagement through smart loyalty programs, automated outreach, and
                                customer lifecycle tracking.</p>
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
                <h2>Smart Tools Powering Beautiful Digital Experiences</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we use industry-leading tools to craft elegant,
                    high-performing digital platforms for beauty and cosmetics brands. From design to marketing automation,
                    these tools help us deliver seamless shopping experiences, strong visual storytelling, and measurable
                    results across all digital touchpoints.</p>
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
                            alt="Klaviyo Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/sketch.png" loading="lazy"
                            alt="Figma Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/invision.png" loading="lazy"
                            alt="Canva Pro Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-web-designer.png" loading="lazy"
                            alt="Google Analytics 4 (GA4) Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="inner-page-cta-section section">
        <div class="container">
            <div class="inner-page-cta-box">
                <h2>Ready to Elevate Your Beauty Brand with AI and Digital Innovation?</h2>
            </div>
            <div class="inner-page-cta-button-flex-box">
                <div class="inner-page-cta-button-flex-item-box">
                    <button class="get-in-touch-popup-box">Get a Free Consultation</button>
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
                    <h2>Creating Digital Beauty That Connects, Engages, and Converts</h2>
                    <div class="imagewithtextcontent">
                        <p>Vedeshra Technologies is redefining the beauty and cosmetics industry by integrating AI,
                            augmented reality, and personalization into every stage of the customer journey. From virtual
                            try-ons to intelligent product matching, we enable brands to deliver engaging and immersive
                            shopping experiences.</p>
                        <p>Our platforms are built to support beauty eCommerce transformation, offering tools for product
                            discovery, customer loyalty, and digital consultation. These solutions empower brands to build
                            deeper relationships, reduce return rates, and increase average order value across channels.</p>
                        <p>With expertise in beauty tech innovation, we help global brands create seamless, data-driven
                            ecosystems that respond to consumer needs. Vedeshra ensures your business stays ahead in a
                            competitive market with smart, scalable, and sustainable digital solutions.</p>
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
                <h2>Strategic Digital Transformation for the Beauty and Cosmetics</h2>
            </div>
            <div class="strategy-steps-grid-box">
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>1</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Market & Consumer Insight Analysis</h3>
                            <p>We study beauty trends, consumer behavior, and data to define personalized tech strategies
                                for cosmetics brands.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>2</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Platform Selection & Customization</h3>
                            <p>We develop tailored digital platforms for AR try-ons, eCommerce, skincare analysis, and brand
                                engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>3</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>AI-Driven Personalization Integration</h3>
                            <p>Our team integrates AI engines for product recommendations, personalized skincare, and beauty
                                routine suggestions.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>4</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Seamless Omnichannel Enablement</h3>
                            <p>We create unified experiences across online stores, mobile apps, and social platforms for
                                beauty eCommerce growth.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>5</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>AR & Virtual Experience Deployment</h3>
                            <p>We implement AR beauty try-on tools and virtual consultations to enhance online engagement
                                and reduce product returns.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>6</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Customer Retention & Loyalty Programs</h3>
                            <p>Using data-driven CRM systems, we launch personalized loyalty, rewards, and re-engagement
                                campaigns for beauty users.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>7</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Continuous Optimization & Innovation</h3>
                            <p>We provide ongoing support, analytics, and feature upgrades to help brands stay ahead in the
                                beauty tech space.</p>
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
                <h2>Flexible Digital Platforms Built for Beauty and Performance</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we work with industry-leading platforms to build elegant,
                    scalable, and high-performing digital experiences for beauty and cosmetics brands. Whether you need a
                    custom-coded solution or a CMS like Shopify or WordPress, we ensure your platform reflects your brand’s
                    identity while delivering seamless functionality across all devices.</p>
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
                                    Shopify is ideal for beauty brands looking to launch elegant, high-converting online
                                    stores. It offers beautiful templates, fast checkout, and strong mobile optimization.
                                </p>
                                <p>
                                    With support for product variants, customer reviews, influencer integrations, and email
                                    marketing, it’s perfect for growing cosmetic businesses of all sizes.
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
                                    This powerful combo allows beauty brands to manage content and eCommerce in one place.
                                    It’s ideal for product storytelling, tutorials, and blogs alongside sales.
                                </p>
                                <p>
                                    WooCommerce supports flexible layouts, beauty subscriptions, and appointment bookings
                                    with full control and SEO-friendly structure.
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
                                    Wix is user-friendly and fast to set up, making it perfect for beauty entrepreneurs and
                                    salons. It includes drag-and-drop tools and stylish templates.
                                </p>
                                <p>
                                    It supports bookings, product sales, gift cards, and contact forms — all without
                                    technical skills.
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
                                    Magento is built for large-scale beauty businesses with complex catalogs and global
                                    reach. It supports multi-store, multi-language, and personalized customer experiences.
                                </p>
                                <p>
                                    It’s ideal for enterprise beauty brands needing deep customization, performance, and
                                    scalability.
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
                                    Webflow empowers beauty brands with custom, design-driven websites. It’s perfect for
                                    product launches, artist portfolios, and campaign microsites.
                                </p>
                                <p>
                                    With built-in CMS and eCommerce, it balances creative freedom with smooth performance
                                    and SEO readiness.
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
                            <h3>Laravel</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Laravel is best for custom-built solutions like skincare portals, booking platforms, or
                                    product customization apps. It offers full control over design and features.
                                </p>
                                <p>
                                    It’s ideal when off-the-shelf platforms fall short and scalability or security is a
                                    priority.
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
                            <h3>BigCommerce</h3>
                            <div class="platformgridcontent">
                                <p>
                                    BigCommerce is great for growing cosmetic brands needing powerful backend features with
                                    modern design. It supports headless commerce, SEO tools, and omnichannel selling.
                                </p>
                                <p>
                                    Perfect for businesses aiming to sell on platforms like Amazon, Meta, and Google
                                    simultaneously.
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
                                    Squarespace offers elegant templates ideal for beauty bloggers, influencers, and
                                    wellness brands. It merges content, product displays, and email marketing.
                                </p>
                                <p>
                                    It’s perfect for brands focused on visuals and storytelling with minimal setup time.
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
                            <h3>Headless CMS (Strapi / Contentful)</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Headless CMS platforms give beauty brands flexibility to manage content across websites,
                                    apps, and campaigns from one place.
                                </p>
                                <p>
                                    Great for omnichannel strategies, mobile-first beauty apps, or fast-loading global
                                    websites.
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
                    <h2>Building Digital Confidence for Modern Beauty Brands</h2>
                    <div class="imagewithtextcontent">
                        <p>In the beauty and cosmetics industry, presentation is everything — and your digital presence
                            should reflect the same level of care and detail as your products. At <strong>Vedeshra
                                Technologies</strong>, we create visually stunning, high-performing platforms that elevate
                            your brand identity and connect with customers emotionally.</p>

                        <p>From sleek online stores and mobile-first experiences to content-rich product pages and customer
                            engagement tools, we design digital solutions that combine elegance with conversion-driven
                            performance. Whether you’re selling skincare, makeup, or running a beauty service, we tailor
                            each solution to your goals.</p>

                        <p>With a perfect blend of aesthetics, speed, and functionality, our team ensures your brand stands
                            out in a crowded market. We help beauty businesses deliver seamless, luxurious digital
                            experiences that build trust and turn visitors into loyal customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Frequently Asked Questions – Digital Solutions for Beauty & Cosmetics</h2>
                <p>At <strong>Vedeshra Technologies,</strong> we believe in clarity, transparency, and long-term support
                    when it comes to <strong>digital services for beauty and cosmetics brands.</strong> Below are some
                    frequently asked questions to help you better understand our <strong>solutions, platforms, and approach
                        tailored to the beauty industry.</strong></p>
            </div>

            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What digital services do you offer for beauty and cosmetics brands?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We offer a full suite of services including eCommerce website development, mobile app design,
                            digital marketing, influencer integration, brand design, and customer engagement tools tailored
                            to skincare, makeup, salons, and personal care brands.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Which platforms do you recommend for selling beauty products online?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We work with platforms like Shopify, WooCommerce, and Magento based on your business size and
                            goals. Shopify is great for startups and fast launches, while WooCommerce and Magento offer more
                            customization for growing or enterprise-level beauty brands.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can you integrate influencer marketing or Instagram shops with our website?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, we can integrate your social media channels, influencer content, and Instagram Shop directly
                            into your website. This creates a seamless shopping experience and enhances social proof for
                            your beauty products.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you offer support for booking systems or salon scheduling?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Absolutely. We can implement customized booking systems for beauty salons, spas, and clinics.
                            This includes appointment scheduling, service selection, payment integration, and automated
                            reminders.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How do you ensure a mobile-friendly and visually rich experience?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We prioritize mobile-first design and use high-resolution imagery, fast-loading components, and
                            intuitive navigation to deliver elegant and responsive experiences across all screen sizes —
                            essential for beauty and lifestyle audiences.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you offer SEO and marketing support for beauty businesses?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, we provide comprehensive SEO, content marketing, email automation, and PPC campaign
                            management to help beauty brands grow visibility, build trust, and convert more customers
                            online.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
