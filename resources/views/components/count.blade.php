<section class="animated-div">
    <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-4xl font-bona-nova-sc-bold font-bold text-red-600 sm:text-4xl">Youth Power Association
            </h2>
            <p class="mt-4 font-playwrite-de-grund  text-gray-500 sm:text-xl">YPA is a Youth - Run &amp; Lead Non –
                Government Organization. (Channelizing the Youth Power)</p>
        </div>
        <div class="mt-8 sm:mt-12">
            <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Total Events</dt>
                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl"><span id="totolEvents">500</span>+</dd>
                    </dd>
                </div>
                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Direct Benifeciaries</dt>
                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl"><span
                            id="totolBenefeciaries">7000</span>+</dd>
                </div>
                <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-gray-500">Total Voluteer</dt>
                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl"><span id="totolVolunteer">90</span>+
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // Function to animate the counter
        function counter(id, countUpto) {
            function animateCounter(id, countUpto) {
                $({
                    counter: 0
                }).animate({
                    counter: countUpto
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $(`#${id}`).text(Math.ceil(this.counter));
                    }
                });
            }

            // Intersection Observer to detect when the element appears
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(id, countUpto);
                        observer.unobserve(entry
                            .target); // Stop observing once the animation starts
                    }
                });
            }, {
                threshold: 0.5
            });

            observer.observe(document.getElementById(id));
        }
        counter('totolEvents', 550);
        counter('totolBenefeciaries', 7000);
        counter('totolVolunteer', 90);
    });
</script>
