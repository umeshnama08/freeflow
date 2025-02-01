<!-- Add this in the <head> section for AOS library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<style>
    /* Styling for the Services section */
.services {
    padding: 60px 0;
    background-color: #f7f7f7;
    background: url('assets/images/1381848.jpg')
}

.service-box {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.service-box h3 {
    font-size: 22px;
    margin-bottom: 20px;
    color: #333;
}

.service-box p {
    font-size: 16px;
    color: #555;
}

/* For Progress Bar Animation */
.progress-container {
    margin-top: 20px;
    background: #f0f0f0;
    height: 10px;
    border-radius: 5px;
    overflow: hidden;
}

.progress-bar {
    width: 0%;
    height: 100%;
    background: #28a745;
    text-align: center;
    line-height: 10px;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    transition: width 2s ease-in-out;
}

.progress-bar .percent {
    display: none;
}

/* AOS Animations */
[data-aos="fade-up"] {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 1s ease, transform 1s ease;
}

[data-aos="fade-up"].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

@media (max-width: 768px) {
    .service-box {
        padding: 20px;
    }
}

</style>
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 text-center mx-auto mb-5 aos-init aos-animate" data-aos="fade-down">
                    <small class="small-title">OUR SERVICES</small>

                    <h2>Full Services of Our Digital Agency</h2>

                </div>
                
                <!-- First Row: Web Designing, Web Development, E-Commerce Website Development -->
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up">
                    <div class="service-box">
                        <h3>Web Designing</h3>
                        <p>Site Invention love designing websites with creativity. We understand your needs and build websites the way you want - Static, Dynamic, or E-Commerce.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h3>Web Development</h3>
                        <p>We specialize in web development with great customer service. We offer complete design, technical, and enabling infrastructure for your website.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box">
                        <h3>E-Commerce Website Development</h3>
                        <p>Our e-commerce services help businesses create a professional website to boost their sales by attracting customers and providing a seamless shopping experience.</p>
                        <div class="progress-container">
                            <div class="progress-bar" data-percent="85">
                                <span class="percent">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Second Row: SEO, Website Redesigning, Domain Registration & Hosting -->
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box">
                        <h3>Search Engine Optimization</h3>
                        <p>Our SEO services strive to keep your business on top of Google, focusing on ranking and expanding your customer base.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box">
                        <h3>Website Redesigning</h3>
                        <p>Our focus while redesigning websites is to engage and entertain customers with appealing graphics, content, and interactions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box">
                        <h3>Domain Registration & Hosting</h3>
                        <p>We simplify the domain registration process with our technical assistance throughout the process and provide secure hosting services.</p>
                    </div>
                </div>
    
                <!-- Third Row: Graphic Design, Mobile Application Development, Content Writing -->
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box">
                        <h3>Graphic Design</h3>
                        <p>Our graphic designers create outstanding designs that complement your business needs, leaving a lasting impression on viewers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box">
                        <h3>Mobile Application Development</h3>
                        <p>Mobile apps are essential for businesses to engage with customers on digital platforms. We develop apps that provide information and insights to users.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <div class="service-box">
                        <h3>Content Writing</h3>
                        <p>We create exclusive content that improves SEO, engages users, and helps your business grow with professional writers on board.</p>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
