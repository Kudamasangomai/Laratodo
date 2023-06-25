<x-mail::message>
 
    Good Day {{ $user->name }}
    
    Your total todo today are: {{ $todos_count }}

    @foreach ($todos as $item)
    {{ $item }} 
    @endforeach
  

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
