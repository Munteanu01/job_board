<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <div class="">
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p class="text-sm">
            Salary is {{ $job['salary'] }}/RON per month
        </p>
    </div>
    <div class="mt-5">
        <a href="#">{{ $job->employer->name }}</a>
    </div>

</x-layout>
