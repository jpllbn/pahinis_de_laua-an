<!DOCTYPE html>
<html lang="en">

<?php
$title = "Contact | Pahinis de Laua-an";
include '../includes/head.php';
?>

<body class="font-sans bg-yellow-50 text-gray-800">
    <?php include 'includes/nav.php'; ?>

    <!-- Hero Section -->
    <header class="relative bg-cover bg-center text-white h-80"
        style="background-image: url('/pahinis_de_laua-an/images/contact_us.jpg');">
        <div class="bg-gradient-to-b from-black/50 to-black/75 absolute inset-0"></div>
        <div class="relative z-10 container mx-auto px-4 py-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold font-serif">Contact Us</h1>
            <p class="mt-4">Get in touch with the Pahinis Festival organizers</p>
        </div>
    </header>

    <!-- Contact Form Section -->
    <section class="py-16 px-6 lg:px-24 bg-[#FCF8ED]">
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Left Column -->
            <div>
                <h2 class="text-4xl font-serif font-bold mb-6 text-[#3B2200]">Get In Touch</h2>
                <p class="mb-8 text-base text-gray-700">We'd love to hear from you! Whether you have a question about the festival, want to become a partner, or need any assistance, our team is here to help.</p>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 bg-white border border-yellow-400 rounded-xl shadow-sm p-5">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.88 3.549A9.956 9.956 0 0112 2c-2.148 0-4.142.676-5.88 1.823m11.76 0A9.956 9.956 0 0122 12c0 2.148-.676 4.142-1.823 5.88m-15.354 0A9.956 9.956 0 012 12c0-2.148.676-4.142 1.823-5.88m15.354 0L12 12m0 0l-9.177 9.177M12 12l9.177 9.177" /></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-yellow-700 font-serif">Visit Us</h3>
                            <p class="text-gray-700">Municipal Hall of Laua-an, Antique, Philippines 5705</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-white border border-yellow-400 rounded-xl shadow-sm p-5">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-9m0 0l9 9m-9-9v18" /></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-yellow-700 font-serif">Call Us</h3>
                            <p class="text-gray-700">Phone: +63 (36) 123-4567</p>
                            <p class="text-gray-700">Mobile: +63 912 345 6789</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-white border border-yellow-400 rounded-xl shadow-sm p-5">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.88 3.549A9.956 9.956 0 0112 2c-2.148 0-4.142.676-5.88 1.823m11.76 0A9.956 9.956 0 0122 12c0 2.148-.676 4.142-1.823 5.88m-15.354 0A9.956 9.956 0 012 12c0-2.148.676-4.142 1.823-5.88m15.354 0L12 12m0 0l-9.177 9.177M12 12l9.177 9.177" /></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-yellow-700 font-serif">Email Us</h3>
                            <p class="text-gray-700">General Inquiries: info@pahinisfestival.com</p>
                            <p class="text-gray-700">Partnerships: partners@pahinisfestival.com</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 bg-white border border-yellow-400 rounded-xl shadow-sm p-5">
                        <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 4v-4h-1m4-4H9m1 0h4" /></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-yellow-700 font-serif">Office Hours</h3>
                            <p class="text-gray-700">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="text-gray-700">Saturday: 9:00 AM - 12:00 PM</p>
                            <p class="text-gray-700">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="bg-white p-8 shadow-lg rounded-2xl border border-gray-100">
                <h2 class="text-2xl font-bold mb-6 text-yellow-700 font-serif">Send Us a Message</h2>
                <form id="contactForm" action="/pahinis_de_laua-an/php/process_contact.php" method="POST" class="space-y-5" enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Your Name</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 transition placeholder-gray-400 px-4 py-2" placeholder="Enter your name">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 transition placeholder-gray-400 px-4 py-2" placeholder="you@email.com">
                    </div>
                    <div>
                        <label for="inquiry" class="block text-sm font-semibold text-gray-700 mb-1">Inquiry Type</label>
                        <select id="inquiry" name="inquiry" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 transition px-4 py-2">
                            <option value="">Select an inquiry type</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Support">Support</option>
                        </select>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 transition placeholder-gray-400 px-4 py-2" placeholder="Subject">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Your Message</label>
                        <textarea id="message" name="message" rows="4" required
                            class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 transition placeholder-gray-400 px-4 py-2 resize-none" placeholder="Type your message..."></textarea>
                    </div>
                    <div>
                        <label for="attachment" class="block text-sm font-semibold text-gray-700 mb-1">Attach File(s)</label>
                        <input type="file" id="attachment" name="attachments[]" multiple
                            class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition" />
                        <div id="fileList" class="mt-2 text-xs text-gray-500"></div>
                    </div>
                    <button type="submit"
                        class="w-full bg-[#6B3F1D] text-white py-2 px-4 rounded-lg font-semibold shadow-md hover:bg-yellow-700 transition-colors focus:outline-none focus:ring-2 focus:ring-yellow-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Our Location Section -->
    <section class="py-16 px-6 lg:px-24 bg-[#FCF5E5]">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-serif font-bold text-[#3B2200]">Our Location</h2>
            <p class="mt-2 mb-5 text-base text-gray-700">Find us in the beautiful municipality of Laua-an in Antique Province, Philippines</p>
        </div>
        <div class="bg-white border border-yellow-400 rounded-xl shadow-sm mx-auto max-w-4xl mb-8 overflow-hidden" style="width:100%; min-width:200px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125260.99592343123!2d122.03814718751917!3d11.157536278101489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33afb92b2c726331%3A0xfedc021570d4045d!2sLaua-an%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1746382184995!5m2!1sen!2sph" width="100%" height="350" style="border:0; border-radius: 0.75rem; min-width: 200px; min-height: 200px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="text-center mt-8">
            <a href="https://www.google.com/maps/dir/?api=1&destination=Laua-an+Municipal+Hall" target="_blank" rel="noopener" class="inline-block px-6 py-3 bg-[#6B3F1D] text-white rounded-md shadow-md hover:bg-yellow-700 font-semibold transition-colors">Get Directions</a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-6 lg:px-24 bg-[#FCF8ED]">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-serif font-bold text-[#3B2200]">Frequently Asked Questions</h2>
            <p class="mt-2 text-base text-gray-700">Find answers to common questions about the Pahinis Festival</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <div class="bg-white border border-yellow-400 rounded-xl shadow-sm p-6">
                <h3 class="font-bold text-yellow-700 font-serif mb-2">When is the Pahinis Festival celebrated?</h3>
                <p class="text-gray-700">The Pahinis Festival is celebrated annually during the last week of January in Laua-an, Antique.</p>
            </div>
            <div class="bg-white border border-yellow-400 rounded-xl shadow-sm p-6">
                <h3 class="font-bold text-yellow-700 font-serif mb-2">How do I get to Laua-an, Antique?</h3>
                <p class="text-gray-700">You can reach Laua-an by bus or van from Kalibo, Iloilo City, or San Jose de Buenavista. The nearest airport is in Kalibo or Iloilo City.</p>
            </div>
            <div class="bg-white border border-yellow-400 rounded-xl shadow-sm p-6">
                <h3 class="font-bold text-yellow-700 font-serif mb-2">Are accommodations available in Laua-an?</h3>
                <p class="text-gray-700">Yes, there are several inns and guesthouses in Laua-an and nearby towns. We recommend booking in advance as they fill up quickly during the festival.</p>
            </div>
            <div class="bg-white border border-yellow-400 rounded-xl shadow-sm p-6">
                <h3 class="font-bold text-yellow-700 font-serif mb-2">Is there an entrance fee to watch the festival?</h3>
                <p class="text-gray-700">Most events are free and open to the public. Some special performances or workshops may have a small fee to cover costs.</p>
            </div>
            <div class="bg-white border border-yellow-400 rounded-xl shadow-sm p-6">
                <h3 class="font-bold text-yellow-700 font-serif mb-2">Can I participate in the festival activities?</h3>
                <p class="text-gray-700">Yes! Many activities are open for public participation, including workshops, games, and community meals. Some competitions may require advance registration.</p>
            </div>
            <div class="bg-white border border-yellow-400 rounded-xl shadow-sm p-6">
                <h3 class="font-bold text-yellow-700 font-serif mb-2">How can I volunteer for the festival?</h3>
                <p class="text-gray-700">We welcome volunteers! Please contact us through the form above or email volunteers@pahinisfestival.com for information on volunteer opportunities.</p>
            </div>
        </div>
        <div class="text-center mt-10 text-base text-gray-700">
            Don't see your question here? <a href="/pahinis_de_laua-an/php/contact.php" class="text-yellow-700 font-semibold hover:underline">Contact us</a> and we'll be happy to help!
        </div>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script>
        document.getElementById('attachment').addEventListener('change', function() {
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = '';
            if (this.files.length > 0) {
                const files = Array.from(this.files).map(f => `<span>${f.name}</span>`).join(', ');
                fileList.innerHTML = `Selected: ${files}`;
            }
        });
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonColor: '#F59E0B',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        this.reset();
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        html: data.message,
                        icon: 'error',
                        confirmButtonColor: '#F59E0B',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error!',
                    text: 'An unexpected error occurred. Please try again later.',
                    icon: 'error',
                    confirmButtonColor: '#F59E0B',
                    confirmButtonText: 'OK'
                });
            });
        });
    </script>
</body>

</html>