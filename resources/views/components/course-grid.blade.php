@php
  $courses = array_to_object([
      [
          'href' => '#',
          'title' => 'Basketball',
          'description' => 'Learn the fundamentals of basketball, including dribbling, shooting, and passing.',
          'image' => asset('images/courses/basketball.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Badminton',
          'description' => 'Master the art of badminton with our comprehensive guide to techniques and strategies.',
          'image' => asset('images/courses/badminton.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Tennis',
          'description' => 'Discover the essential skills and strategies for playing tennis like a pro.',
          'image' => asset('images/courses/tennis.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Boxing',
          'description' => 'Get fit and learn self-defense with our boxing training program.',
          'image' => asset('images/courses/boxing.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Volleyball',
          'description' => 'Learn the fundamentals of volleyball, including dribbling, shooting, and passing.',
          'image' => asset('images/courses/volleyball.jpg'),
      ],
      [
          'href' => '#',
          'title' => 'Golf',
          'description' => 'Master the art of golf with our comprehensive guide to techniques and strategies.',
          'image' => asset('images/courses/golf.jpg'),
      ],
  ]);
@endphp

<div class="grid lg:grid-cols-2 xl:grid-cols-4 gap-2" id="courses">
  @foreach ($courses as $course)
    <div
      class="h-96 rounded-3xl overflow-hidden relative group {{ $loop->iteration === 2 || $loop->iteration === 4 ? 'xl:col-span-2' : '' }}">
      <img src="{{ $course->image }}" alt="{{ $course->title }}" class="absolute inset-0 object-cover w-full h-full">
      <div class="absolute inset-0 bg-gradient-to-b from-50% from-black/0 to-black/50"> </div>

      <span class="border bg-glass rounded-full px-6 py-2 font-medium absolute top-0 left-0 m-4 text-zinc-50">
        {{ $course->title }}
      </span>

      <div class="absolute p-6 bottom-0">
        <div
          class="flex group-hover:p-6 group-hover:bg-glass border-transparent rounded-2xl text-zinc-50 flex-col items-start gap-4 transition duration-500">
          <span class="text-xl font-medium font-heading">{{ $course->description }}</span>
          <a href="{{ $course->href }}" class="group-hover:block hidden">
            <x-ui.cta type="primary">
              <span>Read more</span>
              <i data-lucide="arrow-up-right"></i>
            </x-ui.cta>
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
