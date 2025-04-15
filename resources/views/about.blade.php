<x-landing-layout>
  <x-landing.hero image="{{ asset('images/about.jpg') }}">
    <x-slot name="title">
      Fueling Passion, One Sport at a Time — The Story Behind Sportips
    </x-slot>
    <x-slot name="excerpt">
      Sportips was born from a love of sports and a desire to make learning easy, fun, and accessible for everyone.
      Whether you're trying a new sport or sharpening your skills, we provide the guidance, inspiration, and tools to
      help you play with confidence and passion.
    </x-slot>
  </x-landing.hero>

  <x-landing.about />

  <x-landing.newsletter />

  <x-landing.statistic />
</x-landing-layout>
