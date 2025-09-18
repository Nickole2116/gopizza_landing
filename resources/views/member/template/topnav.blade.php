<nav class="topnav">
    <div class="logo">
        <img src="{{ asset('img/logo1.avif') }}" alt="logo" class="logo-img">
    </div>

    <div class="menu">
        <a href="{{ route('member.home') }}" class="menu-item">Home</a>
        <a href="{{ route('member.story') }}" class="menu-item">Our Brand</a>
        <a href="{{ route('member.menu') }}" class="menu-item menu-item-hover">Our Menu</a>
        <div class="menu-hover topnav-hover">
            <div class="content">
                <a href="#">Meals</a>
                <a href="#">Pizza</a>
                <a href="#">Pasta</a>
                <a href="#">Salad</a>
                <a href="#">Dessert</a>
                <a href="#">Drink</a>
            </div>
        </div>
        <a href="{{ route('member.contact') }}" class="menu-item">Contact Us</a>
        <a href="{{ route('member.event') }}" class="menu-item animated">Events</a>
        
    </div>

    

    <div class="buttons">
        <div class="order-line"><button class="btn-order animated">Order Now</button></div>
    </div>
</nav>