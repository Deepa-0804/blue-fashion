<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Team Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Modern Blue Team Section Styles */
        .team-section {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            padding: 80px 0;
            background: linear-gradient(to bottom, #f0f7ff 0%, #ffffff 100%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Typography */
        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 1rem;
        }

        .lead {
            font-size: 1.25rem;
            color: #3b82f6;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Grid Layout */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin: 40px 0;
        }

        /* Cards */
        .team-card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #3b82f6;
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.2);
        }

        /* List Items */
        .team-list {
            list-style: none;
            padding: 0;
        }

        .team-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1.5rem;
        }

        .team-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 8px;
            height: 8px;
            background-color: #3b82f6;
            border-radius: 50%;
        }

        .team-list strong {
            font-weight: 600;
            color: #1e3a8a;
            display: block;
            margin-bottom: 0.25rem;
        }

        .team-list p {
            color: #4b5563;
            line-height: 1.6;
            margin: 0;
        }

        /* Quote Section */
        .team-quote {
            background: #3b82f6;
            color: white;
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            max-width: 800px;
            margin: 40px auto 0;
            position: relative;
        }

        .team-quote:before {
            content: '"';
            position: absolute;
            font-size: 5rem;
            opacity: 0.1;
            top: 10px;
            left: 20px;
            line-height: 1;
        }

        .team-quote p {
            font-size: 1.25rem;
            font-style: italic;
            position: relative;
            z-index: 1;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
            
            .team-card {
                padding: 20px;
            }
            
            h2 {
                font-size: 2rem;
            }
            
            .lead {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <section class="team-section">
        <div class="container">
            <!-- Header Section -->
            <div class="text-center fade-in">
                <h2>Our Dedicated Team</h2>
                <p class="lead">Behind every perfect stitch is a team of passionate professionals committed to excellence.</p>
            </div>
            
            <!-- Team Highlights Grid -->
            <div class="team-grid">
                <!-- Left Column -->
                <div class="team-card fade-in" style="animation-delay: 0.1s">
                    <ul class="team-list">
                        <li>
                            <strong>Visionary Leadership</strong>
                            <p>Guiding our company with strategic insight and innovative thinking to stay ahead in the competitive textile industry.</p>
                        </li>
                        <li>
                            <strong>Expert Designers</strong>
                            <p>Combining artistic vision with technical expertise to create trendsetting designs that resonate with global audiences.</p>
                        </li>
                        <li>
                            <strong>Production Specialists</strong>
                            <p>Masters of efficiency who ensure our high-volume manufacturing never compromises on quality.</p>
                        </li>
                    </ul>
                </div>
                
                <!-- Right Column -->
                <div class="team-card fade-in" style="animation-delay: 0.2s">
                    <ul class="team-list">
                        <li>
                            <strong>Quality Control Experts</strong>
                            <p>Our meticulous inspectors guarantee every garment meets our exacting standards before it reaches you.</p>
                        </li>
                        <li>
                            <strong>Customer Support</strong>
                            <p>Friendly professionals dedicated to delivering exceptional service and the perfect fit for every customer.</p>
                        </li>
                        <li>
                            <strong>Marketing Strategists</strong>
                            <p>Creative minds who build our brand identity and connect us with customers worldwide.</p>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Quote Section -->
            <div class="team-quote fade-in" style="animation-delay: 0.3s">
                <p>"We don't just make garments—we craft confidence, comfort, and style that empower people every day."</p>
            </div>
        </div>
    </section>
</body>
</html>