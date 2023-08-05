@extends('template.template')
@section('main')
    <div class="border-b border-customBlack flex flex-col lg:flex-row w-full">
        <div
            class="lg:basis-1/2 mt-14 pb-8 flex flex-col justify-center gap-4 px-8 border-b lg:border-b-[0px] lg:border-r border-customBlack">
            <div class="font-semibold text-5xl">
                Kyiv <br> LuxeBouquets®
            </div>
            <div class="text-[18px]">
                Discover Uniquely Crafted Bouquets and Gifts for Any Occasion: Spread Joy with Our Online Flower Delivery
                Service
            </div>
            <div class="border-t border-customBlack flex justify-between pt-4">
                <div class="basis-1/2 pr-4 border-r border-customBlack">
                    <img src="assets/images/home.png" alt="">
                </div>
                <div class="basis-1/2 pl-4 text-sm flex flex-col justify-end">
                    <p>Experience the joy of giving with our modern floral studio. Order online and send fresh flowers,
                        plants and gifts today.</p>
                </div>
            </div>
        </div>
        <div class="lg:basis-1/2 lg:mt-14">
            <div class="flex justify-between">
                <div class="basis-1/2 relative flex items-center justify-center">
                    <p class="flower-font">Fresh Flowers</p>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-4 flex items-center gap-2 hover:cursor-pointer"
                        onclick="goToShop()">
                        <p class="font-semibold text-sm md:text-base">Shop now </p>
                        <div>
                            <img src="assets/icons/arrow-right.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="basis-1/2 border-l border-b border-customBlack">
                    <img src="assets/images/flowers/fresh.png" class="w-full">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="basis-1/2 border-t border-r border-customBlack">
                    <img src="assets/images/flowers/dried.png" class="w-full">
                </div>
                <div class="basis-1/2 relative flex items-center justify-center">
                    <p class="flower-font">Dried Flowers</p>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-4 flex items-center gap-2 hover:cursor-pointer"
                        onclick="goToShop()">
                        <div>
                            <img src="assets/icons/arrow-left.png" alt="">
                        </div>
                        <p class="font-semibold text-sm md:text-base">Shop now </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b border-customBlack flex flex-col lg:flex-row w-full">
        <div class="hidden lg:block basis-1/2 border-r border-customBlack">

        </div>
        <div class="lg:basis-1/2">
            <div class="flex justify-between">
                <div class="basis-1/2 relative flex items-center justify-center">
                    <p class="flower-font">Live Plants</p>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-4 flex items-center gap-2 hover:cursor-pointer"
                        onclick="goToShop()">
                        <p class="font-semibold text-sm md:text-base">Shop now </p>
                        <div>
                            <img src="assets/icons/arrow-right.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="basis-1/2 border-l border-b border-customBlack">
                    <img src="assets/images/flowers/live.png" class="w-full">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="basis-1/2 border-t border-r border-customBlack">
                    <img src="assets/images/flowers/aroma.png" class="w-full">
                </div>
                <div class="basis-1/2 relative flex items-center justify-center">
                    <p class="flower-font">Aroma Candels</p>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-4 flex items-center gap-2 hover:cursor-pointer"
                        onclick="goToShop()">
                        <div>
                            <img src="assets/icons/arrow-left.png" alt="">
                        </div>
                        <p class="font-semibold text-sm md:text-base">Shop now </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-between border-t border-customBlack">
                <div class="basis-1/2 relative flex items-center justify-center">
                    <p class="flower-font">Freshners</p>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-4 flex items-center gap-2 hover:cursor-pointer"
                        onclick="goToShop()">
                        <p class="font-semibold text-sm md:text-base">Shop now </p>
                        <div>
                            <img src="assets/icons/arrow-right.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="basis-1/2 border-l border-customBlack">
                    <img src="assets/images/flowers/freshners.png" class="w-full">
                </div>
            </div>
        </div>
        <script>
            const goToShop = () => {
                window.location.href = '/shop'
            }
        </script>
    </div>
@endsection
