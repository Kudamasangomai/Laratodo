<x-mail::message>

Hi {{  $user->name }}

here Are you Login credetials.

password : 1234

Please you are advised to change your password

<x-mail::button :url="''">
Login
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
