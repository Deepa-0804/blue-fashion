<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- About Column -->
                <div class="footer-col">
                    <div class="footer-widget">
                        <h3 class="footer-title">Global Textile Solutions</h3>
                        <p class="footer-about">Innovating textile manufacturing with sustainable practices and cutting-edge technology since 2005.</p>
                        <div class="footer-social">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links Column -->
                <div class="footer-col">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="sustainability.html">Sustainability</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Products Column -->
                <div class="footer-col">
                    <div class="footer-widget">
                        <h3 class="footer-title">Our Products</h3>
                        <ul class="footer-links">
                            <li><a href="silk-fabric.php">Silk Fabrics</a></li>
                            <li><a href="cotton-fabric.php">Cotton Textiles</a></li>
                            <li><a href="technical-textiles.php">Technical Textiles</a></li>
                            <li><a href="sustainable-materials.php">Sustainable Materials</a></li>
                            <li><a href="custom-fabrics.php">Custom Fabrics</a></li>
                            <li><a href="industrial-textiles.html">Industrial Textiles</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact Column -->
                <div class="footer-col">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Us</h3>
                        <div class="footer-contact">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>123 Textile Avenue<br>Fabric City, FC 12345</p>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone-alt"></i>
                                <p><a href="tel:+18001234567">+1 (800) 123-4567</a></p>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <p><a href="mailto:info@globaltextile.com">info@globaltextile.com</a></p>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <p>Mon-Fri: 9AM - 6PM<br>Sat: 10AM - 4PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="copyright">
                    &copy; 2025 Global Textile Solutions. All Rights Reserved.
                </div>
                <div class="footer-legal">
                    <a href="privacy-policy.html">Privacy Policy</a>
                    <a href="terms-of-service.html">Terms of Service</a>
                    <a href="sitemap.html">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
/* Footer Styles */
.site-footer {
    background: linear-gradient(135deg, #002366 0%, #001a4d 100%);
    color: #ffffff;
    font-family: 'Open Sans', sans-serif;
    position: relative;
    overflow: hidden;
}

.site-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://static.vecteezy.com/system/resources/previews/024/733/159/original/blue-flying-fabric-3d-wave-cloth-ai-generative-free-png.png') center/cover;
    opacity: 0.05;
    z-index: 0;
}

.footer-top {
    padding: 60px 0 40px;
    position: relative;
    z-index: 1;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.footer-col {
    padding: 0 15px;
}

.footer-widget {
    margin-bottom: 30px;
}

.footer-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.3rem;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 20px;
    padding-bottom: 10px;
    position: relative;
}

.footer-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg, #2196F3 0%, #87CEEB 100%);
    border-radius: 3px;
}

.footer-about {
    color: #b3d4ff;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #b3d4ff;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    padding-left: 15px;
    font-size: 0.95rem;
}

.footer-links a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 6px;
    height: 6px;
    background-color: #2196F3;
    border-radius: 50%;
    opacity: 0;
    transition: all 0.3s ease;
}

.footer-links a:hover {
    color: #ffffff;
    padding-left: 20px;
}

.footer-links a:hover::before {
    opacity: 1;
    left: 5px;
}

.footer-social {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.footer-social a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border-radius: 50%;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.footer-social a:hover {
    background: #2196F3;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(33, 150, 243, 0.3);
}

.footer-contact {
    margin-top: 20px;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
}

.contact-item i {
    color: #2196F3;
    font-size: 1.1rem;
    margin-right: 15px;
    margin-top: 3px;
    min-width: 20px;
}

.contact-item p, .contact-item a {
    color: #b3d4ff;
    margin: 0;
    font-size: 0.95rem;
    line-height: 1.5;
    transition: color 0.3s ease;
}

.contact-item a:hover {
    color: #ffffff;
    text-decoration: none;
}

.footer-bottom {
    background: rgba(0, 0, 0, 0.2);
    padding: 20px 0;
    position: relative;
    z-index: 1;
}

.footer-bottom-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.copyright {
    color: #b3d4ff;
    font-size: 0.9rem;
}

.footer-legal {
    display: flex;
    gap: 20px;
}

.footer-legal a {
    color: #b3d4ff;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.footer-legal a:hover {
    color: #ffffff;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .footer-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .footer-bottom-content {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .footer-legal {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .footer-top {
        padding: 40px 0 20px;
    }
    
    .footer-grid {
        grid-template-columns: 1fr;
    }
    
    .footer-col {
        padding: 0;
    }
    
    .footer-title {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .footer-legal {
        flex-direction: column;
        gap: 10px;
    }
    
    .footer-social {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .footer-top {
        padding: 25px;
    }
    .footer-title {
        font-size: 1rem;
        padding-bottom: 6px;
    }
    .footer-about {
        font-size: 0.9rem;
    }
    .footer-links a {
        font-size: 0.9rem;
        padding-left: 12px;
    }
    .footer-social a {
        width: 32px;
        height: 32px;
        font-size: 0.9rem;
    }
    .contact-item i {
        font-size: 1rem;
        margin-right: 10px;
    }
    .footer-bottom {
        padding: 12px 0;
    }
    .copyright, .footer-legal a {
        font-size: 0.8rem;
    }
}
</style>