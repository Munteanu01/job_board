<x-layout>
    <x-slot:heading>
        Jobs Heading
    </x-slot:heading>


    @foreach ($jobs as $job)
        <ul>
            <li>
                <a href='/jobs/{{ $job['id'] }}' class="text-blue-500 hover:underline">
                    {{ $job['title'] }}: Salary is {{ $job['salary'] }} per month
                </a>
            </li>
        </ul>
    @endforeach
</x-layout>
