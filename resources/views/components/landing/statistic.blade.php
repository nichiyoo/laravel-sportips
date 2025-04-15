<section class="py-40 flex items-center bg-transparent rounded-3xl">
  <div class="container grid xl:grid-cols-4">
    <div class="xl:col-span-3 flex flex-col gap-6 items-start">
      @php
        $statistics = array_to_object([
            [
                'title' => 'Total Users Joined',
                'value' => '100K+',
            ],
            [
                'title' => 'Community Partners',
                'value' => '125+',
            ],
            [
                'title' => 'Daily Active Readers',
                'value' => '15000+',
            ],
        ]);
      @endphp

      <div class="flex flex-col lg:flex-row lg:items-center gap-10 w-full">
        @foreach ($statistics as $statistic)
          <div class="flex flex-col gap-4">
            <h3 class="font-heading text-6xl font-bold">
              {{ $statistic->value }}
            </h3>
            <span class="text-zinc-600">
              {{ $statistic->title }}
            </span>
          </div>
        @endforeach
      </div>

      <p class="text-zinc-500">
        At Sportips, every number tells a story—not just about what we've built, but about the community we've grown.
        With over 150 sports tips and tutorials, we&apos;re helping users take their first confident steps into the
        sporting
        world, one lesson at a time. Our library of 80+ in-depth articles offers insights written by experts and
        enthusiasts, breaking down complex techniques and strategies into easy-to-follow advice.
      </p>

      <a href="{{ route('register') }}">
        <x-ui.button variant="accent">
          <span>Join the Community</span>
          <i data-lucide="arrow-up-right"></i>
        </x-ui.button>
      </a>
    </div>
  </div>
</section>
