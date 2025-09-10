<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Edge - Update Complete</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="checkmark-circle">
                <svg class="checkmark" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h1 class="update-title">Update complete!</h1>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Navigation -->
            <nav class="navigation">
                <button class="next-button">Next</button>
            </nav>

            <!-- Features Section -->
            <section class="features-section">
                <h2 class="features-title">Here's what's new in Microsoft Edge</h2>
                
                <div class="features-grid">
                    <div class="feature-item">
                        <span class="feature-number">1</span>
                        <div class="feature-content">
                            <h3>Enhanced Privacy Protection</h3>
                            <p>Improved tracking prevention and enhanced security features to keep your browsing safe.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <span class="feature-number">2</span>
                        <div class="feature-content">
                            <h3>Faster Performance</h3>
                            <p>Optimized engine for faster page loading and improved overall browsing experience.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <span class="feature-number">3</span>
                        <div class="feature-content">
                            <h3>Collections</h3>
                            <p>Organize your research and ideas with improved Collections feature for better productivity.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <span class="feature-number">4</span>
                        <div class="feature-content">
                            <h3>Vertical Tabs</h3>
                            <p>New tab management options including vertical tabs for better workspace organization.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <span class="feature-number">5</span>
                        <div class="feature-content">
                            <h3>Shopping Features</h3>
                            <p>Built-in price comparison and coupon finding to help you save money while shopping online.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <span class="feature-number">6</span>
                        <div class="feature-content">
                            <h3>Immersive Reader</h3>
                            <p>Enhanced reading experience with improved text-to-speech and customization options.</p>
                        </div>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="search-container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" class="search-form">
                        <input type="text" name="search" placeholder="Search for features and help..." class="search-input" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                        <button type="submit" class="search-button">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 21L16.514 16.506M19 10.5C19 15.194 15.194 19 10.5 19S2 15.194 2 10.5S5.806 2 10.5 2S19 5.806 19 10.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </form>
                    
                    <?php
                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $searchTerm = htmlspecialchars($_GET['search']);
                        echo "<div class='search-result'>You searched for: <strong>$searchTerm</strong></div>";
                    }
                    ?>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-links">
                    <a href="#privacy">Privacy</a>
                    <span class="separator">•</span>
                    <a href="#terms">Terms of Use</a>
                    <span class="separator">•</span>
                    <a href="#support">Support</a>
                </div>
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> Microsoft Corporation. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Simple JavaScript for Next button interaction
        document.querySelector('.next-button').addEventListener('click', function() {
            alert('Proceeding to next step...');
        });

        // Add some interactivity to feature items
        document.querySelectorAll('.feature-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>