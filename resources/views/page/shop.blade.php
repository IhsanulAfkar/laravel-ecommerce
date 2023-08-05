@extends('template.template')
@section('main')
    <div class="border-b border-customBlack flex flex-col lg:flex-row w-full ">
        <div class="lg:basis-1/2 mt-12">
            <div class="relative">
                <div class=" w-full h-[500px] bg-cover brightness-75 shadow-inner bg-no-repeat"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url('assets/images/shop.png')">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white font-semibold text-4xl text-center">
                    Fresh Flowers
                </div>
            </div>
        </div>
        <div class=" lg:basis-1/2 lg:mt-12 flex justify-between flex-wrap w-full">
            @foreach ($flowers as $flower)
                <div class="basis-1/2 relative border-l border-b border-customBlack w-full bg-cover bg-bottom bg-no-repeat h-[360px]"
                    style="background-image: url('assets/images/flowers/{{ $flower['image'] }}')">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-full text-center hover:cursor-pointer"
                        @auth onclick="openModal(`{{ $flower['name'] }}`, '{{ $flower['id'] }}')" @else onclick='gotoLogin()' @endauth>
                        <p class="font-medium">{{ $flower['name'] }}</p>
                        <p class="text-[#808080]">price Rp.{{ $flower['price'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        @auth
            <div id="modal" class="fixed hidden z-10 left-0 top-0 w-full h-full overflow-hidden bg-[rgba(0,0,0,0.4)]"
                onclick="closeModal(event)">
                <div id="card_modal"
                    class="bg-white w-[250px] h-[200px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 p-4 flex justify-center items-center border border-customBlack">
                    <form method="POST" action="/shop" class="w-full text-center">
                        @csrf
                        <p id="flower_name" class="text-lg font-semibold">flower</p>
                        <p class="mb-2">Quantity</p>
                        <div class="flex justify-center gap-2">
                            <div onclick="decrement()">
                                <img src="assets/icons/minus.png" alt="">
                            </div>
                            <div class="px-2 border border-customBlack">
                                <p id="flower_qua">1</p>
                                <input id="quantity" name="quantity" type="hidden" value="1">
                                <input id="flower_id" name="flower_id" type="hidden" value="">
                            </div>
                            <div onclick="increment()">
                                <img src="assets/icons/plus.png" class="">
                            </div>
                        </div>
                        <button type="submit" class="mt-4 py-2 px-4 border border-customBlack">Add to Cart</button>
                    </form>
                </div>
            </div>
        @else
            <script>
                const gotoLogin = () => {
                    window.location.href = '/login'
                }
            </script>
        @endauth
        <script>
            let counter = 1
            const flower_qua = document.querySelector('#flower_qua')
            const flower_input = document.querySelector('#quantity')
            const modal = document.querySelector('#modal')
            const card_modal = document.querySelector('#card_modal')
            const openModal = (name, id) => {
                document.querySelector('#flower_id').value = id
                document.querySelector('#flower_name').innerHTML = name
                modal.classList.remove('hidden')
                modal.classList.add('block')
            }
            const increment = () => {
                counter++;
                flower_qua.innerHTML = counter;
                flower_input.value = flower_qua.innerHTML
            }
            const decrement = () => {
                if (counter > 0)
                    counter--
                flower_qua.innerHTML = counter;
                flower_input.value = flower_qua.innerHTML
            }
            const closeModal = (e) => {
                if (modal.classList.contains('block'))
                    if (!card_modal.contains(e.target)) {
                        modal.classList.remove('block')
                        modal.classList.add('hidden')
                    }
            }
        </script>
    </div>
@endsection
