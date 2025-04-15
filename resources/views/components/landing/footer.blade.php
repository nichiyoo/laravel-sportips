<div class="p-4 pt-0">
  <div class="bg-primary-500 text-white rounded-3xl py-20">
    <nav class="container grid xl:grid-cols-5 gap-6 items-start">
      <div class="flex gap-4 flex-col lg:col-span-2">
        <a href={{ route('welcome') }}>
          <x-ui.logo />
        </a>

        <p> Take your first steps into the sporting world with Sportips</p>

        <a href={{ route('welcome') }} class="text-sm font-medium">
          <x-ui.cta>
            Get Started
            <i data-lucide="arrow-up-right"></i>
          </x-ui.cta>
        </a>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="text-lg font-medium font-heading">Company</h4>
        <ul class="flex flex-col text-sm gap-4 text-primary-100">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Categories</a></li>
        </ul>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="text-lg font-medium font-heading">Resources</h4>
        <ul class="flex flex-col text-sm gap-4 text-primary-100">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="text-lg font-medium font-heading">Community</h4>
        <ul class="flex flex-col gap-4 text-sm text-primary-100">
          <li><a href="#">Blog</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Advertise</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </div>
  </div>
</div>
