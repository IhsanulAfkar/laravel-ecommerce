@extends('template.template')
@section('main')
    @if (session()->has('message'))
        <div id="modal" class="fixed z-10 left-0 top-0 w-full h-full overflow-hidden bg-[rgba(0,0,0,0.4)]"
            onclick="closeModal(event)">
            <div id="card_modal"
                class="bg-white w-[250px] h-[200px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 p-4 flex justify-center items-center border border-customBlack">
                <p class="font-semibold text-2xl text-center">{{ session('message') }}</p>
            </div>
        </div>
    @endif
    <div class="border-b border-customBlack flex flex-col lg:flex-row w-full">
        <div class="lg:basis-1/2 mt-28 pb-8 flex flex-col justify-center gap-4 px-8 ">
            <p class="font-semibold text-5xl text-center">Cart</p>
            <p class="text-center">Your balance : Rp.{{ $balance }}</p>
        </div>
        <div class="lg:basis-1/2 lg:mt-28 flex flex-col px-8 pb-8">
            <div class="flex  flex-col gap-8">
                @foreach ($flowers as $flower)
                    <div class="flex gap-4 items-center justify-center w-full">
                        <div class="basis-1/4 flex-none">
                            <img src="assets/images/flowers/{{ $flower['img'] }}" width="75" class="rounded-full">
                        </div>

                        <div class="basis-1/4 text-center">
                            <p>{{ $flower['name'] }}</p>
                        </div>
                        <div class="basis-1/4">
                            <p class="text-center">{{ $flower['quantity'] }}</p>
                        </div>
                        <div class="basis-1/4">
                            <p class="text-center">Rp.{{ $flower['price'] }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="flex justify-center ">
                    <form action="/purchase" method="post">
                        @csrf
                        <button type="submit" class="px-4 py-2 border border-customBlack bg-slate-400 ">
                            Checkout
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @if (session()->has('message'))
        <script>
            const modal = document.querySelector('#modal')
            const card_modal = document.querySelector('#card_modal')
            const closeModal = (e) => {
                if (!card_modal.contains(e.target)) {
                    modal.classList.remove('block')
                    modal.classList.add('hidden')
                }
            }
        </script>
    @endif
@endsection
