<x-landing-layout>
  <x-landing.hero image="{{ asset('images/hero.jpg') }}">
    <x-slot name="title">
      Take your first steps into the sporting world with Sportips
    </x-slot>
    <x-slot name="excerpt">
      Sportips is more than just an app—it&apos;s a growing community of players, learners, and sports lovers. We
      combine
      expert knowledge with practical advice to make sports more accessible to all.
    </x-slot>
  </x-landing.hero>

  <x-landing.about />

  <x-course-grid />

  <x-landing.statistic />

  <x-landing.newsletter />
</x-landing-layout>
