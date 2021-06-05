@forelse ($students as $student)

    {{$student}}

@empty
    {{"Nothing to Show..."}}

@endforelse