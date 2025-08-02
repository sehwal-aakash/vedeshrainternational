@extends('layouts/commonLayout')

@section('title') Graphic Design Services | Vedeshra Technologies: Creative Visual Solutions @endsection

@section('meta')
<meta name="title" content="Graphic Design Services | Vedeshra Technologies: Creative Visual Solutions">
<meta name="description" content="Bring your brand to life with Vedeshra Technologies’ professional graphic design services. Logos, branding, marketing materials & more — all designed to impress.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Vedeshra Technologies LLC">

<link rel="canonical" href="https://vedeshra.com/services/graphic-design/" />

<meta property="og:title" content="Graphic Design Services | Vedeshra Technologies">
<meta property="og:site_name" content="Vedeshra Technologies">
<meta property="og:url" content="https://vedeshra.com/services/graphic-design/">
<meta property="og:description" content="Vedeshra Technologies delivers creative graphic design services — from logos and brochures to social media and brand identity designs. Custom visuals tailored for your business.">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Graphic Design Services | Vedeshra Technologies">
<meta name="twitter:description" content="Creative and custom graphic design services by Vedeshra Technologies. Stand out with designs that reflect your brand’s personality and captivate your audience.">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Graphic Design",
  "provider": {
    "@type": "Organization",
    "name": "Vedeshra Technologies",
    "url": "https://vedeshra.com/"
  },
  "serviceType": "Custom Graphic Design Services",
  "areaServed": ["US", "GB", "CA", "AF"],
  "description": "Vedeshra Technologies offers professional graphic design services including logo design, branding, social media graphics, print materials, and digital creatives tailored to your brand.",
  "offers": {
    "@type": "Offer",
    "price": "Custom",
    "priceCurrency": "USD",
    "url": "https://vedeshra.com/services/graphic-design/"
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
    {{-- Inner Hero Section --}}
    <section class="innerherosection section">
        <div class="container">
            <div class="innerheroflexbox">
                <div class="innerherocontentbox">
                    <h1>Transform Your Brand with Stunning Graphic Design Services</h1>
                    <div class="innerherocontent">
                        <p>At <strong> Vedeshra Technologies, </strong> we bring creativity to life with <strong> eye-catching visuals, professional branding, and high-quality graphics </strong> that captivate your audience. A compelling design isn't just about aesthetics—it's about <strong> creating a strong brand identity, increasing engagement, and driving conversions. </strong> Our expert designers specialize in crafting <strong>logos, marketing materials, UI/UX designs, and digital content</strong> that set your business apart in today's competitive market.</p>
                        <p>From <strong> custom branding solutions </strong> to <strong> social media graphics, website layouts, and print marketing materials,</strong> we tailor every design to your specific needs. Whether you're a startup looking for a unique visual identity or an established business aiming for a brand refresh, we create designs that tell your story in a visually stunning way.</p>
                        <p>Our <strong> user-focused designs </strong> not only enhance brand recall but also help you communicate effectively with your target audience. We believe that every element—colors, typography, and layout—should work harmoniously to deliver a memorable brand experience.</p>
                        <p><strong> Let's Create Something Amazing!</strong></p>
                    </div>
                    <div class="innerherobutton">
                        <a href="{{ route('contact') }}/" class="button">Get a Free Consultation</a>
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
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/web-design.png" loading="lazy" alt="Web Design Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Brand Identity Design</h3>
                            <p>We design impactful logos, colors, and typography that make your brand instantly recognizable and memorable.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/responsive.png" loading="lazy" alt="Responsive Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Marketing & Advertising Graphics</h3>
                            <p>Engaging visuals for social media, ads, and print—crafted to attract, convert, and retain your audience.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/good-feedback.png" loading="lazy" alt="Good Feedback Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>UI/UX & Web Graphics</h3>
                            <p>Clean, user-focused designs for websites and apps that improve usability and enhance the digital experience.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/conversion.png" loading="lazy" alt="Conversion Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Illustrations & Infographics</h3>
                            <p>Custom visuals and infographics that simplify complex ideas through clear, engaging storytelling.</p>
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
                    <img src="https://vedeshra.com/assets/img/vectorimages/graphic-design-vector-img-01.png" loading="lazy" alt="Graphic Design Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <h2>Transforming Ideas into Stunning Visuals</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong> Vedeshra Technologies,</strong> we believe that <strong> exceptional graphic design </strong> goes beyond aesthetics—it tells a story, builds connections, and leaves a lasting impact. Our creative approach blends <strong> artistic vision with strategic thinking,</strong> ensuring that every design serves a purpose.</p>
                        <p>From <strong> eye-catching brand identities </strong> to <strong> compelling marketing graphics, </strong> we craft visuals that align with your brand's message and resonate with your audience. Whether it's a <strong> logo, website design, social media creative, or an infographic, </strong> our designs are created to inspire and engage.</p>
                        <p>With a team of experienced graphic designers, we use cutting-edge tools to <strong> enhance brand perception, boost engagement, and elevate user experience. </strong> Our focus is on delivering <strong> high-quality, innovative, and impactful designs </strong> tailored to meet your business objectives.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inner Services Grid Section --}}
    <section class="inner-services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Comprehensive Graphic Design Services for Your Brand</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we provide a full suite of <strong> graphic design services </strong> to visually elevate your brand across all platforms. From impactful brand identities to eye-catching marketing creatives and intuitive UI/UX designs, we craft visuals that leave a lasting impression and support your business goals.</p>
            </div>

            <div class="inner-services-grid-box">
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/front-end-programming.png" loading="lazy" alt="Front End Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Brand Identity Design</h3>
                            <p>A powerful brand starts with a <strong> unique identity.</strong> We create compelling logos, color schemes, and typography to give your brand a <strong> strong and memorable presence.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/web.png" loading="lazy" alt="Ecommerce Designing Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Website & UI/UX Design</h3>
                            <p>User-friendly and aesthetically pleasing web and UI/UX designs that ensure seamless navigation, improved engagement, and enhanced user experience across all digital platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/ui-ux.png" loading="lazy" alt="UI UX Design Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Social Media Graphics</h3>
                            <p>Engaging and shareable visuals tailored for platforms like Instagram, Facebook, LinkedIn, and Twitter, boosting your brand’s online visibility and audience engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/web-maintenance.png" loading="lazy" alt="Website Maintenance Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Marketing & Advertising Design</h3>
                            <p>Eye-catching banners, brochures, posters, and advertisements designed to captivate your audience and drive higher conversions and brand recognition.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/seo.png" loading="lazy" alt="SEO Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Infographics & Illustrations</h3>
                            <p>Custom infographics and vector illustrations that simplify complex information, making your content more engaging, informative, and visually appealing.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/cms-icon.png" loading="lazy" alt="CMS Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Packaging & Print Design</h3>
                            <p>Attractive packaging, business cards, flyers, and product labels that help brands make a strong impression both online and offline.</p>
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
                <h2>Cutting-Edge Graphic Design Tools for Stunning Visuals</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we leverage industry-leading <strong> graphic design tools and software </strong> to create high-quality visuals that align with your brand's identity. Our expertise in these tools ensures precision, creativity, and innovation in every design we craft.</p>
            </div>
            <div class="tools-flex-box">
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/figma.png" loading="lazy" alt="Adobe Photoshop Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/adobe-xd.png" loading="lazy" alt="Adobe Illustrator Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/sketch.png" loading="lazy" alt="Figma Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/invision.png" loading="lazy" alt="Canva Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-web-designer.png" loading="lazy" alt="CorelDRAW Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="inner-page-cta-section section">
        <div class="container">
            <div class="inner-page-cta-box">
                <h2>Let's Bring Your Creative Vision to Life!</h2>
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
                    <h2>Crafting Unique Visual Experiences for Your Brand</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong>Vedeshra Technologies</strong>, we believe that <strong> design is more than aesthetics—it's about storytelling and engagement.</strong> Our expert team blends creativity with strategy to craft compelling visuals that align with your brand's personality and goals.</p>
                        <p>From <strong> eye-catching marketing materials </strong> to <strong> user-friendly UI/UX designs, </strong> we ensure every element enhances user experience and reinforces brand identity. Our process involves <strong> understanding your vision, brainstorming innovative ideas, and delivering high-quality graphics </strong> that make an impact.</p>
                        <p>Whether you need <strong> print media, digital designs, or complete branding solutions, </strong> we've got you covered. Let us transform your ideas into <strong> visually stunning designs </strong> that set your business apart.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="https://vedeshra.com/assets/img/vectorimages/graphic-design-vector-img-02.png" loading="lazy" alt="Graphic Design Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Strategy Steps Section --}}
    <section class="strategy-steps-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Our Proven Graphic Design Strategy for Outstanding Visuals</h2>
            </div>
            <div class="strategy-steps-grid-box">
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>1</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Understanding Your Brand</h3>
                            <p>We start by analyzing your brand's values, goals, and target audience to create a design that aligns with your identity.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>2</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Market Research & Trend Analysis</h3>
                            <p>Our team conducts thorough research on industry trends, competitors, and design innovations to craft a modern and appealing visual experience.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>3</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Concept Development</h3>
                            <p>Using insights gathered, we brainstorm creative ideas, color schemes, typography, and layout options to bring your vision to life.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>4</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Design Prototyping</h3>
                            <p>We create initial design drafts, wireframes, and mockups to give you a preview of the final product.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>5</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Client Collaboration & Feedback</h3>
                            <p>We believe in transparent communication—your feedback helps us refine and perfect the design before finalization.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>6</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Finalization & Optimization</h3>
                            <p>Once approved, we polish the design, enhance visual elements, and optimize for different platforms, ensuring top-tier quality</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>7</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Delivery & Implementation</h3>
                            <p>The final designs are delivered in high-resolution formats, ready for use across digital and print media, ensuring maximum impact.</p>
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
                <h2>Top Graphic Design Platforms We Excel In</h2>
                <p>At <strong>Vedeshra Technologies</strong>, we create stunning visuals using the most powerful and versatile design platforms. From <strong> branding and marketing materials to UI/UX design and digital illustrations,</strong> we master multiple platforms to deliver high-quality graphics that resonate with your audience.</p>
            </div>

            <div class="platform-grid-box">
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/shopify-logo.png" loading="lazy" alt="Shopify Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Adobe Creative Cloud</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Industry-leading suite for graphic design, UI/UX, motion graphics, and more.
                                </p>
                                <p>
                                    Includes Photoshop, Illustrator, InDesign, XD, and Premiere Pro.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/woocommerce-logo.png" loading="lazy" alt="Woocommerce Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Canva</h3>
                            <div class="platformgridcontent">
                                <p>
                                    User-friendly platform for social media graphics, marketing materials, and presentations.
                                </p>
                                <p>
                                    Offers thousands of customizable templates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/wix-logo.png" loading="lazy" alt="Wix Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Figma</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Cloud-based tool for collaborative UI/UX design and prototyping.
                                </p>
                                <p>
                                    Ideal for web and app design with real-time editing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/magento-logo.png" loading="lazy" alt="Magento Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>CorelDRAW</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Powerful vector design software for branding, print, and digital art.
                                </p>
                                <p>
                                    Preferred for logo design and illustration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/webflow-logo.png" loading="lazy" alt="Webflow Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Sketch</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Mac-based UI/UX design tool for creating high-fidelity website and app interfaces.
                                </p>
                                <p>
                                    Supports plugins and integrations for enhanced functionality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/joomla-logo.png" loading="lazy" alt="Joomla Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>InVision</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Prototyping platform for interactive UI/UX designs and wireframes.
                                </p>
                                <p>
                                    Used for seamless design collaboration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/drupal-logo.png" loading="lazy" alt="Drupal Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Adobe Spark</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Easy-to-use tool for quick content creation, including social media posts and web pages.
                                </p>
                                <p>
                                    Ideal for small businesses and digital marketing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/squarespace-logo.png" loading="lazy" alt="Squarespace Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Affinity Designer</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Alternative to Adobe Illustrator, known for its smooth vector and raster design capabilities.
                                </p>
                                <p>
                                    Great for professional branding and illustration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/custom-web-development.png" loading="lazy" alt="Custom Web Development Icon">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>VistaCreate</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Online design tool for small businesses and marketers.
                                </p>
                                <p>
                                    Features animated designs and social media content templates.
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
                    <img src="https://vedeshra.com/assets/img/vectorimages/graphic-design-vector-img-03.png" loading="lazy" alt="Graphic Design Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <h2>Elevate Your Brand with Expert Graphic Design</h2>
                    <div class="imagewithtextcontent">
                        <p>At <strong> Vedeshra Technologies,</strong> we deliver creative and strategic graphic design solutions that define your brand's visual identity. From logos and color palettes to typography and design systems, we craft cohesive visuals that communicate your brand's essence effectively.</p>
                        <p>Our team creates high-impact designs for digital ads, social media, brochures, and marketing campaigns—ensuring consistency and engagement across all platforms. Every design is tailored to attract attention, spark interest, and drive results.</p>
                        <p>We also specialize in intuitive UI/UX and web graphics, along with custom illustrations and infographics that simplify complex ideas. Our designs not only look great but also enhance user experience and strengthen your brand's credibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Frequently Asked Questions About Our Graphic Design Services</h2>
                <p>At <strong>Vedeshra Technologies,</strong> we believe in clarity and transparency when it comes to our <strong> graphic design services.</strong> Below are some frequently asked questions to help you better understand our <strong> design process, creative approach, and the tools we use </strong> to bring your brand to life.</p>
            </div>

            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What types of graphic design services do you offer?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We specialize in <strong> logo design, branding, social media graphics, UI/UX design, marketing materials, packaging design, and more </strong> to help businesses establish a strong visual presence.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How do you ensure that the design aligns with my brand identity?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We conduct <strong> in-depth brand analysis, competitor research, and consultation </strong> to ensure that the design matches your brand's voice, style, and objectives.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Can I request revisions to my design?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes! We offer <strong> multiple revision rounds </strong> to make sure you're completely satisfied with the final design.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What design software do you use?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We utilize <strong> Adobe Creative Suite (Photoshop, Illustrator, InDesign, XD), Figma, Canva, CorelDRAW, </strong> and other industry-leading tools for high-quality designs.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you provide source files for the designs?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes! Upon project completion, we provide <strong> editable source files (AI, PSD, or other formats) </strong> along with high-resolution images.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How long does the graphic design process take?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>The timeline depends on the project complexity, but typically, we <strong> deliver initial drafts within 2-5 business days </strong> and finalize the design based on feedback.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
