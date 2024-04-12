<x-layout>
    <x-slot:heading>
        Jobs Heading
    </x-slot:heading>

    <div class="grid md:grid-cols-2 lg:grid-cols-3">
        @foreach ($jobs as $job)
            <ul>
                <li>
                    <a href='/jobs/{{ $job['id'] }}' class="p-2 m-3 block border border-slate-600 ">
                        <div>
                            <p class="font-bold">{{ $job['title'] }}:</p>
                            <p> Salary is {{ $job['salary'] }}</p>
                        </div>
                        <div class="text-red-500 font-semibold">{{ $job->employer->name }}</div>
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
