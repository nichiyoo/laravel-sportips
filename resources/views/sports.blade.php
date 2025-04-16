<x-landing-layout>
  <x-landing.hero image="{{ asset('images/person.jpg') }}">
    <x-slot name="title">
      Master the Basics Your First Game Plan
    </x-slot>
    <x-slot name="excerpt">
      Ready to dive into a new sport but don&apos;t know where to start? In this article, we break down the
      fundamentals, making it easy for beginners to step onto the field, court, or track with confidence
    </x-slot>
  </x-landing.hero>

  <x-sport-grid />

</x-landing-layout>
