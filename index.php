<?php
/**
 * QuickPOS Landing Page - Main File
 * Jira: SPM-10, SPM-11, SPM-12, SPM-13
 * php -S localhost:8000
 * 
 * http://localhost:8000/index.php
 * 
 */
include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Modernize Your Business with <span class="gradient-text">QuickPOS</span>
                </h1>
                
                <p class="hero-subtitle">
                    The fastest, most reliable point-of-sale system designed for modern businesses. 
                    Boost sales, manage inventory, and delight customers—all in one platform.
                </p>
                <div class="hero-cta">
                    <a href="#contact" class="btn btn-large btn-primary">Get Started Free</a>
                    <a href="#features" class="btn btn-large btn-outline">Learn More</a>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="assets/images/pos-mockup.png" alt="QuickPOS System Dashboard" class="mockup-img">
                <div class="mockup-glow"></div>
            </div>
        </div>
    </div>
</section>
<section id="features" class="features-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Powerful Features for Modern Businesses</h2>
            <p class="section-subtitle">Everything you need to run your business efficiently</p>
        </div>
        
        <!-- Features Grid - SPM-14 -->
        <div class="features-grid">
                        
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <div class="feature-content">
    <h3 class="feature-title">Easy to Use Interface</h3>
    <p class="feature-description">Intuitive design that your team can master in minutes, not weeks.</p>
</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 7h-9"/>
                        <path d="M14 17H5"/>
                        <circle cx="17" cy="17" r="3"/>
                        <circle cx="7" cy="7" r="3"/>
                    </svg>
                </div>
                <div class="feature-content">
    <h3 class="feature-title">Inventory Management</h3>
    <p class="feature-description">Track stock levels in real-time and never run out of bestsellers.</p>
</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <div class="feature-content">
    <h3 class="feature-title">Multiple Payment Options</h3>
    <p class="feature-description">Accept cash, cards, mobile payments, and more—all in one system.</p>
</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <div class="feature-content">
    <h3 class="feature-title">Cloud-Based System</h3>
    <p class="feature-description">Access your data from anywhere, on any device, anytime.</p>
</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <div class="feature-content">
    <h3 class="feature-title">Real-Time Analytics</h3>
    <p class="feature-description">Make data-driven decisions with powerful sales insights.</p>
</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <div class="feature-content">
    <h3 class="feature-title">Secure & Reliable</h3>
    <p class="feature-description">Enterprise-grade security keeping your business data safe 24/7.</p>
</div>
            </div>
        </div>
    </div>
</section>
<section id="pricing" class="pricing-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <p class="section-subtitle">Choose the plan that fits your business needs</p>
        </div>
        
        <!-- Pricing Grid - SPM-17 -->
        <div class="pricing-grid">
             <!-- Basic Plan - SPM-18 -->
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3 class="plan-name">Basic</h3>
                    <p class="plan-description">Perfect for small businesses</p>
                </div>
    
                <div class="pricing-price">
                    <span class="currency">$</span>
                    <span class="amount">29</span>
                    <span class="period">/month</span>
                </div>
    
                <ul class="pricing-features">
                    <li>✓ Up to 2 devices</li>
                    <li>✓ Basic inventory management</li>
                    <li>✓ Sales reports</li>
                    <li>✓ Email support</li>
                    <li>✓ 100 products</li>
                </ul>
    
                <a href="#contact" class="btn btn-outline btn-block">Get Started</a>
            </div>

            <!-- Pro Plan - SPM-19 -->
            <div class="pricing-card pricing-featured">
                <div class="featured-badge">Most Popular</div>
    
                <div class="pricing-header">
                    <h3 class="plan-name">Pro</h3>
                    <p class="plan-description">Ideal for growing businesses</p>
                </div>
    
                <div class="pricing-price">
                    <span class="currency">$</span>
                    <span class="amount">79</span>
                    <span class="period">/month</span>
                </div>
    
                <ul class="pricing-features">
                    <li>✓ Up to 5 devices</li>
                    <li>✓ Advanced inventory management</li>
                    <li>✓ Advanced analytics & reports</li>
                    <li>✓ Priority support</li>
                    <li>✓ Unlimited products</li>
                    <li>✓ Customer management</li>
                    <li>✓ Multi-location support</li>
                </ul>
    
                <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
            </div> <!-- Closing Pro Plan -->

            <!-- Enterprise Plan - SPM-20 -->
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3 class="plan-name">Enterprise</h3>
                    <p class="plan-description">For large-scale operations</p>
                </div>

                <div class="pricing-price">
                    <span class="currency">$</span>
                    <span class="amount">199</span>
                    <span class="period">/month</span>
                </div>

                <ul class="pricing-features">
                    <li>✓ Unlimited devices</li>
                    <li>✓ Full inventory suite</li>
                    <li>✓ Custom reports & analytics</li>
                    <li>✓ 24/7 dedicated support</li>
                    <li>✓ Unlimited products</li>
                    <li>✓ Advanced integrations</li>
                    <li>✓ Custom training</li>
                    <li>✓ API access</li>
                </ul>
                <a href="#contact" class="btn btn-outline btn-block">Contact Sales</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Get in Touch</h2>
            <p class="section-subtitle">Have questions? We'd love to hear from you.</p>
        </div>
        
        <!-- Contact Form - SPM-21 -->
        <div class="contact-wrapper">
            <form id="contactForm" class="contact-form" method="POST" action="contact-handler.php">
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="form-label">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-input" 
                        placeholder="John Doe" 
                        required
                    >
                </div>
                
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-input" 
                        placeholder="john@example.com" 
                        required
                    >
                </div>
                
                <!-- Phone Field -->
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone" 
                        class="form-input" 
                        placeholder="+1 (555) 000-0000"
                    >
                </div>
                
                <!-- Subject Field -->
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <select id="subject" name="subject" class="form-input" required>
                        <option value="">Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="sales">Sales Question</option>
                        <option value="support">Technical Support</option>
                        <option value="demo">Request a Demo</option>
                    </select>
                </div>
                
                <!-- Message Field -->
                <div class="form-group form-group-full">
                    <label for="message" class="form-label">Message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        class="form-input form-textarea" 
                        rows="5" 
                        placeholder="Tell us how we can help you..."
                        required
                    ></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="form-group form-group-full">
                    <button type="submit" class="btn btn-primary btn-large btn-block">
                        Send Message
                    </button>
                </div>
                
                <!-- Response Message -->
                <div id="formResponse" class="form-response"></div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>