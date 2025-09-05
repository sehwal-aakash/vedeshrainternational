@extends('layouts/commonLayout')

@section('title')
    Web Design & Development | Vedeshra Technologies: Custom Websites & Solutions
@endsection

@section('meta')
    <meta name="title" content="Real Estate Services Industry | Vedeshra Technologies">
    <meta name="description"
        content="Innovative tech solutions for real estate: property listing portals, virtual tours, CRM integration, and lead management tools tailored for realtors.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/industries/real-estate-services/" />

    <meta property="og:title" content="Real Estate Services Industry | Vedeshra Technologies">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/industries/real-estate-services/">
    <meta property="og:description"
        content="Innovative tech solutions for real estate: property listing portals, virtual tours, CRM integration, and lead management tools tailored for realtors.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Real Estate Services Industry | Vedeshra Technologies">
    <meta name="twitter:description"
        content="Innovative tech solutions for real estate: property listing portals, virtual tours, CRM integration, and lead management tools tailored for realtors.">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Vedeshra Technologies",
  "url": "https://vedeshra.com/",
  "description": "Vedeshra Technologies delivers customized digital solutions for the real estate sector, including MLS-integrated platforms, property portals, virtual tour tools, and agent-focused CRM systems.",
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
                    <h1>Transforming Real Estate Services Through Smart Digital Solutions</h1>
                    <div class="innerherocontent">
                        <p>At Vedeshra Technologies, we empower the real estate services industry with cutting-edge digital
                            tools designed to modernize operations, elevate customer experience, and drive growth. Whether
                            you are a real estate agency, property developer, or brokerage firm, we create technology that
                            delivers results.</p>
                        <p>Our team specializes in real estate CRM development, virtual property tours, property listing
                            portals, and mobile-first experiences that simplify property discovery and enhance client
                            engagement. With intelligent automation and cloud-powered platforms, we streamline sales cycles
                            and reduce operational inefficiencies.</p>
                        <p>From AI-driven property recommendations to custom-built platforms for leasing, buying, and
                            property management, Vedeshra Technologies delivers end-to-end real estate digital
                            transformation services. We help your brand stay ahead in a highly competitive and evolving
                            property market.</p>
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
                            <h3>Smart Property Listing Platforms</h3>
                            <p>We build scalable, feature-rich real estate portals that enhance user experience and boost
                                lead generation.</p>
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
                            <h3>Real Estate CRM Integration</h3>
                            <p>Customized CRMs help streamline sales pipelines, automate follow-ups, and manage property
                                buyer interactions efficiently.</p>
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
                            <h3>Virtual Tours & 3D Viewings</h3>
                            <p>We integrate immersive technologies like 360° virtual tours to showcase properties remotely
                                with high impact.</p>
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
                            <h3>Data-Driven Market Insights</h3>
                            <p>Our solutions leverage AI and analytics to deliver valuable property insights and customer
                                behavior forecasting.</p>
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
                    <h2>Digitally Empowering Real Estate Workflows for Maximum Efficiency</h2>
                    <div class="imagewithtextcontent">
                        <p>The real estate industry is rapidly evolving, and digital transformation is no longer optional.
                            At Vedeshra Technologies, we specialize in building property listing platforms, mobile apps, and
                            CRMs that automate lead capture, client communication, and deal closures. These tools are
                            essential for modern agencies aiming to scale operations and streamline workflows.</p>
                        <p>We design and deploy custom real estate software solutions tailored to your business
                            goals—whether it's a property management platform, a buyer-agent collaboration tool, or a
                            document automation system. Our platforms enable seamless integrations with MLS databases,
                            payment gateways, and mapping services.</p>
                        <p> Client experience is at the heart of everything we build. From interactive virtual property
                            tours to AI-powered search filters and real-time chat support, our solutions boost buyer
                            engagement and shorten the decision-making journey. With Vedeshra, your real estate business
                            becomes smarter, faster, and customer-centric. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inner Services Grid Section --}}
    <section class="inner-services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Smart Digital Services for High-Performance Real Estate Solutions</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we offer a full suite of real estate-focused digital
                    services—from custom website development and mobile app design to CRM integration and property listing
                    automation. Our goal is to help agencies, brokers, and property developers build trust, generate leads,
                    and grow faster through intuitive, data-driven platforms.</p>
            </div>

            <div class="inner-services-grid-box">
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/front-end-programming.png"
                                loading="lazy" alt="Front End Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Custom Property Listing Portals</h3>
                            <p>Build dynamic real estate portals with filters, maps, lead forms, and search optimized for
                                user experience.</p>
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
                            <h3>Real Estate Mobile Apps</h3>
                            <p>Deliver seamless mobile-first property browsing, scheduling, and inquiry management for
                                clients on the go.</p>
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
                            <h3>CRM for Real Estate Agents</h3>
                            <p>Track leads, automate responses, and manage client relationships with powerful, scalable real
                                estate CRMs.</p>
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
                            <h3>Virtual Tours & Interactive Maps</h3>
                            <p>Showcase properties remotely using 360° virtual tours and geolocation-powered property
                                navigation.</p>
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
                            <h3>Real Estate Analytics Dashboards</h3>
                            <p>Gain actionable insights with dashboards showing buyer trends, property performance, and
                                marketing ROI.</p>
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
                            <h3>MLS & API Integrations</h3>
                            <p>Seamlessly connect with third-party property databases, payment gateways, and marketing tools
                                via custom APIs.</p>
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
                <h2>Powerful Tools Powering Real Estate Innovation</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we leverage industry-leading web development and automation
                    tools to build high-performance digital platforms for the real estate sector. These tools help us create
                    responsive websites, streamline property management, and deliver exceptional digital experiences that
                    drive engagement and lead generation.</p>
            </div>
            <div class="tools-flex-box">
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/figma.png" loading="lazy"
                            alt="WordPress Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/adobe-xd.png" loading="lazy"
                            alt="Zapier Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/sketch.png" loading="lazy"
                            alt="IDX Broker Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/invision.png" loading="lazy"
                            alt="Matterport Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-web-designer.png" loading="lazy"
                            alt="Zoho CRM Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="inner-page-cta-section section">
        <div class="container">
            <div class="inner-page-cta-box">
                <h2>Ready to Transform Your Real Estate Business with Technology?</h2>
            </div>
            <div class="inner-page-cta-button-flex-box">
                <div class="inner-page-cta-button-flex-item-box">
                    <button class="get-in-touch-popup-box">Get a Quote</button>
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
                    <h2>Future-Ready Digital Solutions for Real Estate Businesses</h2>
                    <div class="imagewithtextcontent">
                        <p>The digital expectations of property buyers and sellers are changing rapidly. At Vedeshra
                            Technologies, we develop custom real estate platforms that provide intuitive user interfaces,
                            fast search functionality, and integrated lead management. This ensures a seamless experience
                            from first visit to property transaction.</p>
                        <p>With our expertise in real estate automation software, your agency can simplify manual processes,
                            reduce human errors, and speed up deal closures. We build systems that automate everything from
                            appointment scheduling to digital document signing and payment tracking.</p>
                        <p>Our tailored technology for property developers and brokers supports long-term growth with
                            scalable architecture, robust security, and integrations with third-party tools like CRM, ERP,
                            and MLS. Trust Vedeshra to build the future of your real estate operations.</p>
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
                <h2>Strategic Roadmap to Real Estate Digital Excellence</h2>
            </div>
            <div class="strategy-steps-grid-box">
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>1</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Market & Competitor Analysis</h3>
                            <p>We assess real estate market trends and your competitors to define clear digital
                                transformation opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>2</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Goal-Oriented Planning</h3>
                            <p>We align business goals with technology solutions to maximize ROI and streamline your real
                                estate workflows.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>3</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Custom Tech Stack Selection</h3>
                            <p>We choose scalable real estate tools and platforms best suited to your agency’s operational
                                needs and budget.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>4</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>User-Centric Design</h3>
                            <p>We craft intuitive, responsive interfaces to elevate the customer journey and increase
                                property inquiry rates.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>5</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>End-to-End Development</h3>
                            <p>Our expert team builds secure, API-ready real estate apps, portals, and CRMs tailored to your
                                workflows.</p>
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
                            <p>We conduct functional, security, and UX testing to ensure flawless performance across devices
                                and user groups.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>7</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Launch, Monitor & Scale</h3>
                            <p>Post-launch, we monitor analytics, provide support, and scale your digital real estate
                                ecosystem as you grow.</p>
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
                <h2>Top Digital Platforms Empowering Real Estate Growth</h2>
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
                            <h3>WordPress</h3>
                            <div class="platformgridcontent">
                                <p>
                                    WordPress is a flexible and user-friendly platform ideal for building real estate
                                    websites. With a wide range of themes and plugins, it supports property listings,
                                    contact forms, and blog content tailored to engage and convert leads.
                                </p>
                                <p>
                                    When paired with tools like Elementor and IDX integrations, WordPress becomes a dynamic
                                    solution for agencies and brokers. It offers ease of management, SEO optimization, and
                                    customization suited for fast-growing real estate brands.
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
                            <h3>Wix</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Wix is an all-in-one platform perfect for small real estate businesses or independent
                                    agents who need quick deployment. It includes drag-and-drop tools, mobile-friendly
                                    templates, and built-in booking features for appointments.
                                </p>
                                <p>
                                    Its App Market supports map widgets, live chat, and contact forms that simplify user
                                    interaction. With Wix, you can launch sleek, branded real estate sites without heavy
                                    technical involvement.
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
                            <h3>Shopify</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Though traditionally an eCommerce platform, Shopify is increasingly used by real estate
                                    developers for leasing promotional sites or property merch stores. Its simplicity and
                                    clean templates are ideal for showcasing brochures, 3D renders, or virtual tours.
                                </p>
                                <p>
                                    With support for bookings, email campaigns, and mobile optimization, Shopify enables you
                                    to market real estate projects and manage client engagement with ease—especially during
                                    pre-launch campaigns.
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
                            <h3>Webflow</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Webflow is a no-code platform that blends visual design with CMS control—making it
                                    perfect for real estate firms that need elegant, custom-built websites. It supports
                                    interactive features like scroll animations, filtering, and dynamic listings.
                                </p>
                                <p>
                                    The CMS feature allows agents or admins to update properties without coding. Webflow
                                    ensures high-performance, fast-loading, and secure websites ideal for branding-focused
                                    real estate companies.
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
                            <h3>Laravel</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Laravel is a robust PHP framework perfect for building custom real estate portals, lead
                                    management systems, and internal dashboards. It allows complete flexibility to integrate
                                    CRMs, IDX APIs, payment gateways, and role-based access control.
                                </p>
                                <p>
                                    With Laravel, we can build property booking systems, agent logins, and tenant portals
                                    from scratch—ensuring data security, performance, and personalization for enterprises
                                    with complex workflows.
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
                                    Joomla is an open-source CMS that supports advanced content control and multi-language
                                    features, ideal for international real estate firms. It allows the setup of agent
                                    accounts, property submission portals, and customer-facing catalogs.
                                </p>
                                <p>
                                    With a strong extensions ecosystem, Joomla can handle document uploads, maps, and
                                    appointment integrations. It’s a great fit for developers who want a balance between
                                    flexibility and structure.
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
                                    Drupal is highly secure and modular, making it ideal for large-scale real estate
                                    projects that involve heavy data, multiple user roles, or legal compliance. It supports
                                    advanced workflows, listing directories, and digital archives.
                                </p>
                                <p>
                                    Its content management capabilities make it suitable for real estate developers who
                                    manage multiple properties across regions or markets. Drupal excels in performance and
                                    role-based content publishing.
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
                            <h3>Magento</h3>
                            <div class="platformgridcontent">
                                <p>
                                    For real estate developers looking to offer premium property experiences online—like
                                    booking resort properties, selling interiors, or leasing luxury projects—Magento offers
                                    an eCommerce-driven approach with high customization.
                                </p>
                                <p>
                                    It integrates well with payment systems, CRMs, and dynamic catalogs, and is ideal for
                                    real estate firms managing high-value inventory with custom pricing, appointment
                                    scheduling, and customer segmentation.
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
                            <h3>Squarespace</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Squarespace is a sleek, design-focused platform ideal for showcasing high-end real
                                    estate properties and luxury developments. It includes built-in tools for image
                                    galleries, forms, maps, and social media integration.
                                </p>
                                <p>
                                    Perfect for realtors or firms with a strong emphasis on branding, Squarespace offers
                                    aesthetic consistency and ease of editing for teams who prioritize visual storytelling
                                    and client-first navigation.
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
                    <h2>Empowering Real Estate Growth Through Digital Innovation and Smart Platforms</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong>Vedeshra Technologies</strong>, we provide real estate companies, property developers,
                            and agents with cutting-edge digital solutions that modernize property search, automate
                            listings, and enhance client engagement. Our goal is to create seamless online experiences that
                            build trust and drive conversions.</p>
                        <p>Whether you're managing a residential property portal, a commercial real estate directory, or a
                            virtual tour platform, our custom websites and apps offer real-time updates, map integrations,
                            advanced search filters, and user-friendly dashboards. We tailor every solution to your branding
                            and business needs, ensuring intuitive navigation and mobile responsiveness.</p>
                        <p>From IDX/MLS integration and lead capture automation to AI-based recommendation engines and
                            virtual staging tools, Vedeshra Technologies empowers real estate businesses to stay ahead of
                            the market. We help you simplify operations, improve visibility, and close deals faster with
                            digital platforms that work as hard as you do.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Frequently Asked Questions About Real Estate Technology Services</h2>
                <p>At <strong>Vedeshra Technologies,</strong> we believe in providing transparent, effective digital
                    solutions tailored for the <strong>real estate industry.</strong> Below are some frequently asked
                    questions to help you better understand our <strong>services, capabilities, and technology-driven
                        approach.</strong></p>
            </div>

            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What types of real estate businesses do you work with?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We work with real estate agents, brokers, developers, rental platforms, property management
                            firms, and real estate startups. Whether you need a listing website, mobile app, or a lead
                            generation system, we customize every solution to your goals.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can you integrate MLS or IDX listings into my website?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes. We specialize in integrating IDX/MLS feeds to display up-to-date property listings. This
                            includes filters, maps, and search features to help your visitors find properties efficiently.
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you build custom property management systems?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Absolutely. We develop web-based property management dashboards with features like tenant
                            onboarding, rent collection, maintenance tracking, and owner reporting—all fully secure and
                            scalable.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Will my real estate website be mobile-friendly?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes, all of our websites are fully responsive and optimized for mobile devices. We ensure that
                            users can browse listings, schedule visits, and contact you seamlessly from any device.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can I manage property listings and leads on my own?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Definitely. We build intuitive content management systems (CMS) that allow you to add, update, or
                            remove listings, track leads, and monitor performance—without needing technical expertise.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What security measures do you implement?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We follow best practices in web security, including SSL certificates, data encryption, secure
                            admin panels, and user authentication. For larger platforms, we also support role-based access
                            control and GDPR compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
