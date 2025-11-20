<div class="container mx-auto px-6 lg:px-12 text-white">
    <div class="max-w-4xl mx-auto bg-gray-900/50 p-10 rounded-3xl shadow-2xl border border-gray-700">
        <h2 class="text-4xl font-extrabold text-center mb-4">
            Ready to Accelerate Your Logistics?
        </h2>
        <p class="text-lg text-gray-300 text-center mb-10">
            Fill out the form below and a ShipX expert will be in touch within 24 hours.
        </p>

        <form action="{{ url('/contact') }}" method="POST" class="space-y-6">
            @csrf 

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full p-3 bg-blue-950 border border-gray-700 rounded-lg focus:ring-purple-500 focus:border-purple-500 text-white">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Work Email</label>
                    <input type="email" id="email" name="email" required class="w-full p-3 bg-blue-950 border border-gray-700 rounded-lg focus:ring-purple-500 focus:border-purple-500 text-white">
                </div>
            </div>

            <div>
                <label for="company" class="block text-sm font-medium text-gray-400 mb-2">Company Name</label>
                <input type="text" id="company" name="company" class="w-full p-3 bg-blue-950 border border-gray-700 rounded-lg focus:ring-purple-500 focus:border-purple-500 text-white">
            </div>

            <div>
                <label for="service" class="block text-sm font-medium text-gray-400 mb-2">Service of Interest</label>
                <select id="service" name="service" required class="w-full p-3 bg-blue-950 border border-gray-700 rounded-lg focus:ring-purple-500 focus:border-purple-500 text-white appearance-none">
                    <option value="" disabled selected>Select a Service</option>
                    <option value="global_shipping" class="text-gray-800">Global Air & Sea Shipping</option>
                    <option value="real_time_tracking" class="text-gray-800">Real-Time Tracking Platform</option>
                    <option value="api_integration" class="text-gray-800">API Integration & Setup</option>
                    <option value="other" class="text-gray-800">Other Inquiry</option>
                </select>
                <svg class="w-4 h-4 absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-400 mb-2">Your Message</label>
                <textarea id="message" name="message" rows="4" required class="w-full p-3 bg-blue-950 border border-gray-700 rounded-lg focus:ring-purple-500 focus:border-purple-500 text-white"></textarea>
            </div>

            <button type="submit" class="w-full px-5 py-3 bg-purple-600 hover:bg-purple-700 rounded-lg text-lg font-semibold transition duration-300 transform hover:scale-[1.01]">
                Send Inquiry
            </button>
        </form>
    </div>
</div>