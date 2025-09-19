<footer class="footer">

    <!-- Content -->
    <div class="content">
        <div class="logo">
            <img src="{{ asset('img/logo1.avif') }}" alt="logo" class="logo-img">
            <div class="menu">
                <div class="menu-title">GOPIZZA GLOBAL</div>
                <a href="{{ route('member.home') }}">Home</a>
                <a href="{{ route('member.story') }}">Our Brand</a>
                <a href="{{ route('member.menu') }}">Our Menu</a>
                <a href="{{ route('member.contact') }}">Contact Us</a>
                <a href="{{ route('member.event') }}">Events</a>
            </div>
        </div>
        <div class="info">

        </div>
        
    </div>

    <!-- Tail -->
    <div class="tail">
        &copy; {{ date('Y') }} GOPIZZA. All rights reserved.
    </div>
</footer>