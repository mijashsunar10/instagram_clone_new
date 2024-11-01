@props([
        'source'=>' https://cdn.devdojo.com/pines/videos/coast.mp4'
        ])

<div x-data="{playing:false,muted:false}">
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <video controls class="h-full max-h-[500px] w-full">
        <source src="{{$source}}" type="video/mp4">
            Your browser doesnot support HTML5 video
    </video>
    
</div>