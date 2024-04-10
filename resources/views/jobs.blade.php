<x-layout>
    <x-slot:heading>
        Jobs Heading
    </x-slot:heading>

    <h1>{{ $greeting }} {{ $name }}</h1>
    @foreach ($jobs as $job)
        <li>
            {{ $job['title'] }}: Salary is {{ $job['salary'] }} per month
        </li>
    @endforeach
</x-layout>
