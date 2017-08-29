@component('mail::message')
# Message From Website

{{ $content['body'] }}


<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->


Contact No. <br>
{{ $content['contact'] }} <br>

Thanks,<br>
{{ $content['title'] }}
@endcomponent
