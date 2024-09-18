<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/1">
                <li>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>
