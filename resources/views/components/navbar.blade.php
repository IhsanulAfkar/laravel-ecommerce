<nav class="fixed top-0 z-10 w-full border-b border-black bg-white">
    {{-- Desktop Nav --}}
    <div class="lg:flex justify-between container mx-auto lg:text-xl hidden">
        <div class="flex w-[360px]">
            <a href="/shop" class="navbar-item">
                <div>
                    Shop
                </div>
            </a>
            <a href="/" class="navbar-item border-l-[0px]">
                <div>
                    Contact
                </div>
            </a>
        </div>
        @auth
            <div class="flex justify-center items-center py-1">
                <img src="{{ auth()->user()->google_img }}" class="rounded-full shadow" width="60">
            </div>
        @endauth
        <div class="flex w-[360px]">
            @guest
                <a href="/login" class="navbar-item border-r-[0px]">
                    <div>
                        Login
                    </div>
                </a>
            @else
                <div class="navbar-item border-r-[0px]">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endguest
            <a href="/cart" class="navbar-item">
                <div>
                    Cart
                </div>
            </a>
        </div>
    </div>
    {{-- Mobile Nav --}}
    <div class="flex lg:hidden justify-between container mx-auto px-[1px]">
        <div class="text-center py-3 px-4 outline outline-1 outline-customBlack">
            <a href="/" class="font-semibold">
                LuxeBouquets
            </a>
        </div>
        @auth
            <a href="/profile" class="flex justify-center items-center py-1">
                <img src="{{ auth()->user()->google_img }}" class="rounded-full shadow" width="40">
            </a>
        @endauth
        <div class="text-center  outline outline-1 outline-customBlack flex items-center relative">
            <img id="icon_dropdown" src="assets/icons/dropdown.png" class="py-3 px-4">
            <div id="mobile_nav_dropdown"
                class="absolute px-8 border border-l border-b border-customBlack bg-white py-4 right-0 top-0 hidden flex-col gap-4">
                <a href="/shop">Shop</a>
                <a href="/">Contact</a>
                <a href="/cart">Cart</a>
                @guest
                    <a href="/login">Sign In</a>
                @else
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
    <script>
        const mobile_nav_dropdown = document.querySelector('#mobile_nav_dropdown')
        const icon_dropdown = document.querySelector('#icon_dropdown')
        window.addEventListener('click', (e) => {
            if (icon_dropdown.contains(e.target)) {
                if (mobile_nav_dropdown.classList.contains('hidden')) {
                    mobile_nav_dropdown.classList.remove('hidden')
                    mobile_nav_dropdown.classList.add('flex')
                }
            } else if (!mobile_nav_dropdown.contains(e.target)) {
                mobile_nav_dropdown.classList.remove('flex')
                mobile_nav_dropdown.classList.add('hidden')
            }
        })
    </script>
</nav>
