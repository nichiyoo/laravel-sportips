@php
  $sports = array_to_object([
      [
          'href' => '#',
          'title' => 'Basketball',
          'description' => 'Learn the fundamentals of basketball, including dribbling, shooting, and passing.',
          'image' => asset('images/sports/basketball.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Badminton',
          'description' => 'Master the art of badminton with our comprehensive guide to techniques and strategies.',
          'image' => asset('images/sports/badminton.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Tennis',
          'description' => 'Discover the essential skills and strategies for playing tennis like a pro.',
          'image' => asset('images/sports/tennis.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Boxing',
          'description' => 'Get fit and learn self-defense with our boxing training program.',
          'image' => asset('images/sports/boxing.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Volleyball',
          'description' => 'Learn the fundamentals of volleyball, including dribbling, shooting, and passing.',
          'image' => asset('images/sports/volleyball.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Golf',
          'description' => 'Master the art of golf with our comprehensive guide to techniques and strategies.',
          'image' => asset('images/sports/golf.jpg'),
      ],
  ]);
@endphp

<section class="min-h-screen py-20 flex items-center bg-white rounded-3xl">
  <div class="grid gap-12 container">
    <div class="flex items-center justify-between">
      <h2 class="text-4xl font-heading font-medium">Master the Basics</h2>
      <a href={{ route('sports') }} class="text-sm font-medium">
        <x-ui.button>
          <span>Explore</span>
          <i data-lucide="arrow-up-right"></i>
        </x-ui.button>
      </a>
    </div>

    <div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-2" id="sports">
      @foreach ($sports as $sport)
        <div
          class="h-96 rounded-3xl overflow-hidden relative group {{ $loop->iteration === 2 || $loop->iteration === 4 ? 'xl:col-span-2' : '' }}">
          <img src="{{ $sport->image }}" alt="{{ $sport->title }}" class="absolute inset-0 object-cover w-full h-full">
          <div class="absolute inset-0 bg-gradient-to-b from-50% from-black/0 to-black/50"> </div>

          <span class="border bg-glass rounded-full px-6 py-2 font-medium absolute top-0 left-0 m-4 text-zinc-50">
            {{ $sport->title }}
          </span>

          <div class="absolute p-6 bottom-0">
            <div
              class="flex group-hover:p-6 group-hover:bg-glass border-transparent rounded-2xl text-zinc-50 flex-col items-start gap-4 transition duration-500">
              <span class="text-xl font-medium font-heading">{{ $sport->description }}</span>
              <a href="{{ $sport->href }}" class="group-hover:block hidden">
                <x-ui.button variant="secondary">
                  <span>Read more</span>
                  <i data-lucide="arrow-up-right"></i>
                </x-ui.button>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="flex items-center justify-end">
      <p class="text-zinc-500 max-w-3xl text-end">
        Ready to dive into a new sport but don&apos;t know where to start? In this article, we break down the
        fundamentals, making it easy for beginners to step onto the field, court, or track with confidence
      </p>
    </div>
  </div>
</section>
