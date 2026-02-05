<section id="contact" class="py-20 section-border">
    <div class="max-w-6xl mx-auto px-6" data-reveal>
        <div class="grid gap-12 lg:grid-cols-[1.1fr_1fr]">
            <div>
                <x-section-header
                    eyebrow="Contact"
                    title="Let us build something resilient together."
                    subtitle="Share the role, timeline, and scope. I respond with a clear plan, tradeoffs, and next steps."
                />
                <div class="space-y-4 text-muted">
                    <p>Looking for a senior full-stack engineer who can own product delivery and architecture? This is my lane.</p>
                    <p>Open to full-time and contract opportunities with teams that care about quality, performance, and velocity.</p>
                </div>
                <div class="mt-8 grid gap-3 text-sm text-muted">
                    <p>Email: <span class="text-accent">taruntech98@gmail.com</span></p>
                    <p>Location: India (open to remote/global)</p>
                    <p>Availability: Open to conversations now</p>
                </div>
            </div>

            <form action="{{ route('hire-me.store') }}" method="POST" class="card p-6 space-y-5">
                @csrf
                @if (session('success'))
                    <div class="rounded-2xl border border-subtle bg-surface-2 p-4 text-sm">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="rounded-2xl border border-subtle bg-surface-2 p-4 text-sm">
                        <p class="font-semibold mb-2">Please fix the following:</p>
                        <div class="grid gap-1 text-muted">
                            @foreach ($errors->all() as $error)
                                <p>- {{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label for="client_name" class="text-sm font-semibold">Name</label>
                        <input id="client_name" name="client_name" type="text" required class="input-field" placeholder="Your name">
                    </div>
                    <div class="space-y-2">
                        <label for="client_email" class="text-sm font-semibold">Email</label>
                        <input id="client_email" name="client_email" type="email" required class="input-field" placeholder="you@company.com">
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="company" class="text-sm font-semibold">Company</label>
                    <input id="company" name="company" type="text" required class="input-field" placeholder="Company or product">
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label for="location" class="text-sm font-semibold">Location</label>
                        <input id="location" name="location" type="text" required class="input-field" placeholder="City, country, or remote">
                    </div>
                    <div class="space-y-2">
                        <label for="quote" class="text-sm font-semibold">Budget / CTC</label>
                        <input id="quote" name="quote" type="number" required class="input-field" placeholder="e.g. 2000000">
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="position_type" class="text-sm font-semibold">Engagement</label>
                    <select id="position_type" name="position_type" required class="input-field">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Contract">Contract</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label for="message" class="text-sm font-semibold">What are you building?</label>
                    <textarea id="message" name="message" rows="4" class="input-field" placeholder="Scope, timelines, current stack, and priorities..."></textarea>
                </div>
                <button type="submit" class="w-full rounded-xl btn-primary px-6 py-3 text-sm font-semibold">
                    Send details
                </button>
                <p class="text-xs text-muted">Currency can be INR or USD. I will confirm details in the reply.</p>
            </form>
        </div>
    </div>
</section>
