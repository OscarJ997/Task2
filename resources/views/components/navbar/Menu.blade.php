<div class="w-full relative flex ct-docs-disable-sidebar-content overflow-x-hidden">
    <nav
        class="block py-4 px-6 top-0 bottom-0 w-64 bg-white shadow-xl left-0 absolute flex-row flex-nowrap md:z-10 z-9999 transition-all duration-300 ease-in-out transform md:translate-x-0 -translate-x-full">
        <button
            class="md:hidden flex items-center justify-center cursor-pointer text-blueGray-700 w-6 h-10 border-l-0 border-r border-t border-b border-solid border-blueGray-100 text-xl leading-none bg-white rounded-r border border-solid border-transparent absolute top-1/2 -right-24-px focus:outline-none z-9998"><i
                class="fas fa-ellipsis-v"></i></button>
        <div
            class="flex-col min-h-full px-0 flex flex-wrap items-center justify-between w-full mx-auto overflow-y-auto overflow-x-hidden">
            <div
                class="flex bg-white flex-col items-stretch opacity-100 relative mt-4 overflow-y-auto overflow-x-hidden h-auto z-40 items-center flex-1 rounded w-full">
                <a text="Notus Design System PRO"
                    class="md:flex items-center flex-col text-center md:pb-2 text-blueGray-700 mr-0 inline-flex whitespace-nowrap text-sm uppercase font-bold p-4 px-0">
                    <img src="{{ asset('img/logo.png') }}" class="rounded" style="max-width: 50%"><span>Inventory system
                        task 2</span>
                </a>
                <div class="md:flex-col md:min-w-full flex flex-col list-none">
                    <hr class="my-4 md:min-w-full">
                    <h6
                        class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        Menu</h6>
                    <a href="{{ route('dashboard') }}"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-800 hover:text-blueGray-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Products
                    </a>
                    <a href="{{ route('prices') }}"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-800 hover:text-blueGray-500">
                        <i class="fas fa-user-circle mr-2 text-sm text-blueGray-400"></i>Prices
                    </a>
                    <a href="{{ route('stock') }}"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-800 hover:text-blueGray-500">
                        <i class="fas fa-paint-brush mr-2 text-sm text-blueGray-400"></i>Stock
                    </a>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            class="text-xs uppercase py-3 font-bold block text-blueGray-800 hover:text-blueGray-500">
                            <i class="fas fa-paint-brush mr-2 text-sm text-blueGray-400"></i>Log Out
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
