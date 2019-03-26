<h1>Designer</h1>
<ul>
    <li>
        {{ $name }}
    </li>
    <li>
        {{ $email }}
    </li>
    <li>
        {{ $phone }}
    </li>
</ul>

<h2>Hobbies</h2>
<ul>

    @forelse ($interests as $interests)
    <li> {{$interests}} </li>

    @empty

        <li>Nieko nera</li>

    @endforelse
</ul>
