@extends('Layout.app')

@section('styles')
    <style>
        .contact-section {
            margin-top: 100px;
            padding: 60px;
            background-color: #f9f9fb;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .contact-section h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #333;
            text-align: center;
        }

        .contact-section p {
            text-align: center;
            color: #555;
            font-size: 1.1rem;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .contact-form {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            height: 45px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .contact-info {
            margin-top: 50px;
            padding: 40px;
            background-color: #f1f1f1;
            border-radius: 10px;
            text-align: center;
        }

        .contact-info h5 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .contact-info p {
            color: #777;
            margin-bottom: 15px;
        }

        .contact-info a {
            color: #007bff;
            font-weight: 600;
            text-decoration: none;
        }

        .contact-info a:hover {
            color: #0056b3;
        }

        /* Icons */
        .contact-icon {
            font-size: 1.5rem;
            color: #007bff;
            margin-right: 10px;
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .contact-section {
                padding: 30px;
            }

            .contact-section h1 {
                font-size: 2.5rem;
            }

            .contact-section p {
                font-size: 1rem;
                margin-bottom: 30px;
            }

            .btn-submit {
                padding: 10px 20px;
                font-size: 1rem;
            }

            .contact-info {
                padding: 30px;
            }

            .contact-info h5 {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 767px) {
            .contact-section {
                padding: 20px;
            }

            .contact-section h1 {
                font-size: 2rem;
            }

            .contact-section p {
                font-size: 0.95rem;
                margin-bottom: 20px;
            }

            .form-control {
                height: 40px;
            }

            .btn-submit {
                padding: 8px 20px;
                font-size: 0.95rem;
            }

            .contact-info {
                padding: 20px;
            }

            .contact-info h5 {
                font-size: 1.2rem;
            }

            /* Adjust Google Map iframe for small screens */
            iframe {
                width: 100%;
                height: 350px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Contact Us Section -->
    <div class="contact-section">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>

        <!-- Contact Form -->
        <div class="contact-form">
            <form method="POST" action="#">
                @csrf
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                        required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                        required>
                </div>

                <!-- Subject -->
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..."
                        required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </div>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="contact-info mt-5">
            <h5><i class="contact-icon fas fa-map-marker-alt"></i> Our Office</h5>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30895.8222304443!2d121.04190949999999!3d14.54326345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8f3fa2994af%3A0x89c988af4760e40a!2sFort%20Bonifacio%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1729835637589!5m2!1sen!2sph"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>123 BrainyBuddies Street, Knowledge City, Country</p>
            <h5><i class="contact-icon fas fa-envelope"></i> Email Us</h5>
            <p>Email: <a href="mailto:support@brainybuddies.com">support@brainybuddies.com</a></p>
            <h5><i class="contact-icon fas fa-phone-alt"></i> Call Us</h5>
            <p>Phone: +123 456 7890</p>
        </div>
    </div>
@endsection
