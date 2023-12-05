<x-guesthome-layout>
    <div class="container-fluid gap-8 flex flex-row justify-center items-center h-full">


            <div>
                {{-- Start Discusson Button --}}
                <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition border border-transparent rounded hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" style="background: #283044;">
                    {{ __('Start a new discussion') }}
                </a>
            </div>

            {{-- <div class="flex flex-col col-span-3 gap-y-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, praesentium, similique aspernatur rerum voluptatibus pariatur tempore temporibus perspiciatis vel laborum, dignissimos debitis repellat? Dolorem dolorum optio aut velit, temporibus dolore.
            </div> --}}
            <a href="{{ route('threads.index') }}">
                View Threads
            </a>

        </div>
</x-guesthome-layout>
