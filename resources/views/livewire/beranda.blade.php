<div>
    @auth
    Selamat datang di beranda ,{{auth()->user()->npp}}


    <a href="/pic" wire:navigate>PIC</a>
    <a href="/profile" wire:navigate>Profile</a>

    @else
    @endauth
</div>
