@extends('layouts/commonLayout')

@section('title')
    PPC Advertising Services | Vedeshra Technologies: Maximize ROI with Paid Ads
@endsection

@section('meta')
    <meta name="title" content="PPC Advertising Services | Vedeshra Technologies: Maximize ROI with Paid Ads">
    <meta name="description"
        content="Get expert PPC advertising services from Vedeshra Technologies. We create high-performing paid ad campaigns to drive traffic, leads, and conversions for your business.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Vedeshra Technologies LLC">

    <link rel="canonical" href="https://vedeshra.com/services/ppc-advertising/" />

    <meta property="og:title" content="PPC Advertising Services | Vedeshra Technologies">
    <meta property="og:site_name" content="Vedeshra Technologies">
    <meta property="og:url" content="https://vedeshra.com/services/ppc-advertising/">
    <meta property="og:description"
        content="Vedeshra Technologies offers expert PPC advertising services, including Google Ads, Bing Ads, and social media paid campaigns. Get more leads with strategic paid marketing.">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PPC Advertising Services | Vedeshra Technologies">
    <meta name="twitter:description"
        content="Boost your online presence with expert PPC advertising from Vedeshra Technologies. Get high-converting campaigns tailored to your business needs.">


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "PPC Advertising",
  "provider": {
    "@type": "Organization",
    "name": "Vedeshra Technologies",
    "url": "https://vedeshra.com/"
  },
  "serviceType": "Pay-Per-Click Advertising",
  "areaServed": ["US", "GB", "CA", "AF"],
  "description": "Vedeshra Technologies offers professional PPC advertising services, including Google Ads, Bing Ads, social media paid advertising, and conversion optimization strategies.",
  "offers": {
    "@type": "Offer",
    "price": "Custom",
    "priceCurrency": "USD",
    "url": "https://vedeshra.com/services/ppc-advertising/"
  },
  "logo": "https://vedeshra.com/assets/img/logo/vedeshra_logo_180w_tr.png",
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
                    <h1>Maximize ROI with Expert PPC Advertising</h1>
                    <div class="innerherocontent">
                        <p>At <strong>Vedeshra Technologies,</strong> we specialize in <strong>high-converting Pay-Per-Click
                                (PPC) advertising</strong> campaigns designed to drive <strong>targeted traffic, increase
                                conversions, and maximize ROI.</strong> Our <strong>data-driven PPC strategies </strong>
                            ensure your brand reaches the <strong>right audience at the right time, </strong> leading to
                            <strong> higher engagement and sales.</strong></p>
                        <p>We create <strong> custom PPC strategies </strong> to your business goals, whether you're looking
                            for <strong> Google Ads, Bing Ads, Facebook Ads, LinkedIn Ads, or eCommerce PPC. </strong> Our
                            team of <strong> PPC experts</strong> ensures your ads are optimized with <strong> high-intent
                                keywords, compelling ad copy, and strategic bidding </strong> to deliver the best results.
                        </p>
                        <p>By leveraging <strong>A/B testing, audience targeting, and real-time performance tracking,
                            </strong> we continuously optimize your campaigns to ensure <strong> lower cost-per-click (CPC),
                                higher quality scores, and improved ad placements. </strong></p>
                        <p><strong>Let Vedeshra Technologies help you scale your business with high-impact PPC advertising
                                that drives results.</strong></p>
                    </div>
                    <div class="innerherobutton">
                        <a href="{{ route('contact') }}/" class="button">Get Started</a>
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
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/data-driven-approach.png"
                                loading="eager" fetchpriority="high" alt="Data Driven Strategy Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Data-Driven Strategies</h3>
                            <p>Targeted PPC campaigns using keyword research, audience segmentation, and analytics.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/multi-platform-expertise.png"
                                loading="eager" fetchpriority="high" alt="Multi Platform Expertise Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Multi-Platform Expertise</h3>
                            <p>Optimized ads on Google, Bing, Facebook, Instagram, LinkedIn, and YouTube.</p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/optimize-ad-spend.png"
                                loading="eager" fetchpriority="high" alt="Optimize Ad Spend Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Optimized Ad Spend</h3>
                            <p>Smart bid management to maximize budget, minimize CPC, and boost engagement.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="four-column-flex-item-box">
                    <div class="four-column-flex-item">
                        <div class="four-column-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/monitoring.png" loading="eager"
                                fetchpriority="high" alt="Monitoring Image">
                        </div>
                        <div class="four-column-content-box">
                            <h3>Continuous Monitoring & Optimization</h3>
                            <p>Real-time tracking, A/B testing, and performance analysis for better results.</p>
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
                    <img src="https://vedeshra.com/assets/img/vectorimages/ppc-services-img-05.png" loading="lazy"
                        alt="Targetted PPC Vector Image">
                </div>
                <div class="imagewithtextcontentbox">
                    <h2>Boost Conversions with Targeted PPC Ads</h2>
                    <div class="imagewithtextcontent">
                        <p>At Vedeshra Technologies, we craft highly targeted PPC campaigns designed to drive qualified
                            traffic and maximize conversions. By leveraging data-driven insights, audience targeting, and
                            keyword research, we ensure that your ads reach the right users at the right time, leading to
                            higher engagement and ROI.</p>
                        <p>Our PPC experts optimize every aspect of your campaign, from ad copy and bidding strategies to
                            landing page optimization. With a focus on Google Quality Score, ad relevance, and user intent,
                            we help reduce cost-per-acquisition (CPA) while improving your ad ranking and click-through rate
                            (CTR).</p>
                        <p>Whether it’s search, display, shopping, or remarketing ads, we ensure high visibility and smart
                            budget use. At Vedeshra Technologies, we optimize campaigns in real-time to deliver results that
                            drive growth and profitability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inner Services Grid Section --}}
    <section class="inner-services-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Comprehensive PPC Advertising Services</h2>
                <p>At Vedeshra Technologies, we offer full-service PPC management tailored to your business goals. From
                    Google Ads and Social Media Advertising to Remarketing and eCommerce PPC, our experts create and manage
                    highly effective campaigns that drive conversions and maximize ROI.</p>
            </div>

            <div class="inner-services-grid-box">
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/ads-management.png" loading="lazy"
                                alt="Ads Management Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Google Ads Management</h3>
                            <p>Our Google Ads experts create high-converting search, display, and shopping campaigns that
                                increase visibility and drive targeted traffic, ensuring maximum return on investment (ROI).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/social-media-advertising.png"
                                loading="lazy" alt="Social Media Advertising Image">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Social Media Advertising</h3>
                            <p> We design and manage Facebook, Instagram, LinkedIn, and Twitter Ads, using precise audience
                                targeting and engaging ad creatives to increase brand awareness and lead generation.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/ppc-compaigns.png" loading="lazy"
                                alt="PPC Compaigns Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Ecommerce PPC Campaigns</h3>
                            <p>Boost your online store sales with Google Shopping Ads, Amazon Ads, and dynamic remarketing
                                campaigns that drive qualified traffic and higher conversion rates.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/remarketing.png" loading="lazy"
                                alt="Remarketing Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Remarketing & Retargeting</h3>
                            <p>Stay top-of-mind with potential customers by using advanced retargeting strategies that
                                re-engage visitors and convert abandoned traffic into loyal customers.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/landing-page-optimization.png"
                                loading="lazy" alt="Landing Page Optimization Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>Landing Page Optimization</h3>
                            <p>We create and optimize high-converting landing pages that improve Quality Score, lower CPC,
                                and enhance user experience, leading to higher ad performance.</p>
                        </div>
                    </div>
                </div>
                <div class="inner-services-grid-item-box">
                    <div class="inner-services-grid-item">
                        <div class="inner-services-grid-icon-box">
                            <img src="https://vedeshra.com/assets/img/icons/innerpages/performance.png" loading="lazy"
                                alt="Performance Icon">
                        </div>
                        <div class="inner-services-grid-content-box">
                            <h3>PPC Performance Tracking & Reporting</h3>
                            <p>Our real-time analytics and detailed reports provide insights into campaign performance,
                                allowing us to refine bidding strategies, ad creatives, and targeting for maximum
                                efficiency.</p>
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
                <h2>Powerful PPC Tools for Maximum Performance</h2>
                <p>At Vedeshra Technologies, we utilize industry-leading PPC tools to optimize campaigns, track performance,
                    and maximize return on ad spend (ROAS). These tools help us with keyword research, bid management, ad
                    performance analysis, and A/B testing to ensure high-converting PPC campaigns.</p>
            </div>
            <div class="tools-flex-box">
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/ahrefs-tools-image.png" loading="lazy"
                            alt="Ahref Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-analytics-tools-image.png"
                            loading="lazy" alt="Google Analytics Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/google-tools-image.png" loading="lazy"
                            alt="Google Search Console Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/moz-tools-image.png" loading="lazy"
                            alt="MOZ Logo">
                    </div>
                </div>
                <div class="tools-flex-item-box">
                    <div class="tools-flex-image-box">
                        <img src="https://vedeshra.com/assets/img/icons/tools/semrush-tools-img.png" loading="lazy"
                            alt="Semrush Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="inner-page-cta-section section">
        <div class="container">
            <div class="inner-page-cta-box">
                <h2>Ready to Skyrocket Your Business with PPC?</h2>
            </div>
            <div class="inner-page-cta-button-flex-box">
                <div class="inner-page-cta-button-flex-item-box">
                    <button class="get-in-touch-popup-box">Get a Free PPC Consultation</button>
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
                    <h2>Drive Results with Expert PPC Management</h2>
                    <div class="imagewithtextcontent">
                        <p>At Vedeshra Technologies, we take a data-driven approach to PPC management, ensuring that every
                            campaign is optimized for maximum performance. From keyword research and bid strategies to ad
                            copy optimization and A/B testing, we refine every aspect of your Google Ads and social media ad
                            campaigns.</p>
                        <p>Our real-time performance tracking and continuous optimization help lower cost-per-click (CPC)
                            while increasing click-through rates (CTR) and conversions. Whether you're targeting search,
                            display, shopping, or remarketing ads, our expert PPC strategies will help you achieve higher
                            ROI and business growth.</p>
                        <p>We focus on delivering not just clicks, but meaningful results—helping your business gain
                            visibility, attract the right audience, and convert them into loyal customers.</p>
                    </div>
                </div>
                <div class="imagewithtextfleximagebox">
                    <img src="https://vedeshra.com/assets/img/vectorimages/ppc-services-img-03.png" loading="lazy"
                        alt="SEO Services Vector Image">
                </div>
            </div>
        </div>
    </section>

    {{-- Strategy Steps Section --}}
    <section class="strategy-steps-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Our Proven PPC Advertising Strategy</h2>
            </div>
            <div class="strategy-steps-grid-box">
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>1</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Business & Audience Research</h3>
                            <p>We analyze your business goals, target audience, and competitors to build a custom PPC
                                strategy that aligns with your objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>2</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3> Keyword Research & Selection</h3>
                            <p>Using advanced keyword research tools, we identify high-intent, low-cost, and competitive
                                keywords to target the right audience.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>3</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Ad Copy & Creative Development</h3>
                            <p>We craft compelling ad copy, engaging visuals, and high-converting landing pages to increase
                                click-through rates (CTR).</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>4</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Campaign Setup & Bidding Strategy</h3>
                            <p>Our experts configure the right bidding model (CPC, CPM, CPA) to optimize ad spend and
                                maximize returns.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>5</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Performance Tracking & Analytics</h3>
                            <p>With real-time tracking tools, we monitor ad performance, analyze data, and make data-driven
                                decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>6</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>A/B Testing & Optimization</h3>
                            <p>We continuously test ad variations, landing pages, and bid strategies to improve conversion
                                rates and reduce costs.</p>
                        </div>
                    </div>
                </div>
                <div class="strategy-steps-grid-item-box">
                    <div class="strategy-grid-item">
                        <div class="strategy-number-box">
                            <span>7</span>
                        </div>
                        <div class="strategy-content-box">
                            <h3>Scaling & Continuous Improvement</h3>
                            <p>Based on campaign performance, we scale successful ads, refine underperforming ones, and
                                ensure consistent growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Technology Tabber Section --}}
    <section class="techhnology-grid-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Advanced PPC Technologies & Frameworks</h2>
                <p>At Vedeshra Technologies, we leverage the latest PPC technologies and frameworks to ensure your ads
                    achieve maximum reach, engagement, and conversions. Our expertise in bid automation, audience targeting,
                    and data analytics allows us to run cost-effective and high-ROI campaigns across multiple platforms.</p>
            </div>
            <div class="technology-grid-box">
                <div class="technology-grid-item-box">
                    <div class="technology-grid-heading">
                        <h3>Languages & Markup</h3>
                    </div>
                    <div class="technology-grid-content-main-box">
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/html-technology-icon.png"
                                        loading="lazy" alt="HTML Technology Icon">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>HTML</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/css-technology-icon.png"
                                        loading="lazy" alt="CSS Technology Icon">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>CSS</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/js-technology-icon.png"
                                        loading="lazy" alt="JS Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>JavaScript</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/json-technology-icon.png"
                                        loading="lazy" alt="JSON-LD Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>JSON-LD</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/xml-technology-icon.png"
                                        loading="lazy" alt="XML Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>XML</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="technology-grid-item-box">
                    <div class="technology-grid-heading">
                        <h3>SEO Tools</h3>
                    </div>
                    <div class="technology-grid-content-main-box">
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/gsc-technology-icon.png"
                                        loading="lazy" alt="Google Search Console Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Google Search Console</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/analytics-technology-icon.png"
                                        loading="lazy" alt="Google Analytics Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Google Analytics 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/ahref-technology-icon.png"
                                        loading="lazy" alt="Ahref Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Ahrefs</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/semrush-technology-icon.png"
                                        loading="lazy" alt="Semrush Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Semrush</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/surfer-technology-icon.png"
                                        loading="lazy" alt="Surfer SEO Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Surfer SEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="technology-grid-item-box">
                    <div class="technology-grid-heading">
                        <h3>SEO Frameworks</h3>
                    </div>
                    <div class="technology-grid-content-main-box">
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/nextjs-technology-icon.png"
                                        loading="lazy" alt="Next JS Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Next.js</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/nuxt-technology-icon.png"
                                        loading="lazy" alt="Nuxt JS Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Nuxt.js</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/gatsby-technology-icon.png"
                                        loading="lazy" alt="Gatsby Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Gatsby</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/amp-technology-icon.png"
                                        loading="lazy" alt="AMP Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>AMP (Accelerated Mobile Pages)</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/schema-technology-icon.png"
                                        loading="lazy" alt="Schema Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Schema.org</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="technology-grid-item-box">
                    <div class="technology-grid-heading">
                        <h3>Databases & Caching</h3>
                    </div>
                    <div class="technology-grid-content-main-box">
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/redis-technology-icon.png"
                                        loading="lazy" alt="Redis Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Redis</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/mongodb-technology-icon.png"
                                        loading="lazy" alt="MongoDB Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>MongoDB</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/sqlite-technology-icon.png"
                                        loading="lazy" alt="SQLite Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>SQLite</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/cloudflare-technology-icon.png"
                                        loading="lazy" alt="Cloudflare Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>Cloudflare CDN</p>
                                </div>
                            </div>
                        </div>
                        <div class="technology-grid-content-item-box">
                            <div class="technology-grid-content-flex-box">
                                <div class="technology-grid-content-icon-box">
                                    <img src="https://vedeshra.com/assets/img/icons/technology/awscloudfront-technology-icon.png"
                                        loading="lazy" alt="AWS Cloudfront Technology Logo">
                                </div>
                                <div class="technology-grid-content-paragraph-box">
                                    <p>AWS CloudFront</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Slider Section --}}
    @include('content.sections.servicesslider')

    {{-- Platform Section --}}
    <section class="platform-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Expand your reach and maximize ROI with industry-leading PPC platforms.</h2>
                <p>At Vedeshra Technologies, we manage data-driven PPC campaigns across multiple platforms to help
                    businesses achieve higher conversions and lower ad costs. Our expertise in platform-specific strategies,
                    audience targeting, and ad optimization ensures that your campaigns deliver the best results possible.
                </p>
            </div>

            <div class="platform-grid-box">
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/google-ads-ppc.png" loading="lazy"
                                alt="Google Ads Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Google Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Run highly targeted search, display, shopping, and YouTube ads with Google Ads, ensuring
                                    maximum reach and conversions. Our experts optimize campaigns for high-quality leads and
                                    lower cost-per-click (CPC).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/bing-ads-ppc.png" loading="lazy"
                                alt="Microsoft(Bing) Advertising Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Microsoft Ads (Bing Ads)</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Expand your business reach with Bing and Yahoo advertising. Our PPC specialists optimize
                                    Bing Ads to target high-intent users, ensuring cost-effective ad placements and higher
                                    returns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/facebook-ads-ppc.png" loading="lazy"
                                alt="Facebook Ads Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Facebook Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Leverage Facebook's vast audience with data-driven ad strategies. Our experts create
                                    engaging carousel ads, video ads, and lead generation campaigns to boost brand awareness
                                    and conversions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/instagram-ads-ppc.png"
                                loading="lazy" alt="Instagram Ads Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Instagram Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Tap into the power of visual storytelling with Instagram Ads. We craft visually
                                    compelling ad creatives and use advanced targeting options to engage potential customers
                                    effectively.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/linkedin-ads-ppc.png" loading="lazy"
                                alt="Linkedin Ads Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>LinkedIn Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Ideal for B2B marketing, LinkedIn Ads help businesses target decision-makers and
                                    professionals. We optimize sponsored content, InMail campaigns, and text ads for
                                    high-quality lead generation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/twitter-ads-ppc.png" loading="lazy"
                                alt="Twitter Advertising Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Twitter Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Boost brand engagement and visibility with Twitter Ads. Our PPC team creates high-impact
                                    promoted tweets, video ads, and trend campaigns to capture audience attention.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/youtube-ads-ppc.png" loading="lazy"
                                alt="Youtube Advertising Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>YouTube Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Run video advertising campaigns on the world's second-largest search engine. We optimize
                                    skippable and non-skippable ads, ensuring maximum audience engagement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/amazon-ads-ppc.png" loading="lazy"
                                alt="Amazon Advertising Logo">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Amazon Ads</h3>
                            <div class="platformgridcontent">
                                <p>
                                    For Ecommerce businesses, Amazon Ads drive higher product visibility and sales. We
                                    create and optimize sponsored product ads, brand ads, and display ads for maximum ROI.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="platform-grid-item-box">
                    <div class="platform-grid-item">
                        <div class="platformgridicon">
                            <img src="https://vedeshra.com/assets/img/icons/platforms/custom-ppc.png" loading="lazy"
                                alt="Custom PPC Advertising Icon">
                        </div>
                        <div class="platformgridcontentbox">
                            <h3>Custom PPC Campaigns</h3>
                            <div class="platformgridcontent">
                                <p>
                                    Every business is unique! At Vedeshra Technologies, we design tailored PPC advertising
                                    strategies to suit specific business needs, ensuring highly targeted traffic and better
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

    {{-- FAQ Section --}}
    <section class="faq-section section">
        <div class="container">
            <div class="sectiontitlebox">
                <h2>Frequently Asked Questions About PPC Advertising</h2>
                <p>Get clear answers to your PPC queries and discover how Vedeshra Technologies can drive maximum ROI for
                    your business.</p>
            </div>

            <div class="faq-accordion-container">
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>What is PPC advertising, and how does it work?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>PPC (Pay-Per-Click) advertising is a digital marketing strategy where advertisers pay only when
                            users click on their ads. Platforms like Google Ads, Bing Ads, and social media channels allow
                            businesses to target specific keywords, demographics, and audiences to drive targeted traffic
                            and conversions.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Why should I choose Vedeshra Technologies for PPC services?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>At Vedeshra Technologies, we specialize in highly optimized PPC campaigns designed to reduce ad
                            spend, increase conversions, and maximize ROI. Our data-driven approach, expert bid strategies,
                            and continuous optimization ensure that your campaigns perform at their best.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Which platforms do you manage PPC campaigns on?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>We manage PPC campaigns on Google Ads, Bing Ads, Facebook, Instagram, LinkedIn, Twitter, and
                            YouTube. Our experts tailor strategies to each platform's audience behavior to drive maximum
                            engagement and results.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How much should I budget for a PPC campaign?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>
                            The budget depends on your industry, competition, and business goals. At Vedeshra Technologies,
                            we create custom PPC strategies to help you get the most out of your ad spend while ensuring
                            maximum ROI.
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>How long does it take to see results from PPC?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>PPC advertising delivers instant visibility, and you can start seeing results within days.
                            However, continuous optimization, testing, and bid adjustments improve performance over time,
                            leading to lower costs and higher conversions.</p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-accordion-question">
                        <h3>Do you provide PPC campaign tracking and reports?</h3>
                        <div class="faq-accordion-toggle">
                            <span class="plusminus">+</span>
                        </div>
                    </div>
                    <div class="faq-accordion-answer">
                        <p>Yes! We offer detailed performance tracking, analytics reports, and campaign insights so you can
                            see how your ads are performing, track conversions, and make data-driven decisions to scale your
                            business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
