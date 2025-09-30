<section id="hire-me" class="py-5 glass-section min-vh-100 d-flex align-items-center">
            <div class="container glass p-4">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-primary">Hire Me (India & Worldwide) 🌏🇮🇳</h2>
                    <p class="lead text-muted">
                        Excited to collaborate with clients from India and around the globe! Whether you're a startup, established company, or an individual, let's work together to build something impactful.<br>
                        Submit your offer below for a full-time, part-time, or contract position.
                    </p>
                    <p class="text-secondary small">
                        <strong>Note:</strong> Preferred currency is Indian Rupees (INR), but international offers in other currencies are also welcome. Open to remote, hybrid, and onsite opportunities worldwide!
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('hire-me.store') }}" method="POST" class="p-4 rounded-4 shadow glass-section">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="client_name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="client_email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="client_email" name="client_email" placeholder="Enter your email address" required>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Eg: Infosys, TCS, Google, Your Startup..." required>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Company Location (City/State/Country)</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Eg: Bengaluru, Maharashtra, USA, Remote" required>
                            </div>
                            <div class="mb-3">
                                <label for="quote" class="form-label">Quote Price (preferably in INR)</label>
                                <input type="number" class="form-control" id="quote" name="quote" placeholder="Eg: 100000" required>
                                <div class="form-text">Please enter your offer in Indian Rupees (₹) or specify your currency in the message below.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Position Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="position_type" id="fulltime" value="Full Time" required>
                                    <label class="form-check-label" for="fulltime">Full Time</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="position_type" id="parttime" value="Part Time" required>
                                    <label class="form-check-label" for="parttime">Part Time</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="position_type" id="contract" value="Contract/Freelance">
                                    <label class="form-check-label" for="contract">Contract / Freelance</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Additional Message (optional)</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Share your project details, expectations, currency if not INR, or any questions..."></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill">Send Offer 🚀</button>
                            </div>
                        </form>
                        <div class="text-center mt-4 text-success fw-semibold">
                            <span>Thank you for considering me! I look forward to working with you—whether you're in India or anywhere in the world.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
